@extends('master')

@section('content')
    <div class="bg-faded p-4 my-4">
        <div class="countdown text-center" id="js-countdown">
            <div class="countdown-item countdown-item-large">
                <div class="countdown-timer js-countdown-days" aria-labelledby="day-countdown"></div>
                <div class="countdown-label" id="day-countdown">Dagen</div>
            </div>
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
                <div class="countdown-label" id="second-countdown">Secondes</div>
            </div>
        </div>
    </div>

    <!--<div class="bg-faded p-4 my-4">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">Build a website worth visiting</h2>
        <hr class="divider">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam soluta dolore voluptatem, deleniti
            dignissimos excepturi veritatis cum hic sunt perferendis ipsum perspiciatis nam officiis sequi atque enim
            ut! Velit, consectetur.
        </p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam pariatur perspiciatis reprehenderit illo
            et vitae iste provident debitis quos corporis saepe deserunt ad, officia, minima natus molestias assumenda
            nisi velit?
        </p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit totam libero expedita magni est
            delectus pariatur aut, aperiam eveniet velit cum possimus, autem voluptas. Eum qui ut quasi voluptate
            blanditiis?
        </p>
    </div>-->
@endsection

@section('scripts')
    <script>initClock("js-countdown", new Date("{{setting('home.datum')}}"));</script>
@endsection