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
                                @if(!$gift->isOpenContribution())
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#modal{{$gift->id}}">Nog te geven:
                                        {{round($gift->amount, 2)}} &euro;
                                    </button>
                                @else
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#modal{{$gift->id}}">Bijdragen
                                    </button>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="modal fade bd-example-modal-lg" id="modal{{$gift->id}}" tabindex="-1" role="dialog"
                         aria-labelledby="modal{{$gift->id}}Label" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modal{{$gift->id}}Label">Geven: {{$gift->name}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        {{ csrf_field() }}
                                        <input type="hidden" name="gift_id" value="{{$gift->id}}">
                                        <div class="form-group">
                                            <label for="first-name">Voornaam</label>
                                            <input type="text" class="form-control" id="first-name"
                                                   placeholder="Voornaam">
                                        </div>
                                        <div class="form-group">
                                            <label for="last-name">Email address</label>
                                            <input type="text" class="form-control" id="last-name"
                                                   placeholder="Achternaam">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email address</label>
                                            <input type="email" class="form-control" id="email"
                                                   placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                            <label for="amount">Aantal euros die je wilt geven</label>
                                            <input type="number" class="form-control" id="amount"
                                                   min="1.00" step="1.00" value="1.00">
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Terug</button>
                                    <button type="button" class="btn btn-primary">Opslaan</button>
                                </div>
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