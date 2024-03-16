@extends('layouts.shop')


@section('content')
<div class="container mt-2">


  <!-- Features Section -->
  <section id="features" class="py-0">
    <!-- Modal -->
    <div class="row">
      <div class="col-12 col-md-8">
        <div class="modal-content border-0" style="box-shadow: 0 2px 12px 0 rgba(11, 22, 44, .05) !important;">
          <div class="modal-header p-3 border-0">
            <!-- <h5 class="modal-title" id="exampleModalToggleLabel">Women's Superstar</h5> -->
            <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
          </div>
          <div class="modal-body pt-0">
            <div class="row">
              <!-- Carousel -->
              <div id="carouselExampleIndicators" class="col-lg-7 carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="/images/p1.png" class="d-block w-100" alt="p1.jpg">
                  </div>
                  <div class="carousel-item">
                    <img src="/images/p2.jpg" class="d-block w-100" alt="p1.jpg">
                  </div>
                  <div class="carousel-item">
                    <img src="/images/p3.png" class="d-block w-100" alt="p1.jpg">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>     
              <!-- Carousel END -->
              <div class="col-12 col-lg-5">
                <h4 class="display-5 color-dark mt-2 mt-md-0">Zapatillas Blancas de Mujer Adidas</h4>
                <h4 class="display-4 mt-1">$U 4.200</h4>
                <h4 class="display-4 color-dark mt-1 fs-6">Categoría: Mujer</h4>
                <!-- <h4 class="display-4 color-dark mt-1 fs-6">Color: Blanco</h4> -->
                <p>Zapatillas Adidas blancas para mujer: un toque de estilo clásico que combina con todo. Confortables y versátiles, son perfectas para tu día a día, ya sea para entrenar o para un look casual.Estilo, comodidad y moda en cada paso.</p>
                <h4 class="display-4 color-dark mt-1 fs-6">Stock: 12</h4>
                <h4 class="display-4 color-dark mt-1 fs-6">Talles: S M XL</h4>
                <div class="mt-4 d-flex">
                  <button type="button" class="btn btn-primary rounded-pill btn-blue ms-0" style="width:44px;"><i class="fas fa-shopping-cart" style="position: relative;left: -5px;"></i></button>
                  <button type="button" class="btn btn-primary rounded-pill btn-blue ms-1"><i class="fas fa-credit-card"></i> Comprar</button>
                  <button type="button" class="btn btn-primary rounded-pill btn-white ms-1"><i class="fab fa-whatsapp"></i> Compartir</button>
                </div>
              </div>                   
            </div>
          </div>
          <!-- <div class="modal-footer">
            <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Open second modal</button>
          </div> -->
        </div>
      </div>
      <!-- Categorias -->
      <div class="col-12 col-md-4 mt-5 mt-md-0 ">
        <div class="module skills p-4">
          <button class="accordion-button border-r-14" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              <h2 class="line-height-0 display-4 mt-3">
              Categorías
              </h2>
          </button>
          <div id="collapseOne" class="accordion-collapse collapse show border-0" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <div class="flex gap-12px children-wrap mt-3">
                <div class="badge-secondary gray large">
                  <div class="text-200 medium">Mujer</div>
                </div>
                <div class="badge-secondary gray large">
                  <div class="text-200 medium">Hombre</div>
                </div>
                <div class="badge-secondary gray large">
                  <div class="text-200 medium">Niños</div>
                </div>
                <div class="badge-secondary gray large">
                  <div class="text-200 medium">Ropa de verano</div>
                </div>
                <div class="badge-secondary gray large">
                  <div class="text-200 medium">Medias</div>
                </div>
                <div class="badge-secondary gray large">
                  <div class="text-200 medium">De Playa</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Categorias END-->

    </div>
  </section>

</div>
@endsection

@section('script')
<script>
    /*==================================================================
    [ Cart ]*/
    $(document).ready(function () {
      $('.js-show-cart').on('click', function () {
          console.log('open cart')
          $('.js-panel-cart').addClass('show-header-cart');
      });

      $('.js-hide-cart').on('click', function () {
          console.log('close cart')
          $('.js-panel-cart').removeClass('show-header-cart');
      });

      /*==================================================================
      [ Cart ]*/
      $('.js-show-sidebar').on('click', function () {
          console.log('open cart')
          $('.js-sidebar').addClass('show-sidebar');
      });

      $('.js-hide-sidebar').on('click', function () {
          $('.js-sidebar').removeClass('show-sidebar');
      });
    });
</script>
@endsection
</body>
</html>
