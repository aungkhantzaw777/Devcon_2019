@component('mail::message')
# Congratuation Your Registration is success

hi, ko {{$user->username}}, your ticket id is : {{$user->ticket->ticket_id}}

@component('mail::button', ['url' => '/home'])
confrim email
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
