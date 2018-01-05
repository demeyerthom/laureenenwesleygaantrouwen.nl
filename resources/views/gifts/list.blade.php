@extends('master')

@section('content')
    <div class="row bg-faded p-4 my-4">
        <div class="col-md-12">
            <hr class="divider">
            <h2 class="text-center text-lg text-uppercase">Cadeaus</h2>
            <hr class="divider">
        </div>
        @if(!empty($gifts))
            <div class="card-columns">
                @foreach($gifts as $gift)
                    <div class="">
                        <div class="card">
                            <img class="card-img-top" src="/storage/{{$gift->image}}" alt="{{$gift->name}}">
                            <div class="card-body">
                                <h3 class="card-title">{{$gift->name}}</h3>
                                <p class="card-text">{{$gift->description}}</p>
                            </div>
                            <div class="card-footer">
                                @if($gift->currentAmount() <= 0)
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#modal{{$gift->id}}" disabled>Helemaal vergeven
                                    </button>
                                @else
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#modal{{$gift->id}}">Nog te geven:
                                        {{round($gift->currentAmount(), 2)}} &euro;
                                    </button>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="modal fade bd-example-modal-lg" id="modal{{$gift->id}}" tabindex="-1" role="dialog"
                         aria-labelledby="modal-{{$gift->id}}-label" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modal-{{$gift->id}}-label">Geven: {{$gift->name}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="" method="POST" id="gift-contribution-{{$gift->id}}">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="first-name">Voornaam</label>
                                            <div id="first-name-error-{{$gift->id}}" class="alert alert-danger"
                                                 role="alert" hidden>
                                                We hebben je naam nodig!
                                            </div>
                                            <input type="text" class="form-control" id="first-name"
                                                   placeholder="Voornaam" name="first_name">
                                        </div>
                                        <div class="form-group">
                                            <label for="last-name">Achternaam</label>
                                            <div id="last-name-error-{{$gift->id}}" class="alert alert-danger"
                                                 role="alert" hidden>
                                                We hebben je achternaam nodig!
                                            </div>
                                            <input type="text" class="form-control" id="last-name"
                                                   placeholder="Achternaam" name="last_name">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email address</label>
                                            <div id="email-error-{{$gift->id}}" class="alert alert-danger" role="alert"
                                                 hidden>
                                                Graag je email!
                                            </div>
                                            <input type="email" class="form-control" id="email"
                                                   placeholder="Email" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="amount">Aantal euros die je wilt geven</label>
                                            <div id="amount-error-{{$gift->id}}" class="alert alert-danger" role="alert"
                                                 hidden>
                                                Dit bedrag is incorrect!
                                            </div>
                                            <input type="number" class="form-control" id="amount"
                                                   step="1.00" value="1.00" name="amount">
                                        </div>
                                        {{ csrf_field() }}
                                        <input type="hidden" name="gift_id" value="{{$gift->id}}">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Terug
                                        </button>
                                        <button type="button" class="btn btn-primary" id="submit-{{$gift->id}}">
                                            Opslaan
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p>Er zijn geen cadeaus ingevoerd!</p>
        @endif
    </div>
@endsection

@section('scripts')
    <script>
        $("[id^=submit]").on("click", function (event) {
            event.preventDefault();
            let id = this.id.replace("submit-", "");
            $("[id*=error]").prop('hidden', true);
            let formId = "gift-contribution-" + id;
            let data = $("#" + formId).serializeArray();

            $.post(window.location.href, data, function (data) {
                    window.location.href = data;
                }
            ).fail(function (jqXHR, textStatus, errorThrown) {
                if (jqXHR.status === 422) {
                    let error = JSON.parse(jqXHR.responseText);
                    for (var key in error.errors) {
                        if (error.errors.hasOwnProperty(key)) {
                            key = key.replace("_", "-") + "-error-" + id;
                            $('#' + key).prop('hidden', false);
                        }
                    }
                } else {
                    alert("Er is iets grandioos fout gegaan :(");
                }
            });
        });
    </script>
@endsection