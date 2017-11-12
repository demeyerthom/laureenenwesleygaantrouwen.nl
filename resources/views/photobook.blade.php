@extends('master')

@section('content')
    <div class="row bg-faded p-4 my-4">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase">Foto album</h2>
        <hr class="divider">
    </div>
    @if(!empty($directories))
        <div class="row bg-faded p-4 my-4">
            <div class="col-md-12">
                <h2 class="text-center text-lg text-uppercase">Albums</h2>
            </div>
            <div class="col-md-12">
                <ul class="list-inline">
                    @foreach($directories as $directory)
                        <li class="list-inline-item">
                            <a href="{{route('photobook',['directory' => $directory])}}">
                                <i class="fa fa-folder-open" aria-hidden="true"></i> {{basename($directory)}}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
    <div class="row bg-faded p-4 my-4">
        <div class="col-md-12">
            <h2 class="text-center text-lg text-uppercase">Foto's</h2>
        </div>
        <div class="col-md-12">
            @if(!empty($images))
                <div class="card-columns">
                    @foreach($images as $image)
                        <div class="card">
                            <a href="{{url($image)}}" data-toggle="lightbox" data-gallery="photobook">
                                <img class="card-img img-rounded" src="{{url($image)}}" alt="Card image">
                            </a>
                        </div>
                    @endforeach
                </div>
            @endif
            <p>Geen plaatjes in deze map</p>
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