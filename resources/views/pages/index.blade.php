@extends('layouts.basic')


@section('content')
    <main class="container py-3">
        <h1 class="text-success">Customers List</h1>

        <a href="{{ route('customers.create') }}" class="btn btn-primary">+ Create new customer</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Ragione sociale</th>
                    <th scope="col">Indirizzo</th>
                    <th scope="col">Stato</th>
                    <th scope="col">Codice fiscale</th>
                    <th scope="col">Stato</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $item)
                    <tr>
                        <th scope="row">{{ $item->ragione_sociale }}</th>



                        <td>{{ $item->indirizzo }}</td>
                        <td>{{ $item->telefono }}</td>
                        <td>{{ $item->codice_fiscale }}</td>
                        <td>{{ $item->stato == 1 ? 'Attivo' : 'Non Attivo' }}</td>
                        <td> <a href="{{ route('customers.edit', $item->id) }}" class="btn btn-primary">Edit</a></td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
@endsection
