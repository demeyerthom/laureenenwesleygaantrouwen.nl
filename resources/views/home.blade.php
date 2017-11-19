@extends('master')

@section('content')
    <div class="bg-faded p-4 my-4">
        <div>
            <hr>
            <div class="countdown text-center col-md-12" id="js-countdown">
                <div class="countdown-item col-md-3">
                    <div class="countdown-timer js-countdown-days" aria-labelledby="day-countdown"></div>
                    <div class="countdown-label" id="day-countdown">Dagen</div>
                </div>
                <div class="countdown-item col-md-3">
                    <div class="countdown-timer js-countdown-hours" aria-labelledby="hour-countdown"></div>
                    <div class="countdown-label" id="hour-countdown">Uren</div>
                </div>
                <div class="countdown-item col-md-3">
                    <div class="countdown-timer js-countdown-minutes" aria-labelledby="minute-countdown"></div>
                    <div class="countdown-label" id="minute-countdown">Minuten</div>
                </div>

                <div class="countdown-item col-md-3">
                    <div class="countdown-timer js-countdown-seconds" aria-labelledby="second-countdown"></div>
                    <div class="countdown-label" id="second-countdown">Seconden</div>
                </div>
            </div>
            <hr>

            <div class="text-center col-md-12">
                <p class="font-weight-bold text-uppercase">Zaterdag Negen September Tweeduizend en Achtien</p>
                <p>
                    Geven om 15:00 Laureen en Wesley (met een beetje geluk) elkaar het ja-woord
                    <br>
                    in Raadhuis de Paauw
                    <br>
                    Raadhuislaan 22, 2242 CP Wassenaar
                </p>
                <p class="font-italic">Wij zouden het een eer vinden als jullie dit moment met ons willen delen!</p>
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
                        <div class="timeline-body row">
                            <div class="col-md-6">
                                <img class="img-fluid" src="/storage/timeline/trouw_knoppert.jpg"/>
                            </div>
                            <div class="col-md-6">
                                <p>Marion Bakker & Herman Knoppert</p>
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
                        <div class="timeline-body row">
                            <div class="col-md-6">
                                <p>Nathalie De Moyer & Thierry De Meyer</p>
                            </div>
                            <div class="col-md-6">
                                <img class="img-fluid" src="/storage/timeline/trouw_demeyer.jpg"/>
                            </div>

                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-badge primary">
                        <a><i class="fa fa-birthday-cake" rel="tooltip"></i>
                        </a>
                    </div>
                    <div class="bg-faded p-4 my-4 timeline-panel">
                        <div class="timeline-body row">
                            <div class="col-md-6">
                                <img class="img-fluid" src="/storage/timeline/baby_wesley.jpg"/>
                            </div>
                            <div class="col-md-6">
                                <p>Wesley Knoppert</p>
                            </div>

                        </div>
                    </div>
                </li>

                <li class="timeline-inverted">
                    <div class="timeline-badge primary">
                        <a><i class="fa fa-bug" rel="tooltip"></i>
                        </a>
                    </div>
                    <div class="bg-faded p-4 my-4 timeline-panel">
                        <div class="timeline-body row">
                            <div class="col-md-6">
                                <p>Laureen de Meyer</p>
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
                        <a><i class="fa fa-wheelchair-alt" rel="tooltip"></i>
                        </a>
                    </div>
                    <div class="bg-faded p-4 my-4 timeline-panel">
                        <div class="timeline-body row">
                            <div class="col-md-6">
                                <p>Na precies 4 jaar samen te zijn. Samen te wonen, een kind te hebben, gaan ze
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