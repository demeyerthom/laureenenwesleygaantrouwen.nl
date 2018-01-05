@component('mail::message')
# Een nieuwe RSVP ingevuld

Er is een nieuwe RSVP ingevuld! Zie hieronder voor alle informatie!

@component('mail::table')
| Voornaam| Achternaam | Email | Bij ceremonie | Bij eten | Bij feest |
| --- | --- | --- | --- | --- | --- |
@foreach($invitees as $invitee)
| {{$invitee->first_name}} | {{$invitee->last_name}} | {{$invitee->email}} | {{$invitee->at_reception ? 'ja' : 'nee'}} | {{$invitee->at_dinner ? 'ja' : 'nee'}} | {{$invitee->at_party ? 'ja' : 'nee'}} |
@endforeach
@endcomponent

Veel plezier ermee!<br>
{{ config('app.name') }}
@endcomponent