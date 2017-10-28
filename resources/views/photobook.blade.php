@extends('master')

@section('content')
    <div class="row bg-faded p-4 my-4">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase">Foto album</h2>
        <hr class="divider">
    </div>
    <div class="row bg-faded p-4 my-4">
        @foreach($directories as $directory)
            <p>
                <a href="{{route('photobook.directory',['directory' => $directory])}}">{{basename($directory)}}</a>
            </p>
        @endforeach
    </div>
    <div class="row bg-faded p-4 my-4">
        <div class="card-columns">
            @foreach($images as $image)
                <div class="card">
                    <a href="{{url($image)}}" data-toggle="lightbox" data-gallery="photobook">
                        <img class="card-img img-rounded" src="{{url($image)}}" alt="Card image">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).on('click', '[data-toggle="lightbox"]', function (event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });
    </script>
@endsection