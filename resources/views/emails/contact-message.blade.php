<x-mail::message>
# Nuevo mensaje desde el formulario de contacto

**Nombre:** {{ $senderName }}
**Correo:** {{ $senderEmail }}
@if ($senderPhone)
**Teléfono:** {{ $senderPhone }}
@endif
@if ($subjectLine)
**Asunto:** {{ $subjectLine }}
@endif

**Mensaje:**

{{ $comments }}

<x-mail::button :url="'mailto:' . $senderEmail">
Responder a {{ $senderName }}
</x-mail::button>

Enviado desde el formulario de contacto de frontsalud.com
</x-mail::message>
