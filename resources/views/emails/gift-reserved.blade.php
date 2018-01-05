@component('mail::message')

Beste {{$reservation->first_name}}

Bedankt voor het bijdragen aan {{$reservation->gift->name}}.

Het bedrag ({{round($reservation->amount, 2) }} &euro;) kan je over maken naar xxxx.xxxx.xxxx.xxxx.

Tot de bruiloft!

{{ config('app.name') }}
@endcomponent