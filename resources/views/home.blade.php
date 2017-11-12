@extends('master')

@section('content')
    <div class="bg-faded p-4 my-4">
        <div class="countdown text-center" id="js-countdown">
            <div class="col-md-6">
                <div class="countdown-item countdown-item-large">
                    <div class="countdown-timer js-countdown-days" aria-labelledby="day-countdown"></div>
                    <div class="countdown-label" id="day-countdown">Dagen</div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="countdown-item">
                    <div class="countdown-timer js-countdown-hours" aria-labelledby="hour-countdown"></div>
                    <div class="countdown-label" id="hour-countdown">Uren</div>
                </div>
                <div class="countdown-item">
                    <div class="countdown-timer js-countdown-minutes" aria-labelledby="minute-countdown"></div>
                    <div class="countdown-label" id="minute-countdown">Minuten</div>
                </div>

                <div class="countdown-item">
                    <div class="countdown-timer js-countdown-seconds" aria-labelledby="second-countdown"></div>
                    <div class="countdown-label" id="second-countdown">Seconden</div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>initClock("js-countdown", new Date("{{setting('home.datum')}}"));</script>
@endsection