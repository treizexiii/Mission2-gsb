@extends ('modeles/visiteur')
@section('menu')
<!-- Division pour le sommaire -->
<div id="menuGauche">
  <div id="infosUtil">

  </div>
  <ul id="menuList">
    <li>
      <strong>Bonjour {{ $visiteur['nom'] . ' ' . $visiteur['prenom'] }} ({{ $visiteur['statut']}})</strong>

    </li>
    @if ($visiteur['statut'] == 'Gestionnaire')
        <li class="smenu">
          <a href="{{ route('chemin_gestionVisiteur') }}" title="Liste des visiteurs">Liste des visiteurs</a></a>
        </li>
    @endif
    <li class="smenu">
      <a href="{{ route('chemin_gestionFrais')}}" title="Saisie fiche de frais ">Saisie fiche de frais</a>
    </li>
    <li class="smenu">
      <a href="{{ route('chemin_selectionMois') }}" title="Consultation de mes fiches de frais">Mes fiches de frais</a>
    </li>
    <li class="smenu">
      <a href="{{ route('chemin_deconnexion') }}"" title=" Se déconnecter">Déconnexion</a>
    </li>
  </ul>

</div>
@endsection