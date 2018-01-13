@component('mail::message')
Beste {{$invitees[0]->first_name}},

Bedankt voor het invullen van de RSVP! We hebben je gegevens verwerkt! Mochten er zich nog wijzigingen voordoen dan houden we je via mail op de hoogte!

Groeten!

{{ config('app.name') }}
@endcomponent