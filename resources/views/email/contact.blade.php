@component('mail::message')
# New Contact From JermAshley!


{{ $form->name}} sent a message.

@component('mail::panel')
{{ $form->message }}
@endcomponent

<a href="mailto:{{ $form->email}}">Reply</a><br>

@endcomponent


{{--  Name: {{ $form->name}}<br>
Email: <a href="mailto:{{ $form->email}}">{{ $form->email}}</a><br>
{{ $form->message}}  --}}