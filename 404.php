
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Edukator - Education Category Bootstrap Responsive Template | Courses </title>
  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css2?family=Jost:wght@300;400;600;700&display=swap" rel="stylesheet">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-liberty.css">
</head>

<body>
  <body class="w3lerror-page">
    <!--/Error-Page-->
    <section class="w3l-errorhny-main">
      <div class="errorhny-main-inf">
        <div class="title">
          <h2>404</h2>
          <p class="mt-3 px-3">Opps!! Looks like somthing went wrong.Sorry, we're offline right now to make our site even better. Please, comeback later and check what we've been upto.</p>
          <form class="form-inline search-form mt-md-5 mt-4" action="#" method="post">
            <input class="form-control" type="search" placeholder="Enter your text" aria-label="email" required="">
            <button class="btn search" type="submit">Search</button>
        </form>
          <a href="index.html" class="error-bt mt-lg-5 mt-4 mr-2"> <span class="fas fa-angle-double-left mr-2"></span> Back to Home</a>
        </div>
      </div>
    </section>
    <!--//Error-Page-->
  <!-- Template JavaScript -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/theme-change.js"></script>
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