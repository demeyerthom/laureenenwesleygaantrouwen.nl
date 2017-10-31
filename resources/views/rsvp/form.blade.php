@extends('master')

@section('content')
    @if($permissions === null)
        <div class="bg-faded p-4 my-4">
            <hr class="divider">
            <h2 class="text-center text-lg text-uppercase my-0">RSVP</h2>
            <hr class="divider">
            <p>Het lijkt erop dat je niet met een goede url op deze pagina terecht bent gekomen. Neem contact op met
                iemand!</p>
        </div>
    @else
        <div class="bg-faded p-4 my-4">
            <hr class="divider">
            <h2 class="text-center text-lg text-uppercase my-0">RSVP</h2>
            <hr class="divider">
            <p>Beste uitgenodigde: hier kan je je aanwezigheid invullen! Mocht je dit voor meerdere mensen willen doen
                dan kan je hen toevoegen door beneden op 'Nog iemand toevoegen' te drukken.</p>
        </div>
        <form id="inviteeForm">
            {{ csrf_field() }}
            <div id="invitees"></div>
            <div class="bg-faded p-4 my-4">
                <button type="submit" id="add-invitee" class="btn btn-lg btn-outline-primary">
                    Nog iemand toevoegen
                </button>
                <button type="submit" id="save-invitees" class="btn btn-lg btn-outline-success float-right">
                    Opslaan
                </button>
            </div>
        </form>
        <div id="invitee-template" class="d-none bg-faded p-4 my-4">
            <div class="row">
                <div class="col-md-12">
                    <h3>Persoonsgegevens</h3>
                    <div class="form-group">
                        <label for="first-name">Voornaam</label>
                        <div id="first-name-error" class="alert alert-danger" role="alert" hidden>
                            Deze is wel echt heel belangrijk. Invullen graag!
                        </div>
                        <input type="text" id="first-name" class="form-control" placeholder="Voornaam"
                               name="first-name">
                    </div>

                    <div class="form-group">
                        <label for="last-name">Achternaam</label>
                        <div id="last-name-error" class="alert alert-danger" role="alert" hidden>
                            Waarschijnlijk weten we al genoeg met alleen je voornaam, maar we hebben liever ook je
                            achternaam!
                        </div>
                        <input type="text" id="last-name" class="form-control" placeholder="Achternaam"
                               name="last-name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email addres</label>
                        <div id="email-error" class="alert alert-danger" role="alert" hidden>
                            We zouden graag je mail willen hebben voor "spamdoeleinden"
                        </div>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                               placeholder="voorbeeld@voorbeeld.nl" name="email">
                        <small id="emailHelp" class="form-text text-muted">
                            Het is mogelijk dat wij al uw gegevens aan derden verkopen. Kosten laag houden en zo....
                        </small>
                    </div>

                    @if($permissions->reception)
                        <div class="form-group">
                            <h3>Receptie</h3>
                            <div id="reception-error" class="alert alert-danger" role="alert" hidden>
                                Hoe bedoel je, je vult niets in ?!
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="reception"
                                           value="1">Ja, ik ben aanwezig bij de receptie.
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="reception" value="0">Nee, ik ben
                                    niet aanwezig bij de receptie
                                </label>
                            </div>
                        </div>
                    @endif

                    @if($permissions->dinner)
                        <div class="form-group">
                            <h3>Dinner</h3>
                            <div id="dinner-error" class="alert alert-danger" role="alert" hidden>
                                We weten dat keuzes moeilijk zijn, maar hier moet je er toch echt even een maken! Kies
                                bij twijfel vegetarisch, daar wordt iedereen (behalve de kok) gelukkiger van!
                            </div>
                            <div class="form-check form-check-inline">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="card-group">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">Vlees</h4>
                                                    <p class="card-text">Het precieze menu moet not bepaald worden</p>
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio"
                                                               name="dinner"
                                                               value="meat">
                                                        Ik neem vlees!
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">Vis</h4>
                                                    <p class="card-text">Het precieze menu moet not bepaald worden</p>
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio"
                                                               name="dinner"
                                                               value="fish">
                                                        Nee, liever vis!
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">Vegetarisch</h4>
                                                    <p class="card-text">Het precieze menu moet not bepaald worden</p>
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio"
                                                               name="dinner"
                                                               value="vegetarian">
                                                        Ik vind de natuur belangrijk en zo, liever vegetarisch!
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">Niet aanwezig bij het dinner</h4>
                                                    <p class="card-text">Omdat ik belangrijkere dingen met mijn leven te
                                                        doen heb kom ik niet...</p>
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio"
                                                               name="dinner"
                                                               value="0">
                                                        Ik kom niet!
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
                            <h3>Party</h3>
                            <div id="party-error" class="alert alert-danger" role="alert" hidden>
                                Ah toe nou, vul hem alstublieft in!
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="party"
                                           value="1">Ja, ik ben aanwezig bij het feest.
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="party" id="party-no"
                                           value="0">Nee, ik ben niet aanwezig bij het feest
                                </label>
                            </div>
                        </div>
                    @endif

                    <button type="submit" id="delete-invitee" class="btn btn-lg btn-outline-danger float-right">
                        Ik wil deze eigenlijk helemaal niet opslaan
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
            console.log('Added!');
        }

        $(document).ready(function () {
            addInvitee();
        });

        $("#add-invitee").on("click", function (event) {
            event.preventDefault();
            addInvitee();
        });

        $("#save-invitees").on("click", function (event) {
            event.preventDefault();
            data = $("#inviteeForm").serializeArray();
            data.permissions = {name: 'permissions', value: getQueryParam('permissions')};

            $('[id*="-error"]').each(function (index) {
                $(this).prop('hidden', 'false');
            });

            $.post(window.location.href, data, function (data) {
                    window.location.href = data;
                }
            ).fail(function (jqXHR, textStatus, errorThrown) {
                if (jqXHR.status === 422) {
                    let error = JSON.parse(jqXHR.responseText);
                    for (var key in error.errors) {
                        if (error.errors.hasOwnProperty(key)) {
                            let elements = key.split('.');
                            inviteeId = elements[0] + '-' + elements[1];
                            errorMsg = $('#' + inviteeId).find('#' + elements[2] + '-error');
                            errorMsg.removeAttr('hidden');
                        }
                    }
                } else {
                    alert('Er is iets grandioos fout gegaan :(')
                }
            });
        });
    </script>
@endsection
