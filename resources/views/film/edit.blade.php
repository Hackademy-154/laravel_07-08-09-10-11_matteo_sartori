<x-layout>
    <div class="container  py-5">
        <div class="row justify-content-center pt-4">

            <div class="col-6 formFilm d-flex flex-column justify-content-center align-items-center w-75">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <h2 class="mb-0">Modifica Film</h2>
                <hr class="section-divider w-100">
                {{-- Form --}}
                <form action="{{ route('film.update', compact('film')) }}" method="POST" enctype="multipart/form-data"
                    class="p-3">
                    @method('PUT')
                    @if (session('success'))
                        <div class="alert alert-success text-center">
                            {{ session('success') }}
                        </div>
                    @endif
                    @csrf
                    <div class="col-12 d-flex flex-column">
                        <label for="title" class="form-label ">Titolo:</label>
                        <input type="text" id="title" name="title" class="form-control"
                            value="{{ $film->title }}">
                    </div>
                    <div class="col-12 d-flex flex-column mt-2">
                        <div class="col-12">
                            <label class="form-check-label" for="">Categorie:</label>
                        </div>
                        <div class="col-12">
                            @foreach ($categories as $category)
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="categories[]"
                                        value="{{ $category->id }}" id="category-{{ $category->id }}"
                                        {{ $film->categories->contains($category->id) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="category-{{ $category->id }}">
                                        {{ $category->name }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column mt-3 mb-0">
                        <label for="plot" class="form-label">Trama:</label>
                        <textarea type="text" id="plot" name="plot" class="form-text" cols="30" rows="6"> {{ $film->plot }}</textarea>
                    </div>
                    <div class="col-12 d-flex flex-column mt-3 mb-0">
                        <label for="date" class="form-label">Anno di uscita:</label>
                        <input type="number" id="date" name="date" class="form-control">
                    </div>
                    <div class="col-12 d-flex flex-column mt-3 mb-0">
                        <label for="duration" class="form-label">Durata minuti:</label>
                        <input type="number" id="duration" name="duration" class="form-control"
                            value="{{ $film->duration }}">
                    </div>
                    <div class="col-12 d-flex flex-column mt-3 mb-0">
                        <div class="mb-3 d-flex flex-column justify-content-center">
                            <p class="text-black text-start">Vecchia immagine:</p>
                            <img class="img-fluid" style="height: 400px; width: 100%;"
                                src="{{ Storage::url($film->img) }}" alt="">
                        </div>
                        <label class="form-label" for="img">Immagine di copertina</label>
                        <input type="file" id="img" class="form-control" name="img">
                    </div>
                    <div class="row ">
                        <div class="col-12 d-flex justify-content-between">
                            <div class="col-6 mt-4 d-flex justify-content-start bu">
                                <div class="button-hero" id="">
                                    <a class="text-decoration-none text-white"
                                        href="{{ route('revisorIndex') }}">Annulla</a>
                                </div>
                            </div>
                            <div class="col-6 mt-4 d-flex justify-content-end ">
                                <button class="button-hero buu" type="submit">Modifica</button>
                            </div>
                        </div>
                    </div>
                </form>
                {{-- Fine Form --}}

            </div>
        </div>
    </div>

</x-layout>
