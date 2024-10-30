<x-layout>
    <div class="container-fluid navDumb sfondoIndex">
        <div class="row justify-content-lg-evenly justify-content-center py-5">
            <!-- Film List -->
            <div class="col-12">
                @if (session('success'))
                    <div class="alert alert-success text-center">
                        {{ session('success') }}
                    </div>
                @endif

                {{-- SwiperJS --}}
                @foreach ($categories as $index => $category)
                    <div class="col-12 d-flex align-items-center mt-2">
                        <h2 class="m-0">{{ $category->name }}</h2><i class="bi bi-arrow-right-short fs-1 mt-1"></i>
                    </div>
                    <div class="parentSlider" style="position: relative;">
                        <div class="slider-wrapper d-flex align-items-center">
                            <!-- Freccia Sinistra -->
                            <div class="swiper-button-prev swiper-button-prev-{{ $index }}"></div>

                            <!-- Contenitore Slider -->
                            <div class="swiper-container swiper-container-{{ $index }}" style="flex: 1;">
                                <div class="swiper-wrapper">
                                    @foreach ($films as $film)
                                        @if ($film->categories->contains($category->id))
                                            <div class="swiper-slide">
                                                <a href="{{ route('filmShow', compact('film')) }}">
                                                    <div class="row h-100">
                                                        <div class="col-12 fd"
                                                            style="background-image: url({{ Storage::url($film->img) }});">
                                                            <div class="row h-100 text-film">
                                                                <div class="col-12 d-flex">
                                                                    <i class="bi bi-film fs-2 filmIcon"></i>
                                                                </div>
                                                                <div class="col-12 d-flex mt-3">
                                                                    <h3>{{ $film->title }}</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>

                            <!-- Freccia Destra -->
                            <div class="swiper-button-next swiper-button-next-{{ $index }}"></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
