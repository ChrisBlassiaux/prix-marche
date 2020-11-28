@extends('layouts.app')

@section('content')

  <h2>RETRAIT - LIVRAISON</h2>
  <p>
    Vous serez informé par email ou sms de l'avancement de la préparation de votre demande. <br>

    Vous pouvez annuler votre demande à tout moment à l'aide du formulaire Contact. <br>

    Le paiement se fait lors du retrait ou de la livraison. Seuls les articles livrés seront facturés.
  </p>

  <div class="row mt-5">
    <div class="col-12 col-md-6">
      <h3>Retrait magasin</h3>
      <p class="font-weight-bold">
        Retrait de marchandises sur rendez-vous uniquement
        à notre local d'Anzin
      </p>
      Mail : <a href="{{ route('contact') }}" class="text-success">Contact</a>
    </div>
    <div class="col-12 col-md-6">
      <h3>Livraison</h3>
      <ul>
        Durant la période de confinement,
        <li>il n'y a pas de retrait sur les marchés.​</li>
        <li>selon votre adresse et le montant de votre préparation, une livraison à votre domicile pourra être proposée.</li>
      </ul>

      <h4>Points retraits sur les marchés</h4>
      <p>Suspendu durant la période de confinement</p>
    </div>
  </div>

@endsection
