<div>
    <div class="bg-primary p-3 mt-5 text-white">
        <div class="container">
          <div class="row">
            <div class="col-sm-3 mb-4">
              <div class="d-flex align-items-center">
                <span class="fa fa-tag fa-2x mr-3"></span>
                <div>
                  <h5>Articles à petit prix</h5>
                  <p class="mb-0">La majorité des produits sont à 1 euro</p>
                </div>
              </div>
            </div>
            <div class="col-sm-3 mb-4">
              <div class="d-flex align-items-center">
                <span class="fa fa-shopping-basket fa-2x mr-3"></span>
                <div>
                  <h5>Achats sans soucis</h5>
                  <p class="mb-0">Chaque commande est fournis mains à mains</p>
                </div>
              </div>
            </div>
            <div class="col-sm-3 mb-4">
              <div class="d-flex align-items-center">
                <span class="fas fa-credit-card fa-2x mr-3"></span>
                <div>
                  <h5>Paiement sécurisé</h5>
                  <p class="mb-0">Payez sans vous souciez lors du retrait</p>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="d-flex align-items-center">
                <span class="fas fa-truck-loading fa-2x mr-3"></span>
                <div>
                  <h5>Livraison Valenciennoise</h5>
                  <p class="mb-0">Ce que vous voulez, préparé pour les valenciennois et les alentours</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
    <footer>
        <div class="container p-5">
            <div class="row">
            <div class="col-sm-6">
                <div>
                <a href="{{ route('root') }}" class="d-block pt-2 pb-2">Accueil</a>
                <a href="{{ route('products.index') }}" class="d-block pt-2 pb-2">Catalogue</a>
                <a href="{{ route('frequently_questions') }}" class="d-block pt-2 pb-2">Questions fréquentes</a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="text-sm-right">
                <a href="{{ route('frequently_questions') }}" class="d-block pt-2 pb-2">Première visite</a>
                <a href="{{ route('delivery') }}" class="d-block pt-2 pb-2">Livraison - Retrait</a>
                <a href="{{ route('contact') }}" class="d-block pt-2 pb-2">Contact</a>
                </div>
            </div>
            </div>
        </div>
        <div class="bg-primary text-white text-center p-2">
            <a href="#">Mentions légales</a> | <a href="#">Conditions générales d’utilisation et de ventes</a>
        </div>
    </footer>
</div>