@extends('master')

@section('content')
    <div class="row bg-faded p-4 my-4">
        <div class="col-md-12">
            <hr class="divider">
            <h2 class="text-center text-lg text-uppercase">Cadeaus</h2>
            <hr class="divider">
        </div>
        <div class="row">
            @if(!empty($gifts))
                @foreach($gifts as $gift)
                    <div class="col-sm-3">
                        <div class="card">
                            <img class="card-img-top" src="/storage/{{$gift->image}}" alt="{{$gift->name}}">
                            <div class="card-body">
                                <p class="card-text">{{$gift->description}}</p>
                            </div>
                            <div class="card-footer">
                                @if($gift->amount !== 0)
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#modal{{$gift->id}}">Nog te geven: {{$gift->amount}}</button>
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
                                            @if($gift->amount !== 0)
                                                <label for="amount">Aantal geven</label>
                                                <input type="number" class="form-control" id="amount"
                                                       min="1" max="{{$gift->amount}}"
                                                       aria-describedby="emailHelp" value="1">
                                            @else
                                                <label for="amount">Hoeveelheid geven</label>
                                                <input type="number" class="form-control" id="amount"
                                                       min="1" step="0.5"
                                                       aria-describedby="emailHelp" value="1">
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email address</label>
                                            <input type="email" class="form-control" id="email"
                                                   aria-describedby="emailHelp" placeholder="Enter email">
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
            @else
                <p>Er zijn geen cadeaus ingevoerd!</p>
            @endif
        </div>
    </div>
@endsection