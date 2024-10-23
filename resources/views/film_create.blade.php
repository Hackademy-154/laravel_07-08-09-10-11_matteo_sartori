<x-layout>

    <div class="container navDumb">
        <div class="row justify-content-center align-items-center">
            <div class="col-6 form d-flex flex-column justify-content-center">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data" class="p-3">
                    @csrf
                    <div class="col-12 d-flex flex-column">
                        <label for="title" class="form-label ">Titolo:</label>
                        <input type="text" name="title" class="form-control">
                    </div>

                    <div class="col-12 d-flex flex-column mt-3 mb-0">
                        <label for="plot" class="form-label">Trama:</label>
                        <textarea type="text" name="plot" class="form-text" cols="30" rows="6"> </textarea>
                    </div>
                    <div class="col-12 d-flex flex-column mt-3 mb-0">
                        <label for="duration" class="form-label">Durata:</label>
                        <input type="number" name="duration" class="form-control">
                    </div>
                    <div class="col-12 d-flex flex-column mt-3 mb-0">
                        <label class="form-label" for="img">Immagine di copertina</label>
                        <input type="file" class="form-control" name="img">
                    </div>

                    <div class="col-12 mt-4 d-flex justify-content-end bu">
                        <button class="button-hero" type="submit ">Inserisci</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
