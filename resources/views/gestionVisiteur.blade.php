@extends('sommaire')
@section('contenu2')
    <div class="contenu">
        <h2>Liste des visiteurs</h2>
        <div class="corpsForm">
            <table>
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Date d'embauche</th>
                        <th>Statut</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($listeVisiteurs as $item)
                        <tr>
                            <td>{{ $item['nom'] }}</td>
                            <td>{{ $item['prenom'] }}</td>
                            <td>{{ $item['dateEmbauche'] }}</td>
                            <td>{{ $item['roleName'] }}</td>
                            <td><button>Supprimer</button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
