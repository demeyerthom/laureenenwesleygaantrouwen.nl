@extends('master')

@section('content')
    <div class="bg-faded p-4 my-4">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">RSVP</h2>
        <hr class="divider">
        <p>
            Het lijkt erop dat je hier zonder code terecht bent gekomen. Als je toch een code hebt, voer die dan
            hieronder in. Neem anders contact op met <a href="thomas@laureenenwesleygaantrouwen.nl">Thomas</a> om een
            nieuwe code aan te vragen.
        </p>
        <div class="row">
            <div class="col-md-6">
                <form>
                    <div class="form-group">
                        <label for="personal-code"><strong>Persoonlijke code</strong></label>
                        <input type="text" class="form-control" id="personal-code" placeholder="Je code">
                    </div>
                    <button type="submit" class="btn btn-primary">Naar de RSVP</button>
                </form>
            </div>
            <div class="col-md-6">
                <form>
                    <div class="form-group">
                        <label for="group-code"><strong>Groepscode</strong></label>
                        <input type="text" class="form-control" id="group-code" placeholder="Je groepscode">
                    </div>
                    <button type="submit" class="btn btn-primary">Naar de RSVP</button>
                </form>
            </div>
        </div>
    </div>
@endsection
