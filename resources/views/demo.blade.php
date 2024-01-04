<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your Landing Page</title>

    <!-- Enlace a Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/tienda.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('css/util.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('css/main.css') }}" rel="stylesheet"> -->
    <!-- Inter font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Quicksand:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- Your custom styles -->
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top py-0">
  <div class="container py-2">
    <!-- Contenido que permanece visible en pantallas móviles -->
    <div id="navbarTitle" class="visible-on-mobile d-flex justify-content-between align-items-center">
      <a class="navbar-brand" href="#" >Shoes Tienda</a>
      <div class="icon-header-item" data-notify="0"><!--CART 1 -->
        <i class="nav-link d-inline pe-0 fas fa-shopping-cart d-lg-none js-show-cart" style="font-size:20px;position:relative;top:3px;"></i> <!-- A la derecha en pantallas móviles -->
      </div>
    </div>

    <!-- Botón de menú y contenido del menú desplegable -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav ms-3 mb-2 mb-lg-0" style="width: calc(100% - 50px);">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Hombres</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Mujeres</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Niños</a>
        </li>
        <li class="nav-item order-md-last"> <!-- Utilizamos la clase order-md-last para mover este elemento al final en pantallas medianas y grandes -->
          <a class="nav-link d-lg-none" href="#" tabindex="-1" aria-disabled="true">Entrar <i class="fas fa-sign-in-alt"></i></a>
        </li>
      </ul>
      <!-- Contenido que se mueve a la izquierda en pantallas más pequeñas -->
      <div class="visible-on-mobile order-last d-flex align-items-center" >
        <div class="icon-header-item js-show-cart" data-notify="0"><!--CART 2 -->
          <i class="nav-link d-inline pe-0 fas fa-shopping-cart d-none d-md-inline " style="font-size:18px;"></i> <!-- Ocultar en pantallas pequeñas -->
        </div>
        <div class="icon-header-item"><!--CART 2 -->
          <a class="nav-link d-inline d-none d-md-inline grey" href="#">Entrar</a>
        </div>
      </div>
    </div>
  </div>
</nav>


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


          
                <!-- Feature 1 -->
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
                <!-- Modal -->
                <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                  <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                      <div class="modal-header p-3 border-0"">
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
                </div>
                <!-- end Modal-->

                


                <!-- Cart -->
                <div class="wrap-header-cart js-panel-cart">
                  <div class="s-full js-hide-cart"></div>

                  <div class="header-cart flex-col-l py-4 px-5">
                      <div class="header-cart-title flex-w flex-sb-m pb-3">
                          <h4 class="m-2 display-4">Tu carrito
                            <div class="fs-3 lh-1 cl2 px-2 pointer hov-cl1 trans-04 text-end js-hide-cart" style="width: 40px;float: right;">
                                <i class="fas fa-times grey"></i>
                            </div>
                          </h4>
                      </div>
                      <div class="header-cart-content flex-w js-pscroll">
                          <ul class="header-cart-wrapitem w-full list-unstyled">
                              <li class="header-cart-item flex-w flex-t d-flex mb-3">
                                  <div class="header-cart-item-img">
                                      <img src="./images/p1.png" alt="IMG">
                                  </div>
                                  <div class="header-cart-item-txt pt-2 ms-0">
                                      <div>
                                          <a href="#" class="header-cart-item-name mb-2 hov-cl1 trans-04">
                                              White Shirt Pleat 
                                          </a>
                                          <span class="header-cart-item-info">
                                              1 x $19.00
                                          </span>
                                      </div>
                                  </div>
                              </li>
                              <li class="header-cart-item flex-w flex-t d-flex mb-3">
                                  <div class="header-cart-item-img">
                                      <img src="./images/p5.png" alt="IMG">
                                  </div>
                                  <div class="header-cart-item-txt pt-2 ms-0">
                                      <div>
                                          <a href="#" class="header-cart-item-name mb-2 hov-cl1 trans-04">
                                              Converse All Star
                                          </a>
                                          <span class="header-cart-item-info">
                                              1 x $39.00
                                          </span>
                                      </div>
                                  </div>
                              </li>
                              <li class="header-cart-item flex-w flex-t d-flex mb-3">
                                  <div class="header-cart-item-img">
                                      <img src="./images/p6.png" alt="IMG">
                                  </div>
                                  <div class="header-cart-item-txt pt-2 ms-0">
                                      <div>
                                          <a href="#" class="header-cart-item-name mb-2 hov-cl1 trans-04">
                                              Nixon Porter Leather
                                          </a>
                                          <span class="header-cart-item-info">
                                              1 x $17.00
                                          </span>
                                      </div>
                                  </div>
                              </li>
                          </ul>
                          <div class="cont-total-cart w-full" style="margin-top:100px;">
                              <h5 class="display-5 p-3 pb-2">
                                  Total: $75.00
                              </h5>
                              <div class="header-cart-buttons flex-w w-full">
                                  <button type="button" class="btn btn-primary rounded-pill btn-blue ms-0"> Completar Compra <i class="fas fa-arrow-right"></i></button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>






            </div>
        </div>
    </section>

</div>


<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>
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
</body>
</html>
