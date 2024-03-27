@extends('layouts.web')
@section('content')
<div class="container mt-2">
    <!-- Hero Section -->
    <header class="profile-container">
      <div class="container">
          <div class="profile-card">
              <div class="profile-info d-flex flex-column flex-sm-row text-center text-md-start align-items-start align-items-sm-center">
                  <img class="profile-image me-3" src="./images/ss.png" alt="Profile Image">
                  <div class="profile-text">
                      <h2 class="text-f24 mb-2">Shoes Tienda</h2>
                      <p class="text-f18 opacity-80 mb-0">Calzado para Hombres, damas y niños</p>
                  </div>
              </div>
              <!-- <div class="cont-btn-info">
                  <button class="btn btn-primary rounded-pill btn-white d-inline wight-400">Contacto</button>
              </div> -->
          </div>
      </div>
    </header>
  
  

    <!-- Features Section -->
    <section id="features" class="py-0">
      <div class="container p-0">
          <!-- Categorias -->
          <div class="row">
            <div class="col-lg-12 mb-4">
              <div class="module skills p-4">
                <button class="accordion-button border-r-14" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <h2 class="line-height-0 display-4 mt-3">
                    Categorías
                    </h2>
                </button>
                <!-- <div class="divider m-0"></div> -->
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
                      <!-- Agrega más categorías según sea necesario -->
                  </div>
                </div>
                </div>
              </div>
            </div>


        
              <!-- Lista de productos -->
              <div class="col-6 col-sm-6 col-lg-3 mb-3 pe-2" data-bs-toggle="modal" href="#exampleModalToggle">
                <div class="module p-4 pb-2">
                  <div class="cont-img-prod">
                    <img src="./images/p1.png" class="img-prod w-100" style="border-radius: 20px;">
                  </div>
                  <h4 class="display-5 mt-2">Women's Superstar Cloud White and Core Black with tree sizes</h4>
                  <h4 class="display-4 mt-1">$U 4.200</h4>
                </div>
              </div>
              <div class="col-6 col-sm-6 col-lg-3 mb-3 pe-2 ps-2">
                <div class="module p-4 pb-2">
                  <div class="cont-img-prod">
                    <img src="./images/p4.png" class="img-prod w-100" style="border-radius: 20px;">
                  </div>
                  <h4 class="display-5 mt-2">Women's Superstar Cloud White and two colors</h4>
                  <h4 class="display-4 mt-1">$U 4.200</h4>
                </div>
              </div>
              <div class="col-6 col-sm-6 col-lg-3 mb-3 pe-2 ps-2">
                <div class="module p-4 pb-2">
                  <div class="cont-img-prod">
                    <img src="./images/p5.png" class="img-prod w-100" style="border-radius: 20px;">
                  </div>
                  <h4 class="display-5 mt-2">Women's Superstar Cloud White and Core Black Shoes</h4>
                  <h4 class="display-4 mt-1">$U 4.200</h4>
                </div>
              </div>
              <div class="col-6 col-sm-6 col-lg-3 mb-3 ps-2">
                <div class="module p-4 pb-2">
                  <div class="cont-img-prod">
                    <img src="./images/p6.png" class="img-prod w-100" style="border-radius: 20px;">
                  </div>
                  <h4 class="display-5 mt-2">Women's Superstar </h4>
                  <h4 class="display-4 mt-1">$U 4.200</h4>
                </div>
              </div>
              <!-- Segunda fila -->
              <div class="col-6 col-sm-6 col-lg-3 mb-3 pe-2">
                <div class="module p-4 pb-2">
                  <div class="cont-img-prod">
                    <img src="./images/p4.png" class="img-prod w-100" style="border-radius: 20px;">
                  </div>
                  <h4 class="display-5 mt-2">Women's Superstar </h4>
                  <h4 class="display-4 mt-1">$U 4.200</h4>
                </div>
              </div>
              <div class="col-6 col-sm-6 col-lg-3 mb-3 pe-2 ps-2">
                <div class="module p-4 pb-2">
                  <div class="cont-img-prod">
                    <img src="./images/p6.png" class="img-prod w-100" style="border-radius: 20px;">
                  </div>
                  <h4 class="display-5 mt-2">Women's Superstar </h4>
                  <h4 class="display-4 mt-1">$U 4.200</h4>
                </div>
              </div>
              <div class="col-6 col-sm-6 col-lg-3 mb-3 pe-2 ps-2">
                <div class="module p-4 pb-2">
                  <div class="cont-img-prod">
                    <img src="./images/p1.png" class="img-prod w-100" style="border-radius: 20px;">
                  </div>
                  <h4 class="display-5 mt-2">Women's Superstar </h4>
                  <h4 class="display-4 mt-1">$U 4.200</h4>
                </div>
              </div>
              <div class="col-6 col-sm-6 col-lg-3 mb-3 ps-2">
                <div class="module p-4 pb-2">
                  <div class="cont-img-prod">
                    <img src="./images/p5.png" class="img-prod w-100" style="border-radius: 20px;">
                  </div>
                  <h4 class="display-5 mt-2">Women's Superstar </h4>
                  <h4 class="display-4 mt-1">$U 4.200</h4>
                </div>
              </div>


              <!-- Categoría galery -->
              <div class="bestseller">
                  <div class="container">
                      <div class="row">
                          <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="product-related best">
                                  <div class="title-pro-v1 hp1">
                                      <h3 class="related-title text-center hp1 best">Categoría3</h3>
                                  </div>
                                  <div id="cont-gal-cat" class="owl-carousel owl-theme owl-cate v2 js-owl-cate-feat owl-feat-hp1">
                                      <div class="item">
                                      <div class="best-seller" style="display: flex;">
                                          <div class="img-bestseller" style="width:150px;">
                                              <a href="" class="hover-img-home1" style="">
                                                  <img src="./images/p4.png" style="border-radius: 0%;" alt="">
                                              </a>
                                              <h3 class="text-center"><a href="/categoria/">AAAAASSS</a></h3>
                                          </div>
                                      </div>
                                      </div>
                                      <div class="item">
                                      <div class="best-seller" style="display: flex;">
                                          <div class="img-bestseller" style="width:150px;">
                                              <a href="" class="hover-img-home1" style="">
                                                  <img src="./images/p4.png" style="border-radius: 100%;" alt="">
                                              </a>
                                              <h3 class="text-center"><a href="/categoria/">AAAAASSS</a></h3>
                                          </div>
                                      </div>
                                      </div>
                                      <div class="item">
                                      <div class="best-seller" style="display: flex;">
                                          <div class="img-bestseller" style="width:150px;">
                                              <a href="" class="hover-img-home1" style="">
                                                  <img src="./images/p4.png" style="border-radius: 100%;" alt="">
                                              </a>
                                              <h3 class="text-center"><a href="/categoria/">AAAAASSS</a></h3>
                                          </div>
                                      </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- Categoría galery -->
              <div class="bestseller">
                  <div class="container">
                      <div class="row">
                          <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="product-related best">
                                  <div class="title-pro-v1 hp1">
                                      <h3 class="related-title text-center hp1 best">Categoría4</h3>
                                  </div>
                                  <div id="cont-gal-cat2" class="owl-carousel owl-theme owl-cate v2 js-owl-cate-feat owl-feat-hp1">
                                      <div class="item">
                                      <div class="best-seller" style="display: flex;">
                                          <div class="img-bestseller" style="width:150px;">
                                              <a href="" class="hover-img-home1" style="">
                                                  <img src="./images/p4.png" style="border-radius: 0%;" alt="">
                                              </a>
                                              <h3 class="text-center"><a href="/categoria/">AAAAASSS</a></h3>
                                          </div>
                                      </div>
                                      </div>
                                      <div class="item">
                                      <div class="best-seller" style="display: flex;">
                                          <div class="img-bestseller" style="width:150px;">
                                              <a href="" class="hover-img-home1" style="">
                                                  <img src="./images/p4.png" style="border-radius: 100%;" alt="">
                                              </a>
                                              <h3 class="text-center"><a href="/categoria/">AAAAASSS</a></h3>
                                          </div>
                                      </div>
                                      </div>
                                      <div class="item">
                                      <div class="best-seller" style="display: flex;">
                                          <div class="img-bestseller" style="width:150px;">
                                              <a href="" class="hover-img-home1" style="">
                                                  <img src="./images/p4.png" style="border-radius: 100%;" alt="">
                                              </a>
                                              <h3 class="text-center"><a href="/categoria/">AAAAASSS</a></h3>
                                          </div>
                                      </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>


              <!-- Modal Item -->
              <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                  <div class="modal-content">
                    <div class="modal-header p-3 border-0">
                      <!-- <h5 class="modal-title" id="exampleModalToggleLabel">Women's Superstar</h5> -->
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                              <img src="./images/p1.png" class="d-block w-100" alt="p1.jpg">
                            </div>
                            <div class="carousel-item">
                              <img src="./images/p2.jpg" class="d-block w-100" alt="p1.jpg">
                            </div>
                            <div class="carousel-item">
                              <img src="./images/p3.png" class="d-block w-100" alt="p1.jpg">
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
                            <button type="button" class="btn btn-primary rounded-pill btn-blue ms-0" style="width:44px;"><i class="fa fa-eye" style="position: relative;left: -5px;"></i></button>
                            <button type="button" class="btn btn-primary rounded-pill btn-blue ms-1" data-bs-toggle="modal" href="#exampleModalToggleTwo"><i class="fas fa-credit-card"></i> Comprar</button>
                            <button type="button" class="btn btn-primary rounded-pill btn-blue ms-1" style="background: #26BF5F;border: #25D366;"><i class="fab fa-whatsapp"></i> Consultar</button>
                          </div>
                        </div>                   
                      </div>
                    </div>
                    <!-- <div class="modal-footer">
                      <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Open second modal</button>
                    </div> -->
                  </div>
                </div>
              </div>
              <!-- end Modal-->

              <!-- Modal Metodos pago -->
              <div class="modal fade" id="exampleModalToggleTwo" aria-hidden="true" aria-labelledby="exampleModalToggleTwoLabel" tabindex="1">
                <div class="modal-dialog modal-dialog-centered modal-sm">
                  <div class="modal-content" style="background: #d0e7ff;">
                    <div class="modal-header p-3 border-0"">
                      <!-- <h5 class="modal-title" id="exampleModalToggleLabel">Women's Superstar</h5> -->
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body pt-0">
                      <div class="row">
                        <div class="col-12">
                          <img src="./images/mp.jpg" class="w-100" style="border-radius:8px;">
                          <a href="https://mpago.la/28xYVd6" class="btn btn-block rounded-pill btn-primary btn-blue ms-1 mt-3 w-100 " style="text-align:center;">Realizar Pago <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div>                 
                      </div>
                    </div>
                    <!-- <div class="modal-footer">
                      <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Open second modal</button>
                    </div> -->
                  </div>
                </div>
              </div>
              <!-- end Modal Métodos pago -->

              


            
          </div>
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
<script>
    $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            autoplay: false,
            autoplayTimeout: 3000,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                1014: {
                    items: 1
                },
                1200: {
                    items: 1
                },
                1600: {
                    items: 1
                }
            }
        });

    });
    $(document).ready(function() {
        $('#cont-gal-cat').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            autoplay: false,
            autoplayTimeout: 3000,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                1014: {
                    items: 1
                },
                1200: {
                    items: 1
                },
                1600: {
                    items: 1
                }
            }
        });

    });
</script>
@endsection
