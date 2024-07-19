
 <!--/footer-->
 <footer class="w3l-footer-22 position-relative">
        <div class="footer-sub py-5">
            <div class="container py-md-5">
                <div class="row sub-columns">
                    <div class="col-lg-4 col-md-6 sub-one-left ab-right-cont pr-lg-5 mb-md-0  mb-4">
                        <h6>Acerca de </h6>
                       <!--Start of the cookies section -->
                       <?php
                
                      if(isset($_SESSION['login'])) { ?>
                        <form action="signout.php">
                     <button class="btn-teal btn rounded-pill px-4 ml-lg-4">Sign out (<?php echo $_SESSION['usuario_nombre']; ?>)</button>
                      </form>
                   <?php } else {
                     if(isset($_COOKIE['_uid']) && isset($_COOKIE['_uiid_'])){ // corrected condition to check both cookies
                    $usuario_id = base64_decode($_COOKIE['_uid']);
                    $usuario_sobrenome = base64_decode($_COOKIE['_uiid_']);
                    $sql = "SELECT * FROM usuario WHERE usuario_id = :id AND usuario_sobrenome = :sobrenome"; // corrected SQL query
                    $stmt = $pdo->prepare($sql);
                  $stmt->execute([
                     ':id' => $usuario_id,
                    ':sobrenome' => $usuario_sobrenome
                      ]);
                    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
                   if($usuario) {
                      $usuario_nombre = $usuario['usuario_nombre'];
                         ?> 
                     <form action="signout.php">
                     <button class="btn-teal btn rounded-pill px-4 ml-lg-4">Sign out (<?php echo $usuario_nombre; ?>)</button>
                      </form>
                           <?php
                           } else {
                         echo '<a class="btn-teal btn rounded-pill px-4 ml-lg-4" href="backend/signin.php">Sign in</a>';
                           echo '<a class="btn-teal btn rounded-pill px-4 ml-lg-4" href="backend/signup.php">Sign up</a>';
                            }
                     } else {
                      echo '<a class="btn-teal btn rounded-pill px-4 ml-lg-4" href="backend/signin.php">Sign in</a>';
                      echo '<a class="btn-teal btn rounded-pill px-4 ml-lg-4" href="backend/signup.php">Sign up</a>';
                     }
                  }
                  ?>
                  <!--End of the cookies section -->
                        <p>Lorem ipsum dolor sit amet elit. Velit beatae rem ullam dolore nisi esse quasi, sit amet.
                            Lorem ipsum dolor sit amet elit.voluptatem accusantium
                            doloremque.</p>
                        <div class="columns-2">
                            <ul class="social">
                                <li><a href="#facebook"><span class="fab fa-facebook-f" aria-hidden="true"></span></a>
                                </li>
                                <li><a href="#linkedin"><span class="fab fa-linkedin-in" aria-hidden="true"></span></a>
                                </li>
                                <li><a href="#twitter"><span class="fab fa-twitter" aria-hidden="true"></span></a>
                                </li>
                                <li><a href="#google"><span class="fab fa-google-plus-g" aria-hidden="true"></span></a>
                                </li>
                                <li><a href="#pinterest"><span class="fab fa-pinterest-p" aria-hidden="true"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 sub-two-right pl-lg-5">
                        <h6>Enlaces de interés</h6>
                        <ul>
                            <li><a href="index.html"><span class="fas fa-chevron-right mr-2"></span>Inicio</a>
                            </li>
                            <li><a href="about.html"><span class="fas fa-chevron-right mr-2"></span>Acercade</a>
                            </li>
                            <li><a href="courses.html"><span class="fas fa-chevron-right mr-2"></span>Cursos</a></li>
                            <li><a href="contact.html"><span class="fas fa-chevron-right mr-2"></span>Contacto</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 sub-two-right pl-lg-5 mt-md-0 mt-4">
                        <h6>Ayuda & Soporte</h6>
                        <ul>
                            <li><a href="#live"><span class="fas fa-chevron-right mr-2"></span>Chat en
                                    vivo</a></li>
                            <li><a href="#faq"><span class="fas fa-chevron-right mr-2"></span>Preguntas frecuentes</a>
                            </li>
                            <li><a href="#support"><span class="fas fa-chevron-right mr-2"></span>Soporte</a>
                            </li>
                            <li><a href="#terms"><span class="fas fa-chevron-right mr-2"></span>Terminos
                                    de Servicios</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 sub-two-right mt-md-0 mt-4">
                        <h6>Investigación</h6>
                        <ul>
                            <li><a href="#"><span class="fas fa-chevron-right mr-2"></span>División  Académicas</a>
                            </li>
                            <li><a href="#"><span class="fas fa-chevron-right mr-2"></span>Investigación estudiantil</a>
                            </li>
                            <li><a href="#"><span class="fas fa-chevron-right mr-2"></span>Centros y Institutos</a>
                            </li>
                            <li><a href="#"><span class="fas fa-chevron-right mr-2"></span>Instalaciones de Investigación</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- copyright -->
        <div class="copyright-footer text-center">
            <div class="container">
                <div class="columns">
                    <p>© 2024 Unidad Informática DEM.Todos los derechos Reservados .
                    </p>
                </div>
            </div>
        </div>
        <!-- //copyright -->

    </footer>
    <!-- //footer -->

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-level-up-alt" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->

    <!-- Template JavaScript -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/theme-change.js"></script>
    <!-- stats number counter-->
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.countup.js"></script>
    <script>
        $('.counter').countUp();
    </script>
    <!-- //stats number counter -->
    <!-- script for tesimonials carousel slider -->
    <script src="assets/js/owl.carousel.js"></script>

    <script>
        $(document).ready(function () {
            $("#owl-demo1").owlCarousel({
                loop: true,
                margin: 20,
                nav: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    768: {
                        items: 2,
                        nav: false
                    },
                    1000: {
                        items: 3,
                        nav: false,
                        loop: false
                    }
                }
            })
        })
    </script>
    <!-- //script for tesimonials carousel slider -->
    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- disable body scroll which navbar is in active -->

    <!--/MENU-JS-->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!--//MENU-JS-->
    <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>