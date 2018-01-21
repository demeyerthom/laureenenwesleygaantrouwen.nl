@component('mail::message')
Beste {{$invitees[0]->first_name}},

Bedankt voor het invullen van de RSVP.  Mochten er zich nog wijzigingen voordoen dan houden we je via de mail op de hoogte.

Groetjes,

{{ config('app.name') }}
@endcomponent