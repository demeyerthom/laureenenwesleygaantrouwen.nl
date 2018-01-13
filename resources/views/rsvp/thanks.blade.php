@extends('master')

@section('content')
    <div class="bg-faded p-4 my-4">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">Aanwezigheid gasten</h2>
        <hr class="divider">
        <p>Bedankt voor het invullen! Er is een mail naar je onderweg met een bevestiging van al je
            inschrijvingen. Hieronder in ieder geval nog een recap van wat je hebt ingevuld:</p>
        <p>
        <div class="row">
            @foreach($invitees as $invitee)
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{$invitee->first_name}} {{$invitee->last_name}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{$invitee->email}}</h6>

                            <ul>
                                @if($invitee->eventPermission->reception)
                                    @if($invitee->at_reception)
                                        <li class="card-text">
                                            Naar de ceremonie
                                        </li>
                                    @else
                                        <li class="card-text">
                                            Niet naar de ceremonie
                                        </li>
                                    @endif
                                @endif

                                @if($invitee->eventPermission->dinner)
                                    @if($invitee->at_dinner)
                                        <li class="card-text">
                                            Naar het dinner
                                        </li>
                                    @else
                                        <li class="card-text">
                                            Niet naar het dinner
                                        </li>
                                    @endif
                                @endif

                                @if($invitee->eventPermission->party)
                                    @if($invitee->at_party)
                                        <li class="card-text">
                                            Naar het feest
                                        </li>
                                    @else
                                        <li class="card-text">
                                            Niet naar het feest
                                        </li>
                                    @endif
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        </p>
        <p>
            Kijk ook even bij de <a href="{{route('gift-list')}}">cadeaus</a> als je inspiratie nodig hebt voor cadeaus,
            of kijk bij <a href="{{route('home')}}">overige informatie</a> voor meer informatie!
        </p>
        <p><em>We zien je graag daar!</em></p>
    </div>
@endsection
