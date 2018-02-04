@component('mail::message')
Beste {{$reservation->first_name}}

Bedankt voor je mooie bijdrage aan {{$reservation->gift->name}}.

Het bedrag ({{round($reservation->amount, 2) }} €) kan je over maken naar:

@component('mail::panel')
NL 43 INGB 0691871922

t.n.v. L.M.C.F. De Meyer
@endcomponent

Tot bij de bruiloft!

Laureen en Wesley.

{{ config('app.name') }}
@endcomponent