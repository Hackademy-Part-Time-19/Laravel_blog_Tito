<x-layout>

    @vite(['resources/css/contatti.css'])

    <x-slot:title> Contatti </x-slot>

    <h1>Il mio Blog</h1>
    <p>{{ $descrizione }}</p>

    @if (session()->has('success'))
        <h4 class="alert alert-success">{{ session('success') }}</h4>
    @endif

    @if (session()->has('error'))
        <h4 class="alert alert-danger">{{ session('error') }}</h4>
    @endif

    <div class="form">
        <h3>Contattaci per saperne di più</h3>
        <form action="{{ route('contact.send') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input name="name" type="name" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input name="email" type="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <input name="description" type="text" class="form-control" id="description">
            </div>
            <button type="submit" class="btn btn-primary">Invia</button>
        </form>
    </div>

</x-layout>
