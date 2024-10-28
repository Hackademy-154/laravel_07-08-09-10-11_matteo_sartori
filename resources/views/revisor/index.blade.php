<x-layout>
    <div class="container-fluid container-xl containerREV navDumb">
        <div class="row justify-content-center py-5 ">
            <h1 class="text-center text-white fs-1 fw-bold mb-0">Sezione Revisione</h1>
            @if (session('success'))
                <div class="alert alert-success text-center mt-5">
                    {{ session('success') }}
                </div>
            @endif
            <hr class="section-divider my-5" style="height: 2px !important; width: 80% !important;">

            <div class="floating-guide d-none d-md-block">
                <h4 class="guide-title">Linee guida</h4>
                <hr class="section-divider" style="height: 2px !important;">
                <ol class="guide-steps">
                    <li>Verifica che il titolo del film sia corretto.</li>
                    <li>Assicurati che l'immagine di copertina sia di alta qualità.</li>
                    <li>Controlla la descrizione del film per eventuali errori grammaticali.</li>
                    <li>Verifica la correttezza delle informazioni sui dettagli del film (es. anno, durata).</li>
                    <li>Assicurati che il genere sia selezionato correttamente.</li>
                </ol>
            </div>

            @foreach ($films as $film)
                <div class="ContainerRevision mx-2 col-4 col-md-4 col-lg-2 mb-3 position-relative">
                    <div class="row h-100">
                        <div class="col-12 fd cardFilmsRevision"
                            style="background-image: url({{ Storage::url($film->img) }});">
                            <div class="row h-100 text-film justify-content-between">
                                <div class="col-12 d-flex">
                                    <i class="bi bi-film fs-2 filmIcon"></i>
                                </div>
                                <div class="col-12 d-flex mt-3">
                                    <h3 class="film-title">{{ $film->title }}</h3>
                                </div>
                            </div>
                            <div class="barraButtons">
                                <form action="{{ route('film.destroy', $film) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" href="{{ route('film.destroy', ['film' => $film]) }}"
                                        class="btn-revised-delete"><i class="bi bi-x-lg"></i></button>
                                </form>
                                <a href="{{ route('film.edit', ['film' => $film]) }}" class="btn-revised-edit"><i
                                        class="bi bi-pencil"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
