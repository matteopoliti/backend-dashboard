@extends('layouts.basic')

@section('content')
    <main class="container py-3">
        <h1 class="text-success">Update customer</h1>
        <form action="{{ route('customers.update', $customer->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="ragione_sociale" class="form-label">Ragione sociale</label>
                <input type="text"
                    class="form-control @error('ragione_sociale')
                    is-invalid
                    @enderror"
                    id="ragione_sociale" name="ragione_sociale" required
                    value="{{ old('ragione_sociale') ?? $customer->ragione_sociale }}">
                @error('ragione_sociale')
                    <div class="alert alert-danger mt-1">

                        {{ $message }}

                    </div>
                @enderror
            </div>
            {{-- telefono --}}
            <div class="mb-3">
                <label for="telefono" class="form-label">Telefono</label>
                <input type="number"
                    class="form-control @error('telefono')
                    is-invalid
                    @enderror"
                    id="telefono" name="telefono" required value="{{ old('telefono') ?? $customer->telefono }}">
                @error('telefono')
                    <div class="alert alert-danger mt-1">

                        {{ $message }}

                    </div>
                @enderror
            </div>

            {{-- email --}}
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email"
                    class="form-control @error('email')
                    is-invalid
                    @enderror"
                    id="email" name="email" required value="{{ old('email') ?? $customer->email }}">
                @error('email')
                    <div class="alert alert-danger mt-1">

                        {{ $message }}

                    </div>
                @enderror
            </div>

            {{-- indirizzo casa --}}
            <div class="mb-3">
                <label for="indirizzo" class="form-label">Indirizzo</label>
                <input type="text"
                    class="form-control @error('indirizzo')
                    is-invalid
                    @enderror"
                    id="indirizzo" name="indirizzo" required value="{{ old('indirizzo') ?? $customer->indirizzo }}">
                @error('indirizzo')
                    <div class="alert alert-danger mt-1">

                        {{ $message }}

                    </div>
                @enderror
            </div>



            {{-- codice fiscale --}}
            <div class="mb-3">
                <label for="codice_fiscale" class="form-label">Codice fiscale</label>
                <input type="text"
                    class="form-control @error('codice_fiscale')
                    is-invalid
                    @enderror"
                    id="codice_fiscale" name="codice_fiscale" required
                    value="{{ old('codice_fiscale') ?? $customer->codice_fiscale }}">
                @error('codice_fiscale')
                    <div class="alert alert-danger mt-1">

                        {{ $message }}

                    </div>
                @enderror
            </div>


            {{-- stato --}}
            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="stato" value="1" checked>
                    <label class="form-check-label" for="stato">
                        Attivo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="stato" value="0">
                    <label class="form-check-label" for="stato">
                        Non Attivo
                    </label>
                </div>

            </div>

            <button type="submit" class="btn btn-primary">Modifica</button>
        </form>
    </main>

    <script>
        const inputText = document.getElementById('codice_fiscale');

        inputText.addEventListener('input', function() {
            this.value = this.value.toUpperCase();
        });
    </script>
@endsection
