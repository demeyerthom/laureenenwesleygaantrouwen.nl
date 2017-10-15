@extends('master')

@section('content')
    <div class="bg-faded p-4 my-4">
        <p>
            Welkom <strong>{{$invitee->getFullName()}}</strong>!
        </p>
    </div>
    @if($invitee->invited_reception)
        <div class="bg-faded p-4 my-4">
            <hr class="divider">
            <h2 class="text-center text-lg text-uppercase my-0">Receptie</h2>
            <hr class="divider">
        </div>
    @endif
    @if($invitee->invited_dinner)
        <div class="bg-faded p-4 my-4">
            <hr class="divider">
            <h2 class="text-center text-lg text-uppercase my-0">Dinner</h2>
            <hr class="divider">
        </div>
    @endif
    @if($invitee->invited_party)
        <div class="bg-faded p-4 my-4">
            <hr class="divider">
            <h2 class="text-center text-lg text-uppercase my-0">Feest</h2>
            <hr class="divider">
        </div>
    @endif
    <div class="bg-faded p-4 my-4">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">Op de hoogte blijven</h2>
        <hr class="divider">
    </div>
@endsection
