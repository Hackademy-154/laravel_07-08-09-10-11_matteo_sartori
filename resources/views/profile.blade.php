<x-layout>
    <div class="container-fluid  ">
        <div class="container navDumb2 justify-content-center  d-flex">
            <div class="row profile-container align-items-start justify-content-start">
                <div class="profile-header col-12 d-flex  justify-content-start">
                    <img src="" alt="" class="img-thumbnail img-fluid">
                    <div class="profile-details">
                        <h2>Username: {{ $user->name }}</h2>
                        <p>ID Utente: {{ $user->id }}</p>
                        <p>Email: {{ $user->email }}</p>
                    </div>
                </div>
                @foreach ($user->films as $film)
                    <div class="content-list mt-4 col-12 d-flex flex-column">
                        <div class="content-item">
                            <h5>{{ $film->title }}</h5>
                            <p>{{ $film->plot }}</p>
                            <a href="{{ route('filmShow', ['film' => $film->id]) }}"
                                class="btn btn-primary mt-2">Dettaglio</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
