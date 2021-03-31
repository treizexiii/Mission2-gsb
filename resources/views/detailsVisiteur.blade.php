@extends('sommaire')
@section('contenu1')
    <div id="contenu">
    <h1>Fiche n°{{ $infos['detailsVisiteur']['id']}}</h1>
    
    <div>
        <button>Modifier</button> <a href="{{ route('chemin_deleteVisiteur', ['id' => $infos['detailsVisiteur']['id']]) }}"><button>Supprimer</button></a>
        <br><br>
        <table style="border:1px solid">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Adresse</th>
                    <th>CP</th>
                    <th>Ville</th>
                    <th>Date d'embauche</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $infos['detailsVisiteur']['nom']}}</td>
                    <td>{{ $infos['detailsVisiteur']['prenom']}}</td>
                    <td>{{ $infos['detailsVisiteur']['adresse']}}</td>
                    <td>{{ $infos['detailsVisiteur']['cp']}}</td>
                    <td>{{ $infos['detailsVisiteur']['ville']}}</td>
                    <td>{{ $infos['detailsVisiteur']['dateEmbauche']}}</td>
                </tr>
            </tbody>
        </table>
        <br>
        <table>
            <thead>
                <tr>
                    <th>Mois</th>
                    <th>Type</th>
                    <th>Justificatifs</th>
                    <th>Quantité</th>
                    <th>Etat</th>
                    <th>Montant validé</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($infos['listeFrais'] as $frais)
                    <tr>
                        <td>{{ $frais['mois'] }}</td>
                        <td>{{ $frais['idFraisForfait'] }}</td>
                        <td>{{ $frais['nbJustificatifs'] }}</td>
                        <td>{{ $frais['quantite'] }}</td>
                        <td>{{ $frais['idEtat'] }}</td>
                        <td>{{ $frais['montantValide'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection