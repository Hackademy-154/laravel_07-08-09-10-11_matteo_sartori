<x-layout>
    <div class="container vh-100 navDumb">
        <div class="row">

            @if ($film->user)
                <h1>Pubblicato da: {{ $film->user->name }}</h1>
            @endif
        </div>
    </div>
</x-layout>
