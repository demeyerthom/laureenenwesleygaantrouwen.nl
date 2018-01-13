@extends('master')

@section('content')
    <div class="bg-faded p-4 my-4 content-block">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">{{$page->title}}</h2>
        <hr class="divider">
        <div class="col-md-12">
            {!! $page->body !!}
        </div>
    </div>
@endsection