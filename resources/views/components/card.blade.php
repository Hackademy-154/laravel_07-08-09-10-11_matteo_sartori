<div class="cardFilms me-2 col-6 col-md-4 col-lg-2 mb-2">
    <a href="{{ route('filmShow', compact('film')) }}">
        <div class="row h-100 ">
            <div class="col-12 fd" style="background-image: url({{ Storage::url($film->img) }});">
                <div class="row  h-100 text-film">
                    <div class="col-12 d-flex">
                        <i class="bi bi-film fs-2 filmIcon"></i>
                    </div>
                    <div class="col-12 d-flex mt-3 ">
                        <h3>{{ $film->title }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>
