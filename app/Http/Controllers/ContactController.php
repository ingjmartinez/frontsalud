<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Mail\ContactMessageMail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;

class ContactController extends Controller
{
    public function store(StoreContactRequest $request): RedirectResponse
    {
        $data = $request->validated();

        try {
            Mail::to(config('mail.contact_to'))->send(new ContactMessageMail(
                senderName: $data['name'],
                senderEmail: $data['email'],
                senderPhone: $data['phone'] ?? null,
                subjectLine: $data['subject'] ?? null,
                comments: $data['comments'],
            ));
        } catch (TransportExceptionInterface $e) {
            Log::error('Fallo al enviar mensaje de contacto: ' . $e->getMessage());

            return back()
                ->withInput()
                ->with('contacto_error', true)
                ->withFragment('contacto');
        }

        return back()
            ->with('contacto_enviado', true)
            ->withFragment('contacto');
    }
}
