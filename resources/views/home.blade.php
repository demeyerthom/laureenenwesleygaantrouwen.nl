@extends('master')

@section('content')
    <div class="bg-faded p-4 my-4">
        <div>
            <hr>
            <div class="countdown text-center col-md-6" id="js-countdown">
                <div class="countdown-item col-md-6">
                    <div class="countdown-timer js-countdown-days" aria-labelledby="day-countdown"></div>
                    <div class="countdown-label" id="day-countdown">Dagen</div>
                </div>
                <div class="countdown-item col-md-6">
                    <div class="countdown-timer js-countdown-hours" aria-labelledby="hour-countdown"></div>
                    <div class="countdown-label" id="hour-countdown">Uren</div>
                </div>
            </div>
            <hr>

            <div class="text-center col-md-12">
                <p class="font-weight-bold text-uppercase">Zaterdag 9 Juni 2018</p>
                <p>
                    Geven om 15:00 Laureen en Wesley elkaar het ja-woord
                    <br>
                    in
                    <br>
                    Raadhuis de Paauw
                    <br>
                    Raadhuislaan 22, 2242 CP Wassenaar
                </p>
                <p class="font-italic">Wij zouden het een eer vinden
                    om dit moment met jullie te delen!
                </p>
            </div>
            <hr class="divider">
            <div class="text-center col-md-12">
                <a type="submit" href="{{route('rsvp-form')}}" class="btn btn-lg btn-success">
                    Geef je op!
                </a>
            </div>
        </div>
    </div>
    <div class="bg-faded p-4 my-4">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">Er waren eens 2 koppels.......</h2>
        <hr class="divider">

        <div class="col-md-12">
            <ul class="timeline">
                <li>
                    <div class="timeline-badge primary">
                        <a><i class="fa fa-spoon" rel="tooltip"></i>
                        </a>
                    </div>
                    <div class="bg-faded p-4 my-4 timeline-panel">
                        <div class="timeline-title">
                            Die met elkaar trouwden
                        </div>
                        <div class="timeline-body row">
                            <div class="col-md-6">
                                <img class="img-fluid" src="/storage/timeline/trouw_knoppert.jpg"/>
                            </div>
                            <div class="col-md-6">
                                <img class="img-fluid" src="/storage/timeline/trouw_demeyer.jpg"/>
                            </div>

                        </div>
                    </div>
                </li>

                <li class="timeline-inverted">
                    <div class="timeline-badge primary">
                        <a><i class="fa fa-bomb" rel="tooltip"></i>
                        </a>
                    </div>
                    <div class="bg-faded p-4 my-4 timeline-panel">
                        <div class="timeline-title">
                            Daar kwamen een stel kinderen van (niet de meest interresante van hun nageslacht, <em>but
                                what
                                can you do</em>)
                        </div>
                        <div class="timeline-body row">
                            <div class="col-md-6">
                                <img class="img-fluid" src="/storage/timeline/baby_wesley.jpg"/>
                            </div>
                            <div class="col-md-6">
                                <img class="img-fluid" src="/storage/timeline/baby_laureen.jpg"/>
                            </div>

                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-badge primary">
                        <a><i class="fa fa-university" rel="tooltip"></i>
                        </a>
                    </div>
                    <div class="bg-faded p-4 my-4 timeline-panel">
                        <div class="timeline-body row">
                            <div class="col-md-6">
                                <img class="img-fluid" src="/storage/timeline/haagse_hogeschool.jpg"/>
                            </div>
                            <div class="col-md-6">
                                <p>Nu, hebben zij elkaar gevonden via hun studie.</p>
                            </div>

                        </div>
                    </div>
                </li>

                <li class="timeline-inverted">
                    <div class="timeline-badge primary">
                        <a><i class="fa fa-glass" rel="tooltip"></i>
                        </a>
                    </div>
                    <div class="bg-faded p-4 my-4 timeline-panel">
                        <div class="timeline-body row">
                            <div class="col-md-6">
                                <p>Maar is na de studie toch pas de liefde ontstaan in de Danzig......</p>
                            </div>
                            <div class="col-md-6">
                                <img class="img-fluid" src="/storage/timeline/danzig.jpg"/>
                            </div>

                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-badge primary">
                        <a><i class="fa fa-child" rel="tooltip"></i>
                        </a>
                    </div>
                    <div class="bg-faded p-4 my-4 timeline-panel">
                        <div class="timeline-body row">
                            <div class="col-md-6">
                                <p>Om de een of andere reden bleek zelf een baby niet genoeg te zijn ze weer uit elkaar
                                    te drijven</p>
                            </div>
                            <div class="col-md-6">
                                <img class="img-fluid" src="/storage/timeline/baby-louis.jpg"/>
                            </div>

                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-badge primary">
                        <a><i class="fa fa-wheelchair-alt" rel="tooltip"></i>
                        </a>
                    </div>
                    <div class="bg-faded p-4 my-4 timeline-panel">
                        <div class="timeline-body row">
                            <div class="col-md-6">
                                <p>Na precies 4 jaar samen te zijn, gaan ze
                                    traditioneel toch nog in het bootje stappen. </p>
                            </div>
                            <div class="col-md-6">
                                <img class="img-fluid" src="/storage/timeline/ringdinges.jpg"/>
                            </div>

                        </div>
                    </div>
                </li>
                <li class="clearfix" style="float: none;"></li>
            </ul>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            var my_posts = $("[rel=tooltip]");

            var size = $(window).width();
            for (i = 0; i < my_posts.length; i++) {
                the_post = $(my_posts[i]);

                if (the_post.hasClass('invert') && size >= 767) {
                    the_post.tooltip({placement: 'left'});
                    the_post.css("cursor", "pointer");
                } else {
                    the_post.tooltip({placement: 'rigth'});
                    the_post.css("cursor", "pointer");
                }
            }
        });
    </script>
    <script>initClock("js-countdown", new Date("{{setting('site.datum')}}"));</script>
@endsection