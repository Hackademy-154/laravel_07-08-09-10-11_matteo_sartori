<x-layout>

    <!-- Hero Section -->
    <div class="container-fluid hero navDumb">
        <div class="row">
            <div class="col-12 text-center p-4">
                <h1>Benvenuto su</h1>
                <h1 class="color_logo_hero mb-4">NETFILMS</h1>
                <p>Inserisci i tuoi film e serie preferiti ovunque tu sia.</p>
                <a href="{{ route('filmCreate') }}">
                    <button class="button-hero">Inserisci i tuoi preferiti</button>
                </a>
            </div>
        </div>
    </div>

    <!-- About Section (Sfondo Bianco) -->
    <div class="container-fluid about-section py-5 bg-white text-dark">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6 text-center">
                <h2 class="section-title">Cosa è Netfilms?</h2>
                <p class="section-description">
                    Netfilms è il clone di Netflix creato per permetterti di gestire e condividere le tue serie TV e
                    film preferiti. Personalizza la tua libreria, scopri nuovi contenuti e guarda i film che ami dove
                    vuoi e quando vuoi.
                </p>
            </div>
        </div>
    </div>

    <!-- Features Section (Sfondo Nero) -->
    <div class="container-fluid features-section py-5 bg-dark text-light">
        <div class="row text-center">
            <div class="col-md-4 feature">
                <i class="bi bi-tv fs-1"></i>
                <h3 class="my-3">Facile Gestione dei Film</h3>
                <p>Organizza la tua libreria personale di film e serie in pochi click.</p>
            </div>
            <div class="col-md-4 feature">
                <i class="bi bi-share fs-1"></i>
                <h3 class="my-3">Condivisione Veloce</h3>
                <p>Condividi i tuoi contenuti preferiti con amici e familiari.</p>
            </div>
            <div class="col-md-4 feature">
                <i class="bi bi-play-circle fs-1"></i>
                <h3 class="my-3">Ovunque e in Qualsiasi Momento</h3>
                <p>Accedi alla tua libreria e guarda le tue serie preferite ovunque ti trovi.</p>
            </div>
        </div>
    </div>

    <!-- Sezione Immagine & Testo (Sfondo Bianco) -->
    <div class="container-fluid image-text-section py-5 bg-white justify-content-center d-flex">
        <div class="row align-items-center w-75 justify-content-center ">
            <div class="col-md-6 text-dark text-center">
                <h2>Personalizza la Tua Libreria</h2>
                <p>Crea e personalizza la tua libreria di film e serie TV. Netfilms ti permette di salvare, organizzare
                    e accedere ai tuoi titoli preferiti facilmente. Puoi aggiungere le tue categorie, valutare i
                    contenuti, e avere tutto ciò che ti piace a portata di mano.</p>
            </div>
            <div class="col-md-6 d-flex justify-content-center text-center">
                <img src="media/img1.png" alt="" style="max-height:450px" class="img-fluid rounded shadow-none">
            </div>
        </div>
    </div>

    <!-- Sezione Testo & Immagine (Sfondo Nero) -->
    <div class="container-fluid text-image-section py-5 bg-dark text-light justify-content-center d-flex">
        <div class="row align-items-center w-75 ">
            <div class="col-md-6  justify-content-center text-center order-2 order-md-1">
                <img src="media/img2.png" alt="" style="max-height:450px" class="img-fluid rounded shadow-none">
            </div>
            <div class="col-md-6 text-light text-center order-1 order-md-2 ">
                <h2>Guarda e Condividi Senza Limiti</h2>
                <p>Netfilms ti permette di condividere con facilità i tuoi film e le tue serie preferite. Guarda ciò che
                    ami e condividilo con amici e familiari con un semplice click. Un modo semplice e intuitivo per
                    vivere al meglio la tua esperienza cinematografica.</p>
            </div>
        </div>
    </div>

    <!-- Call to Action Section (Sfondo Bianco) -->
    <div class="container-fluid cta-section py-5 bg-white text-dark text-center">
        <h2>Inizia Ora con Netfilms</h2>
        <p>Unisciti ai tanti utenti che hanno già scoperto la comodità di Netfilms!</p>
        <a href="{{ route('register') }}">
            <button class="button-hero">Crea il Tuo Account</button>
        </a>
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

</x-layout>
