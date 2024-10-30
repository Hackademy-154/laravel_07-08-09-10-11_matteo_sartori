<x-layout>

    <div class="container-fluid navDumb">
        <div class="row mt-5 py-3 justify-content-evenly align-items-center ">
            <div class="col-6 d-none" id="previewSection">
                <div class="row">
                    <div class="col-12 d-flex justify-content-start align-items-center flex-column previewDettaglio">
                        <div class="row">
                            <div class="col-12  text-center">
                                <h2 class="fs-1 fw-bolder my-2">Preview Dettaglio</h2>
                            </div>
                            <hr class="section-divider">
                            <div class="col-12 fdd mb-3" id="preview-detail-img"></div>
                            <hr class="section-divider">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 d-flex align-items-center mb-2">
                                        <h4 class="fw-semibold m-0 ">Titolo: </h4>
                                        <h5 class=" fst-italic m-0 " id="preview-detail-title">Titolo Anteprima</h5>
                                    </div>
                                    <hr class="section-divider">
                                    <div class="col-12 d-flex justify-content-start align-items-start  mb-2">
                                        <h4 class="fw-semibold  m-0">Trama: </h4>
                                        <h5 class="fst-italic  m-0 " id="preview-detail-plot">Trama Anteprima</h5>
                                    </div>
                                    <hr class="section-divider">
                                    <div class="col-12 d-flex align-items-center mb-2">
                                        <h4 class="fw-semibold m-0 ">Categorie: </h4>
                                        <h5 class="fst-italic m-0" id="preview-detail-categories">Categorie Anteprima
                                        </h5>
                                        <hr class="section-divider">
                                    </div>
                                    <hr class="section-divider">
                                    <div class="col-12 d-flex align-items-center mb-2">
                                        <h4 class="fw-semibold m-0 ">Anno di uscita: </h4>
                                        <h5 class="fst-italic m-0" id="preview-detail-date">Anno uscita Anteprima</h5>
                                        <hr class="section-divider">
                                    </div>
                                    <hr class="section-divider">
                                    <div class="col-12 d-flex align-items-center mb-2">
                                        <h4 class="fw-semibold m-0 ">Durata: </h4>
                                        <h5 class="fst-italic m-0" id="preview-detail-duration">Durata Anteprima</h5>
                                        <hr class="section-divider">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 formFilm d-flex flex-column justify-content-center align-items-center ">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <h2 class="mb-0">Inserisci nuovo Film</h2>
                <hr class="section-divider w-100">

                {{-- Form --}}
                <form action="{{ route('filmStore') }}" method="POST" enctype="multipart/form-data" class="p-3">
                    @csrf
                    <div class="col-12 d-flex flex-column">
                        <label for="title" class="form-label ">Titolo:</label>
                        <input type="text" id="title" name="title" class="form-control">
                    </div>
                    <div class="col-12 d-flex flex-column mt-2">
                        <div class="col-12">
                            <label class="form-check-label" for="">Categorie:</label>
                        </div>
                        <div class="col-12">
                            @foreach ($categories as $category)
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label"
                                        for="{{ $category['name'] }}-azione">{{ $category['name'] }}</label>
                                    <input class="form-check-input" type="checkbox" id="{{ $category['name'] }}-azione"
                                        name="categories[]" value="{{ $category['id'] }}"
                                        {{ isset($film) && $film->categories->contains($category->id) ? 'checked' : '' }}>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column mt-3 mb-0">
                        <label for="plot" class="form-label">Trama:</label>
                        <textarea type="text" id="plot" name="plot" class="form-text" cols="30" rows="6"> </textarea>
                    </div>
                    <div class="col-12 d-flex flex-column mt-3 mb-0">
                        <label for="date" class="form-label">Anno di uscita:</label>
                        <input type="number" id="date" name="date" class="form-control">
                    </div>
                    <div class="col-12 d-flex flex-column mt-3 mb-0">
                        <label for="duration" class="form-label">Durata minuti:</label>
                        <input type="number" id="duration" name="duration" class="form-control">
                    </div>
                    <div class="col-12 d-flex flex-column mt-3 mb-0">
                        <label class="form-label" for="img">Immagine di copertina</label>
                        <input type="file" id="img" class="form-control" name="img">
                    </div>
                    <div class="row ">
                        <div class="col-12 d-flex justify-content-between">
                            <div class="col-6 mt-4 d-flex justify-content-start bu">
                                <div class="button-hero" id="previewButton">Anteprima</div>
                            </div>
                            <div class="col-6 mt-4 d-flex justify-content-end bu">
                                <button class="button-hero" type="submit " id="insertButton">Inserisci</button>
                            </div>
                        </div>
                    </div>
                </form>
                {{-- Fine Form --}}
            </div>
        </div>
    </div>
</x-layout>
