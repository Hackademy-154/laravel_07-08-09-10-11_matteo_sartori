<x-layout>

    <div class="container navDumb">
        <div class="row justify-content-center py-5">
            @if (session('success'))
                <div class="alert alert-success text-center">
                    {{ session('success') }}
                </div>
            @endif
            @foreach ($films as $film)
                <div class="col-12 col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ Storage::url($film->img) }}" alt="" class="img-card-top img-fluid rounded">
                        <div class="card-body">
                            <h5 class="card-title">Titolo: {{ $film->title }} </h5>
                            <p class="card-text">Trama: {{ $film->plot }} </p>
                            <p class="card-text">Durata {{ $film->duration }} </p>
                            <a href="#" type="submit">Go somewhere</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

</x-layout>
