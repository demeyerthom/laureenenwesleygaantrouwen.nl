@extends('master')

@section('content')
    <div class="row bg-faded p-4 my-4">
        <div class="row col-md-12">
            <hr class="divider">
            <h2 class="text-center text-lg text-uppercase my-0">Foto album</h2>
            <hr class="divider">
        </div>
        <div class="row col-md-12 grid" >
            @foreach($images as $image)
                <div class="grid-item col-md-4">
                    <a href="{{url($image)}}" data-toggle="lightbox"
                       data-gallery="photobook" class="col-sm-4">
                        <img src="{{url($image)}}" alt="..." class="img-thumbnail img-fluid">
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