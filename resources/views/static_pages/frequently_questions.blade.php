@extends('layouts.app')

@section('content')
    <!-- content -->
    <div class="container mt-5 mb-5">
    <h2 class="text-primary mb-5">Questions fréquentes</h2>
    <div class="row">
        <div class="col">
          <div class="tab-pane" id="tab6" role="tabpanel" aria-labelledby="tab6">
              <div class="accordion" id="accordion-tab-6">
                  <div class="card">
                      <div class="card-header" id="accordion-tab-6-heading-1">
                          <h5>
                              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-6-content-1" aria-expanded="false" aria-controls="accordion-tab-6-content-1">Première visite et inscription</button>
                          </h5>
                      </div>
                      <div class="collapse show" id="accordion-tab-6-content-1" aria-labelledby="accordion-tab-6-heading-1" data-parent="#accordion-tab-6">
                          <div class="card-body">
                            <p>Prixmarche.fr est également disponible depuis l'application WIX.</p>
                              
                            <p> Pour la première installation : <br>
                              <br>
                              Veuillez cliquer sur <a href="https://apps.wix.com/place-invites/invite-lp/cc563780-e9cc-4cbd-bad1-7e363ffec865?ref=so">ce lien pour télécharger l'application</a> et suivre les instructions.<br>
                              <br>
                              Lors des visites suivantes, aller directement sur l'appli WIX munis de vos identifiants renseignés sur l'application (attention : ils peuvent être différents de ceux du site <a href="index.html">primarche.fr</a>)
                              <br><br>
                              (Si nécessaire, le code d'invitation de Prixmarche.fr est <strong>KKB8EE</strong>)
                            </p>
                          </div>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-header" id="accordion-tab-6-heading-2">
                          <h5>
                              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-6-content-2" aria-expanded="false" aria-controls="accordion-tab-6-content-2">Prixmarche.fr depuis votre application mobile</button>
                          </h5>
                      </div>
                      <div class="collapse" id="accordion-tab-6-content-2" aria-labelledby="accordion-tab-6-heading-2" data-parent="#accordion-tab-6">
                          <div class="card-body">
                              <p>
                                Les produits sont vendus à l'unité sauf mention spécifique. Le prix indiqué correspond au prix unitaire toutes taxes comprises. A noter que la TVA n'est pas récupérable pour les professionnels. <br>
                                Vous pouvez préciser le nombre d'articles à l'aide de la case Quantité, la taille ou la couleur mais également ajouter des précisions dans la zone "Préciser votre besoin" si besoin.
                              </p>
                          </div>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-header" id="accordion-tab-6-heading-3">
                          <h5>
                              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-6-content-3" aria-expanded="false" aria-controls="accordion-tab-6-content-3">Quels sont les moyens de paiement ?</button>
                          </h5>
                      </div>
                      <div class="collapse" id="accordion-tab-6-content-3" aria-labelledby="accordion-tab-6-heading-3" data-parent="#accordion-tab-6">
                          <div class="card-body">
                              <p>
                                La marchandise est à retirer sur rendez-vous en Magasin ou au Point retrait sur les marchés. Vous serez informé par Mail ou SMS de l'avancement de la préparation de votre demande. <br><br>

                                Si vous souhaitez un retrait sur les Points retraits Marché desservis, merci de préciser la ville et le jour du marché souhaité dans la zone Remarque de la page panier (cliquer sur voir ou modifier panier pour y accéder).<br><br>
                                
                                Le paiement se fait lors du retrait. Seuls les articles retirés seront facturés.<br><br>
                                
                                Il vous appartient de vérifier que les produits correspondent à votre précommande, sont complets et ne présentent pas de défauts majeurs. Pour rappel, les articles ne sont ni repris, ni échangés sauf vices cachés.<br><br>
                                
                                <strong> --- En période de confinement, les précisions vous seront apportées afin de garantir les gestes barrières. ---</strong>
                              </p>
                          </div>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-header" id="accordion-tab-6-heading-4">
                          <h5>
                              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-6-content-4" aria-expanded="false" aria-controls="accordion-tab-6-content-4">Pourquoi renseigner mes informations personnelles</button>
                          </h5>
                      </div>
                      <div class="collapse" id="accordion-tab-6-content-4" aria-labelledby="accordion-tab-6-heading-4" data-parent="#accordion-tab-6">
                          <div class="card-body">
                            <ul>
                              Le paiement s'effectue comptant lors du retrait :
                              <li>montant inférieur à 10€ : espèces</li>
                              <li>montant supérieur à 10€ : espèces ou carte bancaire  </li>
                            </ul>
                          </div>
                      </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="accordion-tab-6-heading-5">
                        <h5>
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-6-content-5" aria-expanded="false" aria-controls="accordion-tab-6-content-5">Retours et échanges</button>
                        </h5>
                    </div>
                    <div class="collapse" id="accordion-tab-6-content-5" aria-labelledby="accordion-tab-6-heading-5" data-parent="#accordion-tab-6">
                        <div class="card-body">
                            <p>
                              Lors du parcours de précommande, les informations adresses sont nécessaire pour passer à l'étape suivante. <br>
                              Pour rappel, les informations nominatives sont strictement confidentielles et ne sont destinées qu’au site Prixmarche.fr. <br> 
                              Le Client dispose d’un droit d’accès, de modification, de rectification depuis la rubrique Mon compte. <br>
                              Pour supprimer les données vous concernant, vous devez adresser votre demande de suppression depuis le formulaire Contact. <br>
                            </p>
                        </div>
                    </div>
                </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="accordion-tab-6-heading-6">
                      <h5>
                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-6-content-6" aria-expanded="false" aria-controls="accordion-tab-6-content-5">Réclamations</button>
                      </h5>
                  </div>
                  <div class="collapse" id="accordion-tab-6-content-6" aria-labelledby="accordion-tab-6-heading-6" data-parent="#accordion-tab-6">
                      <div class="card-body">
                        <p>I don't 'need' to drink. I can quit anytime I want! THE BIG BRAIN AM WINNING AGAIN! I AM THE GREETEST! NOW I AM LEAVING EARTH, FOR NO RAISEN! There's one way and only one way to determine if an animal is intelligent. Dissect its brain!</p>
                        <p><strong>Example: </strong>Guess again. Yeah, I do that with my stupidness. And when we woke up, we had these bodies.</p>
                      </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
        </div>
    </div>
    <!-- / content -->
@endsection