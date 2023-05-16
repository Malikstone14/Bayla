@extends('layout')

@section('content')
    <div class="index-top">
        <h2 class="index-titre">Votre Carte à Déguster</h2>
        <a class="btn btn-outline-success" href="{{ route('carteapero.create') }}"> Créer une nouvelle ligne pour votre carte</a>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="index-content">
        <h2 class="index-titre">Tapas</h2>
        <table class="table table-bordered">
            <tr>
                <th>Nom</th>
                <th>Ingrédients ou détails</th>
                <th>Prix</th>
                <th>Ordre</th>
                <th>Visible</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($carteaperotapas as $tapas)
                <tr>
                    <td>{{ $tapas->nom }}</td>
                    <td>{{ $tapas->ingredient}}</td>
                    <td>{{ $tapas->prix }}€</td>
                    <td>{{ $tapas->ordre }}</td>
                    <td>
                        @if ($tapas->active)
                            Visible
                        @else
                            Non Visible
                        @endif
                    </td>
                    <td>
                        <form action="{{ route('carteapero.destroy', $tapas->id) }}" method="POST">

                            <a class="btn btn-outline-success"
                                href="{{ route('carteapero.edit', $tapas->id) }}">Éditer</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-outline-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <div class="index-content">
        <h2 class="index-titre">Plat</h2>
        <table class="table table-bordered">
            <tr>
                <th>Nom</th>
                <th>Ingrédients ou détails</th>
                <th>Prix</th>
                <th>Ordre</th>
                <th>Visible</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($carteaperoplat as $plat)
                <tr>
                    <td>{{ $plat->nom }}</td>
                    <td>{{ $plat->ingredient}}</td>
                    <td>{{ $plat->prix }}€</td>
                    <td>{{ $plat->ordre }}</td>
                    <td>
                        @if ($plat->active)
                            Visible
                        @else
                            Non Visible
                        @endif
                    </td>
                    <td>
                        <form action="{{ route('carteapero.destroy', $plat->id) }}" method="POST">

                            <a class="btn btn-outline-success"
                                href="{{ route('carteapero.edit', $plat->id) }}">Éditer</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-outline-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <div class="index-content">
        <h2 class="index-titre">Dessert</h2>
        <table class="table table-bordered">
            <tr>
                <th>Nom</th>
                <th>Ingrédients ou détails</th>
                <th>Prix</th>
                <th>Ordre</th>
                <th>Visible</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($carteaperodessert as $dessert)
                <tr>
                    <td>{{ $dessert->nom }}</td>
                    <td>{{ $dessert->ingredient}}</td>
                    <td>{{ $dessert->prix }}€</td>
                    <td>{{ $dessert->ordre }}</td>
                    <td>
                        @if ($dessert->active)
                            Visible
                        @else
                            Non Visible
                        @endif
                    </td>
                    <td>
                        <form action="{{ route('carteapero.destroy', $dessert->id) }}" method="POST">

                            <a class="btn btn-outline-success"
                                href="{{ route('carteapero.edit', $dessert->id) }}">Éditer</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-outline-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
