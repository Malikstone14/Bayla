@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Liste des onglets du carrousel</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-outline-success" href="{{ route('carrousel.create') }}"> Créer un nouvel onglet pour le
                    carrousel</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Titre</th>
            <th>Texte</th>
            <th>Ordre</th>
            <th>Image</th>
            <th>Redirection</th>
            <th>Visible</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($carrousel as $carrousel)
            <tr>
                <td>{{ $carrousel->titre }}</td>
                <td>{{ $carrousel->texte }}</td>
                <td>{{ $carrousel->ordre }}</td>
                <td><img class='img-index' src="/image/{{ $carrousel->chemin }}" alt="{{ $carrousel->chemin }}"></td>
                <td>{{ $carrousel->URL }}</td>
                <td>
                    @if ($carrousel->active)
                        Visible
                    @else
                        Non Visible
                    @endif
                </td>
                <td>
                    <form action="{{ route('carrousel.destroy', $carrousel->id) }}" method="POST">

                        <a class="btn btn-outline-success" href="{{ route('carrousel.edit', $carrousel->id) }}">Éditer</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-outline-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
