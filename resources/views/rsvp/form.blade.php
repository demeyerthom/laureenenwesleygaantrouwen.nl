@extends('master')

@section('content')
    @if($permissions === null)
        <div class="bg-faded p-4 my-4">
            <hr class="divider">
            <h2 class="text-center text-lg text-uppercase my-0">RSVP</h2>
            <hr class="divider">
            <p>Het lijkt erop dat je niet met een goede url op deze pagina terecht bent gekomen. Neem contact op met iemand!</p>
        </div>
    @else
        <div class="bg-faded p-4 my-4">
            <hr class="divider">
            <h2 class="text-center text-lg text-uppercase my-0">RSVP</h2>
            <hr class="divider">
            <p>Beste uitgenodigde: hier kan je je aanwezigheid invullen! Mocht je dit voor meerdere mensen willen doen dan kan je hen toevoegen door op de betreffende knop te drukken.</p>
        </div>
        <form id="inviteeForm">
            {{ csrf_field() }}
            <div id="invitees"></div>
            <div class="bg-faded p-4 my-4">
                <button type="submit" id="add-invitee" class="btn btn-lg btn-outline-primary">Nog iemand toevoegen
                </button>
                <button type="submit" id="save-invitees" class="btn btn-lg btn-outline-success float-right disabled">
                    Opslaan
                </button>
            </div>
        </form>
        <div id="invitee-template" class="d-none bg-faded p-4 my-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <h3>Persoonsgegevens</h3>
                        <div class="form-row">
                            <div class="col">
                                <label for="first-name">Voornaam</label>
                                <input type="text" id="first-name" class="form-control" placeholder=""
                                       name="first-name">
                            </div>
                            <div class="col">
                                <label for="last-name">Achternaam</label>
                                <input type="text" id="last-name" class="form-control" placeholder=""
                                       name="last-name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="email">Email addres</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                       placeholder="voorbeeld@voorbeeld.nl" name="email">
                                <small id="emailHelp" class="form-text text-muted">Het is mogelijk dat wij al uw
                                    gegevens
                                    aan
                                    derden verkopen. Kosten laag houden en zo....
                                </small>
                            </div>
                        </div>
                    </div>

                    @if($permissions->reception)
                        <div class="form-group">
                            <h3>Receptie</h3>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="reception" id="reception-yes"
                                           value="yes">Ja, ik ben aanwezig bij de receptie.
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="reception" id="reception-no"
                                           value="no">Nee, ik ben niet aanwezig bij de receptie
                                </label>
                            </div>
                        </div>
                    @endif

                    @if($permissions->diner)
                        <div class="form-group">
                            <h3>Diner</h3>
                            <div class="form-check form-check-inline">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="card-group">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">Vlees</h4>
                                                    <p class="card-text">Some quick example text to build on the card
                                                        title
                                                        and
                                                        make
                                                        up
                                                        the
                                                        bulk of the card's content.</p>
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="dinner"
                                                               id="dinner-1"
                                                               value="1">
                                                        Ik neem vlees!
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">Vis</h4>
                                                    <p class="card-text">Some quick example text to build on the card
                                                        title
                                                        and
                                                        make
                                                        up
                                                        the
                                                        bulk of the card's content.</p>
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="dinner"
                                                               id="dinner-2"
                                                               value="2">
                                                        Nee, liever vis!
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">Vegetarisch</h4>
                                                    <p class="card-text">Some quick example text to build on the card
                                                        title
                                                        and
                                                        make
                                                        up
                                                        the
                                                        bulk of the card's content.</p>
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="dinner"
                                                               id="dinner-3"
                                                               value="3">
                                                        Ik vind de natuur belangrijk en zo, liever vegetarisch!
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if($permissions->party)
                        <div class="form-group">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="party" id="party-yes"
                                           value="yes">Ja, ik ben aanwezig bij het feest.
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="party" id="party-no"
                                           value="no">Nee, ik ben niet aanwezig bij het feest
                                </label>
                            </div>
                        </div>
                    @endif

                    <button type="submit" id="delete-invitee" class="btn btn-lg btn-outline-danger float-right">
                        Verwijder
                    </button>
                </div>
            </div>
        </div>
    @endif
@endsection

@section('scripts')
    <script>
        let index = 0;

        function addInvitee() {
            let clonedForm = $('#invitee-template').clone();

            clonedForm.removeClass('d-none');
            clonedForm.data('id', index);
            clonedForm.attr('id', "invitee-" + index);
            clonedForm.find("[name]")
                .each(function () {
                    this.name = "invitee[" + index + "][" + this.name + "]";
                });
            clonedForm.find('button[id="delete-invitee"]')
                .each(function () {
                    $(this).attr('id', "delete-invitee-" + index);
                    $(this).data('id', index);
                    $(this).on('click', function (event) {
                        event.preventDefault();
                        $('#invitee-' + $(this).data('id')).remove();
                    });
                });
            $("#invitees").append(clonedForm);
            index++;
        }

        $("#add-invitee").on("click", function (event) {
            event.preventDefault();
            addInvitee();
        });

        $("#save-invitees").on("click", function (event) {
            event.preventDefault();
            alert('Nog niet geimplementeerd!');
        });

        $(document).ready(function () {
            addInvitee();
        });
    </script>
@endsection
