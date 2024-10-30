<x-layout>

    <div class="container-fluid navDumb sfondoIndex">
        <div class="row justify-content-lg-evenly justify-content-center py-5 ">
            <!-- Sidebar Filters -->
            <div class="col-3 d-flex col-md-10 col-lg-4 col-xl-3 col-xxl-2  d-none d-md-block mb-md-5 mb-lg-0 mb-0">
                <div class="filter-section p-3">
                    <h4 class="filter-title">Filtri</h4>
                    <div class="filter-group">
                        <label>Genere</label>
                        <select class="form-select">
                            <option value="">Tutti i generi</option>
                            <option value="azione">Azione</option>
                            <option value="commedia">Commedia</option>
                            <option value="dramma">Dramma</option>
                            <option value="fantascienza">Fantascienza</option>
                        </select>
                    </div>
                    <div class="filter-group mt-3 ">
                        <label>Anno</label>
                        <input type="number" class="form-control" placeholder="Es. 2023">
                    </div>
                </div>
            </div>
            <!-- Film List -->
            <div class="col-8 col-md-8">
                @if (session('success'))
                    <div class="alert alert-success text-center">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="row g-3">
                    @foreach ($films as $film)
                        <div class="col-12 col-md-6 col-lg-6 col-xl-4 col-xxl-3">
                            <div class="card-film" style="height: 400px">
                                <div class="card-img" style="background-image: url('{{ Storage::url($film->img) }}');">
                                </div>
                                <div class="card-body p-3">
                                    <div class="row justify-content-end ">
                                        <div class="col-12 d-flex">
                                            <h5 class="card-title mt-2">{{ $film->title }}</h5>
                                        </div>
                                        <div class="col-12 d-flex">
                                            <p class="card-text">2012</p>
                                        </div>
                                        <div class="col-12 d-flex">
                                            @foreach ($film->categories as $category)
                                                <span class="card-text ms-1">{{ $category->name }}</span>
                                            @endforeach
                                        </div>
                                        <div class="col-12 d-flex  btn-details justify-content-center me-2">
                                            <a href="{{ route('filmShow', compact('film')) }}"
                                                class=" text-center text-decoration-none text-white">Dettagli</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            {{--  SwiperJS  --}}
            {{-- <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex align-items-center">
                <h2 class="m-0">Azione</h2><i class="bi bi-arrow-right-short fs-1 mt-1"></i>
            </div>
            <div class="swiper">
                <div class="swiper-wrapper ">
                    @foreach ($films as $film)
                        <div class="swiper-slide me-5">
                            <a href="{{ route('filmShow', compact('film')) }}">
                                <div class="row h-100 ">
                                    <div class="col-12 fd"
                                        style="background-image: url({{ Storage::url($film->img) }});">
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
                    @endforeach
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div> --}}
        </div>
    </div>
</x-layout>
