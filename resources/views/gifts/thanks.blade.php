@extends('master')

@section('content')
    <div class="row bg-faded p-4 my-4">
        <div class="col-md-12">
            <hr class="divider">
            <h2 class="text-center text-lg text-uppercase">Bedankt voor de bijdrage</h2>
            <hr class="divider">
        </div>
        <div class="col-md-12">
            <p>Beste {{$reservation->first_name}},</p>
            <p>Bedankt voor je bijdrage! We hebben een email verstuurd naar {{$reservation->email}} met
                betalingsgegevens!</p>
            <p>Ga weer terug naar <a href="{{route('gift-list')}}">de cadeaulijst</a> om nog een cadeau te kopen, of ga
                terug naar <a href="{{route('home')}}">home</a> om andere delen van de website te zien!</p>
        </div>
    </div>
@endsection