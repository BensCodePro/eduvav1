
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Edukator - Education Category Bootstrap Responsive Template | Elements </title>
  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css2?family=Jost:wght@300;400;600;700&display=swap" rel="stylesheet">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-liberty.css">
</head>

<body>
  <!--header-->
  <header id="site-header" class="fixed-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark stroke">
        <h1>
          <a class="navbar-brand" href="index.html">
            <i class="fas fa-chalkboard-teacher"></i> Edukator</a>
        </h1>
        <!-- if logo is image enable this   
  <a class="navbar-brand" href="#index.html">
      <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
  </a> -->
        <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
          data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
          <span class="navbar-toggler-icon fa icon-close fa-times"></span>
          </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav ml-lg-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="courses.html">Courses</a>
            </li>
            <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Pages <span class="fa fa-angle-down"></span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="blog.html">Blog posts</a>
                <a class="dropdown-item" href="blog-single.html">Blog single</a>
                <a class="dropdown-item" href="error.html"> 404 Error page</a>
                <a class="dropdown-item" href="landing-single.html"> Landing page</a>
                <a class="dropdown-item" href="email-template.html"> Email template</a>
                <a class="dropdown-item" href="elements.html"> Elements page</a>
              </div>
            </li>
            <li class="nav-item mr-lg-1">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
            <!--/search-right-->
            <li class="header-search mr-lg-2 mt-lg-0 mt-4 position-relative">
              <div class="search-right">
                <a href="#search" class="btn btn-style search-btn" title="search"><span class="fas fa-search mr-2"
                    aria-hidden="true"></span> Search</a>
                <!-- search popup -->
                <div id="search" class="pop-overlay">
                  <div class="popup">

                    <form action="error.html" method="GET" class="search-box">
                      <input type="search" placeholder="Enter Keyword" name="search" required="required" autofocus="">
                      <button type="submit" class="btn"><span class="fas fa-search" aria-hidden="true"></span></button>
                    </form>

                  </div>
                  <a class="close" href="#close">×</a>
                </div>
                <!-- /search popup -->
              </div>
            </li>
            <!--//search-right-->
          </ul>
        </div>


        <!-- toggle switch for light and dark theme -->
        <div class="mobile-position">
          <nav class="navigation">
            <div class="theme-switch-wrapper">
              <label class="theme-switch" for="checkbox">
                <input type="checkbox" id="checkbox">
                <div class="mode-container py-1">
                  <i class="gg-sun"></i>
                  <i class="gg-moon"></i>
                </div>
              </label>
            </div>
          </nav>
        </div>
        <!-- //toggle switch for light and dark theme -->
      </nav>
    </div>
  </header>
  <!--/header-->
  <!-- breadcrumb -->
  <section class="w3l-about-breadcrumb text-center">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
      <div class="container py-lg-5 py-md-4">
        <div class="w3breadcrumb-gids">
          <div class="w3breadcrumb-left text-left">
            <h2 class="title AboutPageBanner">
              Elements </h2>
            <p class="inner-page-para mt-2">
              Learn Anytime, Anywhere.
              Accelerate Your Future.</p>
          </div>
          <div class="w3breadcrumb-right">
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.html">Home</a></li>
              <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Elements</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--//breadcrumb-->
       <!--/Elements-->
  <section class="bootstrap-components page-blogw3 py-5">
    <div class="container pt-lg-4 pb-lg-5">
      <div class="title-content text-center">
        <h5 class="title-subw3hny mb-2">Components</h5>
        <h3 class="title-w3l mb-4">Bootstrap
          <span
                            class="inn-text">Elements</span></h3>
      </div>
      <div class="pb-lg-5 typo-wthree">
        <!-- blockquotes -->
        <!-- Outline buttons -->
        <div class="components mt-5">
          <h3 class="inner-heading mb-3">Jumbotron</h3>
          <div class="components-info">
            <div class="jumbotron">
              <h1 class="display-4">Hello, world!</h1>
              <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention
                to featured content or information.</p>
              <hr class="my-4">
              <p>It uses utility classes for typography and spacing to space content out within the larger container.
              </p>
              <p class="lead mt-5">
                <a class="btn btn-style btn-primary btn-lg" href="#" role="button">Learn more</a>
              </p>
            </div>
          </div>
        </div>
        <!-- //Outline buttons -->

        <!-- Outline buttons code -->
        <div class="code">
          <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"jumbotron"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">"display-4"</span><span class="nt">&gt;</span>Hello, world!<span class="nt">&lt;/h1&gt;</span>
            <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"lead"</span><span class="nt">&gt;</span>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.<span class="nt">&lt;/p&gt;</span>
            <span class="nt">&lt;hr</span> <span class="na">class=</span><span class="s">"my-4"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;p&gt;</span>It uses utility classes for typography and spacing to space content out within the larger container.<span class="nt">&lt;/p&gt;</span>
            <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"lead"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-lg"</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">role=</span><span class="s">"button"</span><span class="nt">&gt;</span>Learn more<span class="nt">&lt;/a&gt;</span>
            <span class="nt">&lt;/p&gt;</span>
          <span class="nt">&lt;/div&gt;</span></code></pre>
        </div>
        <!-- //Outline buttons code -->
        <!-- Outline buttons -->
        <div class="components mt-5">
          <h3 class="inner-heading mb-3">Fluid jumbotron</h3>
          <div class="components-info">
            <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <h1 class="display-4">Fluid jumbotron</h1>
                <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- //Outline buttons -->
        <!-- Outline buttons code -->
        <div class="code">
          <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"jumbotron jumbotron-fluid"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">"display-4"</span><span class="nt">&gt;</span>Fluid jumbotron<span class="nt">&lt;/h1&gt;</span>
              <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"lead"</span><span class="nt">&gt;</span>This is a modified jumbotron that occupies the entire horizontal space of its parent.<span class="nt">&lt;/p&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
          <span class="nt">&lt;/div&gt;</span></code></pre>
        </div>
        <!-- //Outline buttons code -->
        <!-- Outline buttons -->
        <div class="components mt-5">
          <h3 class="inner-heading mb-3">Card decks</h3>
          <div class="components-info">
            <div class="card-deck">
              <div class="card">
                <img src="assets/images/b1.jpg" class="card-img-top img-fluid" alt="Card image cap">

                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                    additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
              <div class="card">
                <img src="assets/images/b2.jpg" class="card-img-top img-fluid" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This card has supporting text below as a natural lead-in to additional content.
                  </p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
              <div class="card">
                <img src="assets/images/b3.jpg" class="card-img-top img-fluid" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                    additional content. This card has even longer content than the first to show that equal height
                    action.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- //Outline buttons -->

        <!-- Outline buttons code -->
        <div class="code">
          <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-deck"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"card-img-top"</span> <span class="na">src=</span><span class="s">"assets/images/b1.jpg"</span> <span class="na">alt=</span><span class="s">"Card image cap"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-body"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;h5</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Card title<span class="nt">&lt;/h5&gt;</span>
                <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.<span class="nt">&lt;/p&gt;</span>
                <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;&lt;small</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>Last updated 3 mins ago<span class="nt">&lt;/small&gt;&lt;/p&gt;</span>
              <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"card-img-top"</span> <span class="na">src=</span><span class="s">"assets/images/b2.jpg"</span> <span class="na">alt=</span><span class="s">"Card image cap"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-body"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;h5</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Card title<span class="nt">&lt;/h5&gt;</span>
                <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>This card has supporting text below as a natural lead-in to additional content.<span class="nt">&lt;/p&gt;</span>
                <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;&lt;small</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>Last updated 3 mins ago<span class="nt">&lt;/small&gt;&lt;/p&gt;</span>
              <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"card-img-top"</span> <span class="na">src=</span><span class="s">"assets/images/b3.jpg"</span> <span class="na">alt=</span><span class="s">"Card image cap"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-body"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;h5</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Card title<span class="nt">&lt;/h5&gt;</span>
                <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.<span class="nt">&lt;/p&gt;</span>
                <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;&lt;small</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>Last updated 3 mins ago<span class="nt">&lt;/small&gt;&lt;/p&gt;</span>
              <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
          <span class="nt">&lt;/div&gt;</span></code></pre>
        </div>
        <!-- //Outline buttons code -->
        <!-- //blockquotes -->
        <div class="breadcrumbs mt-5">
          <h3 class="inner-heading mb-3">Breadcrumbs</h3>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">Home</li>
            </ol>
          </nav>

          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#link">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Library</li>
            </ol>
          </nav>

          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#link">Home</a></li>
              <li class="breadcrumb-item"><a href="#link">Library</a></li>
              <li class="breadcrumb-item active" aria-current="page">Data</li>
            </ol>
          </nav>
        </div>
        <!-- breadcrumbs code -->
        <div class="code">
          <pre>
<code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">aria-label=</span><span class="s">"breadcrumb"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;ol</span> <span class="na">class=</span><span class="s">"breadcrumb"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"breadcrumb-item active"</span> <span class="na">aria-current=</span><span class="s">"page"</span><span class="nt">&gt;</span>Home<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;/ol&gt;</span>
<span class="nt">&lt;/nav&gt;</span>

<span class="nt">&lt;nav</span> <span class="na">aria-label=</span><span class="s">"breadcrumb"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;ol</span> <span class="na">class=</span><span class="s">"breadcrumb"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"breadcrumb-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Home<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
	<span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"breadcrumb-item active"</span> <span class="na">aria-current=</span><span class="s">"page"</span><span class="nt">&gt;</span>Library<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;/ol&gt;</span>
<span class="nt">&lt;/nav&gt;</span>

<span class="nt">&lt;nav</span> <span class="na">aria-label=</span><span class="s">"breadcrumb"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;ol</span> <span class="na">class=</span><span class="s">"breadcrumb"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"breadcrumb-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Home<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
	<span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"breadcrumb-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Library<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
	<span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"breadcrumb-item active"</span> <span class="na">aria-current=</span><span class="s">"page"</span><span class="nt">&gt;</span>Data<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;/ol&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code>
</pre>
        </div>
        <!-- breadcrumbs code -->
        <!-- buttons -->
        <div class="components mt-5">
          <h3 class="inner-heading mb-3">Buttons</h3>
          <div class="components-info">
            <button type="button" class="btn btn-primary mb-2">Primary</button>
            <button type="button" class="btn btn-secondary mb-2">Secondary</button>
            <button type="button" class="btn btn-success mb-2">Success</button>
            <button type="button" class="btn btn-danger mb-2">Danger</button>
            <button type="button" class="btn btn-warning mb-2">Warning</button>
            <button type="button" class="btn btn-info mb-2">Info</button>
            <button type="button" class="btn btn-light mb-2">Light</button>
            <button type="button" class="btn btn-dark mb-2">Dark</button>
            <button type="button" class="btn btn-link mb-2">Link</button>
          </div>
        </div>
        <!-- //buttons -->
        <!-- buttons code -->
        <div class="code">
          <figure class="highlight">
            <pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span><span class="nt">&gt;</span>Secondary<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-success"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-danger"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-warning"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-info"</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-light"</span><span class="nt">&gt;</span>Light<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-dark"</span><span class="nt">&gt;</span>Dark<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-link"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/button&gt;</span></code></pre>
          </figure>
        </div>
        <!-- buttons code -->

        <!-- Outline buttons -->
        <div class="components mt-5">
          <h3 class="inner-heading mb-3">Outline Buttons</h3>
          <div class="components-info">
            <button type="button" class="btn btn-outline-primary mb-2">Primary</button>
            <button type="button" class="btn btn-outline-secondary mb-2">Secondary</button>
            <button type="button" class="btn btn-outline-success mb-2">Success</button>
            <button type="button" class="btn btn-outline-danger mb-2">Danger</button>
            <button type="button" class="btn btn-outline-warning mb-2">Warning</button>
            <button type="button" class="btn btn-outline-info mb-2">Info</button>
            <button type="button" class="btn btn-outline-light mb-2">Light</button>
            <button type="button" class="btn btn-outline-dark mb-2">Dark</button>
          </div>
        </div>
        <!-- //Outline buttons -->

        <!-- Outline buttons code -->
        <div class="code">
          <pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-outline-primary"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-outline-secondary"</span><span class="nt">&gt;</span>Secondary<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-outline-success"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-outline-danger"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-outline-warning"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-outline-info"</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-outline-light"</span><span class="nt">&gt;</span>Light<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-outline-dark"</span><span class="nt">&gt;</span>Dark<span class="nt">&lt;/button&gt;</span></code></pre>
        </div>
        <!-- //Outline buttons code -->


        <!-- Button Tags -->
        <div class="components mt-5">
          <h3 class="inner-heading mb-3">Button Tags</h3>
          <div class="components-info">
            <a class="btn btn-primary mb-2" href="#link" role="button">Link</a>
            <button class="btn btn-primary mb-2" type="submit">Button</button>
            <input class="btn btn-primary mb-2" type="button" value="Input">
            <input class="btn btn-primary mb-2" type="submit" value="Submit">
            <input class="btn btn-primary mb-2" type="reset" value="Reset">
          </div>
        </div>
        <!-- Button Tags -->

        <!-- Button Tags code -->
        <div class="code">
          <pre><code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">role=</span><span class="s">"button"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span> <span class="na">type=</span><span class="s">"submit"</span><span class="nt">&gt;</span>Button<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">value=</span><span class="s">"Input"</span><span class="nt">&gt;</span>
<span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">value=</span><span class="s">"Submit"</span><span class="nt">&gt;</span>
<span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span> <span class="na">type=</span><span class="s">"reset"</span> <span class="na">value=</span><span class="s">"Reset"</span><span class="nt">&gt;</span></code></pre>
        </div>
        <!-- //Button Tags code -->


        <!-- Modal Popup -->
        <div class="components mt-5">
          <h3 class="inner-heading mb-3">Modal Popup</h3>
          <div class="components-info modal-button-sytle">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              Popup modal
            </button>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Popup Modal</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  Woohoo, you're reading this text in a modal!
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal Popup -->

        <!-- Modal Popup code -->
        <div class="code">
          <pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- Button trigger modal --&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span> <span class="na">data-toggle=</span><span class="s">"modal"</span> <span class="na">data-target=</span><span class="s">"#exampleModal"</span><span class="nt">&gt;</span>
  Popup modal
<span class="nt">&lt;/button&gt;</span>

<span class="c">&lt;!-- Modal --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal fade"</span> <span class="na">id=</span><span class="s">"exampleModal"</span> <span class="na">tabindex=</span><span class="s">"-1"</span> <span class="na">role=</span><span class="s">"dialog"</span> <span class="na">aria-labelledby=</span><span class="s">"exampleModalLabel"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-dialog"</span> <span class="na">role=</span><span class="s">"document"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-content"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-header"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;h5</span> <span class="na">class=</span><span class="s">"modal-title"</span> <span class="na">id=</span><span class="s">"exampleModalLabel"</span><span class="nt">&gt;</span>Popup Modal<span class="nt">&lt;/h5&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"close"</span> <span class="na">data-dismiss=</span><span class="s">"modal"</span> <span class="na">aria-label=</span><span class="s">"Close"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;times;</span><span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-body"</span><span class="nt">&gt;</span>
        Woohoo, you're reading this text in a modal!
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-footer"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span> <span class="na">data-dismiss=</span><span class="s">"modal"</span><span class="nt">&gt;</span>Close<span class="nt">&lt;/button&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Save changes<span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
        </div>
        <!-- //Modal Popup code -->


        <!-- Vertically Centered Modal -->
        <div class="components mt-5">
          <h3 class="inner-heading mb-3">Vertically Centered Modal</h3>
          <div class="components-info modal-button-sytle">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
              Centered modal
            </button>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Vertically Centered Modal</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                  eget
                  quam. Morbi leo risus,
                  porta ac consectetur ac, vestibulum at eros.
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Vertically Centered Modal -->

        <!-- Vertically Centered Modal code -->
        <div class="code">
          <pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- Button trigger modal --&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span> <span class="na">data-toggle=</span><span class="s">"modal"</span> <span class="na">data-target=</span><span class="s">"#exampleModalCenter"</span><span class="nt">&gt;</span>
  Centered modal
<span class="nt">&lt;/button&gt;</span>

<span class="c">&lt;!-- Modal --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal fade"</span> <span class="na">id=</span><span class="s">"exampleModalCenter"</span> <span class="na">tabindex=</span><span class="s">"-1"</span> <span class="na">role=</span><span class="s">"dialog"</span> <span class="na">aria-labelledby=</span><span class="s">"exampleModalCenterTitle"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-dialog modal-dialog-centered"</span> <span class="na">role=</span><span class="s">"document"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-content"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-header"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;h5</span> <span class="na">class=</span><span class="s">"modal-title"</span> <span class="na">id=</span><span class="s">"exampleModalCenterTitle"</span><span class="nt">&gt;</span>Vertically Centered Modal<span class="nt">&lt;/h5&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"close"</span> <span class="na">data-dismiss=</span><span class="s">"modal"</span> <span class="na">aria-label=</span><span class="s">"Close"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;times;</span><span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-body"</span><span class="nt">&gt;</span>
       Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-footer"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span> <span class="na">data-dismiss=</span><span class="s">"modal"</span><span class="nt">&gt;</span>Close<span class="nt">&lt;/button&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Save changes<span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
        </div>
        <!-- //Vertically Centered Modal code -->

        <div class="row mt-5">
          <div class="col-lg-6">
            <!-- Alerts -->
            <div class="components">
              <h3 class="inner-heading mb-3">Alerts</h3>
              <div class="components-info">
                <div class="alert alert-primary" role="alert">
                  A simple primary alert—check it out!
                </div>
                <div class="alert alert-secondary" role="alert">
                  A simple secondary alert—check it out!
                </div>
                <div class="alert alert-success" role="alert">
                  A simple success alert—check it out!
                </div>
                <div class="alert alert-danger" role="alert">
                  A simple danger alert—check it out!
                </div>
                <div class="alert alert-warning" role="alert">
                  A simple warning alert—check it out!
                </div>
                <div class="alert alert-info" role="alert">
                  A simple info alert—check it out!
                </div>
                <div class="alert alert-light" role="alert">
                  A simple light alert—check it out!
                </div>
                <div class="alert alert-dark" role="alert">
                  A simple dark alert—check it out!
                </div>
              </div>
            </div>
            <!-- //Alerts -->
          </div>
          <div class="col-lg-6">
            <!-- Alerts code -->
            <div class="code">
              <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-primary"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  A simple primary alert—check it out!
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-secondary"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  A simple secondary alert—check it out!
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-success"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  A simple success alert—check it out!
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-danger"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  A simple danger alert—check it out!
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-warning"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  A simple warning alert—check it out!
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-info"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  A simple info alert—check it out!
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-light"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  A simple light alert—check it out!
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-dark"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  A simple dark alert—check it out!
<span class="nt">&lt;/div&gt;</span></code></pre>
            </div>
          </div>
          <!-- //Alerts code -->
        </div>

        <div class="row mt-5">
          <div class="col-lg-6">
            <!-- Link color -->
            <div class="components">
              <h3 class="inner-heading mb-3">Link color</h3>
              <div class="components-info">
                <div class="alert alert-primary" role="alert">
                  A simple primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you
                  like.
                </div>
                <div class="alert alert-secondary" role="alert">
                  A simple secondary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if
                  you
                  like.
                </div>
                <div class="alert alert-success" role="alert">
                  A simple success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you
                  like.
                </div>
                <div class="alert alert-danger" role="alert">
                  A simple danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you
                  like.
                </div>
                <div class="alert alert-warning" role="alert">
                  A simple warning alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you
                  like.
                </div>
                <div class="alert alert-info" role="alert">
                  A simple info alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you
                  like.
                </div>
                <div class="alert alert-light" role="alert">
                  A simple light alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you
                  like.
                </div>
                <div class="alert alert-dark" role="alert">
                  A simple dark alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you
                  like.
                </div>
              </div>
            </div>
            <!-- //Link color -->
          </div>

          <div class="col-lg-6">
            <!-- Link color code -->
            <div class="code">
              <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-primary"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  A simple primary alert with <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>an example link<span class="nt">&lt;/a&gt;</span>. Give it a click if you like.
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-secondary"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  A simple secondary alert with <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>an example link<span class="nt">&lt;/a&gt;</span>. Give it a click if you like.
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-success"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  A simple success alert with <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>an example link<span class="nt">&lt;/a&gt;</span>. Give it a click if you like.
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-danger"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  A simple danger alert with <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>an example link<span class="nt">&lt;/a&gt;</span>. Give it a click if you like.
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-warning"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  A simple warning alert with <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>an example link<span class="nt">&lt;/a&gt;</span>. Give it a click if you like.
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-info"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  A simple info alert with <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>an example link<span class="nt">&lt;/a&gt;</span>. Give it a click if you like.
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-light"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  A simple light alert with <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>an example link<span class="nt">&lt;/a&gt;</span>. Give it a click if you like.
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-dark"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  A simple dark alert with <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>an example link<span class="nt">&lt;/a&gt;</span>. Give it a click if you like.
<span class="nt">&lt;/div&gt;</span></code></pre>
            </div>
            <!-- //Link color code -->
          </div>
        </div>

        <!-- Progress bars -->
        <div class="components mt-5">
          <h3 class="inner-heading mb-3">Progress bars</h3>
          <div class="components-info">
            <div class="progress mb-3">
              <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
              </div>
            </div>
            <div class="progress mb-3">
              <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                aria-valuemax="100"></div>
            </div>
            <div class="progress mb-3">
              <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                aria-valuemax="100"></div>
            </div>
            <div class="progress mb-3">
              <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                aria-valuemax="100"></div>
            </div>
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                aria-valuemax="100"></div>
            </div>
          </div>
        </div>
        <!-- //Progress bars -->

        <!-- Progress bars code -->
        <div class="code">
          <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">aria-valuenow=</span><span class="s">"0"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">style=</span><span class="s">"width: 25%"</span> <span class="na">aria-valuenow=</span><span class="s">"25"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">style=</span><span class="s">"width: 50%"</span> <span class="na">aria-valuenow=</span><span class="s">"50"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">style=</span><span class="s">"width: 75%"</span> <span class="na">aria-valuenow=</span><span class="s">"75"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">style=</span><span class="s">"width: 100%"</span> <span class="na">aria-valuenow=</span><span class="s">"100"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
        </div>
        <!-- //Progress bars code -->


        <!-- Backgrounds -->
        <div class="components mt-5">
          <h3 class="inner-heading mb-3">Backgrounds</h3>
          <div class="components-info">
            <div class="progress mb-3">
              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25"
                aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress mb-3">
              <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50"
                aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress mb-3">
              <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75"
                aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress mb-3">
              <div class="progress-bar bg-warning" role="progressbar" style="width: 85%" aria-valuenow="85"
                aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress">
              <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100"
                aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
        <!-- //Backgrounds -->

        <!-- Backgrounds code -->
        <div class="code">
          <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar bg-success"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">style=</span><span class="s">"width: 25%"</span> <span class="na">aria-valuenow=</span><span class="s">"25"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar bg-info"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">style=</span><span class="s">"width: 50%"</span> <span class="na">aria-valuenow=</span><span class="s">"50"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar bg-warning"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">style=</span><span class="s">"width: 75%"</span> <span class="na">aria-valuenow=</span><span class="s">"75"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar bg-danger"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">style=</span><span class="s">"width: 100%"</span> <span class="na">aria-valuenow=</span><span class="s">"100"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
        </div>
        <!-- //Backgrounds code -->


        <!-- striped -->
        <div class="components mt-5">
          <h3 class="inner-heading mb-3">Striped</h3>
          <div class="components-info">
            <div class="progress mb-3">
              <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10"
                aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress mb-3">
              <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%"
                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress mb-3">
              <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%"
                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress mb-3">
              <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%"
                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress mb-3">
              <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%"
                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
        <!-- //striped -->

        <!-- striped code -->
        <div class="code">
          <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-striped"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">style=</span><span class="s">"width: 10%"</span> <span class="na">aria-valuenow=</span><span class="s">"10"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-striped bg-success"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">style=</span><span class="s">"width: 25%"</span> <span class="na">aria-valuenow=</span><span class="s">"25"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-striped bg-info"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">style=</span><span class="s">"width: 50%"</span> <span class="na">aria-valuenow=</span><span class="s">"50"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-striped bg-warning"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">style=</span><span class="s">"width: 75%"</span> <span class="na">aria-valuenow=</span><span class="s">"75"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-striped bg-danger"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">style=</span><span class="s">"width: 100%"</span> <span class="na">aria-valuenow=</span><span class="s">"100"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
        </div>
        <!-- //striped code -->

        <!-- Input Group -->
        <div class="components mt-5">
          <h3 class="inner-heading mb-3">Input Group</h3>
          <div class="components-info">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
              </div>
              <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Recipient's username"
                aria-label="Recipient's username" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2">@example.com</span>
              </div>
            </div>

            <label for="basic-url">Your vanity URL</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
              </div>
              <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">$</span>
              </div>
              <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
              <div class="input-group-append">
                <span class="input-group-text">.00</span>
              </div>
            </div>

            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">With textarea</span>
              </div>
              <textarea class="form-control" aria-label="With textarea"></textarea>
            </div>
          </div>
        </div>
        <!-- //Input Group -->

        <!-- Input Group code -->
        <div class="code">
          <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group mb-3"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group-prepend"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-text"</span> <span class="na">id=</span><span class="s">"basic-addon1"</span><span class="nt">&gt;</span>@<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Username"</span> <span class="na">aria-label=</span><span class="s">"Username"</span> <span class="na">aria-describedby=</span><span class="s">"basic-addon1"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group mb-3"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Recipient's username"</span> <span class="na">aria-label=</span><span class="s">"Recipient's username"</span> <span class="na">aria-describedby=</span><span class="s">"basic-addon2"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group-append"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-text"</span> <span class="na">id=</span><span class="s">"basic-addon2"</span><span class="nt">&gt;</span>@example.com<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"basic-url"</span><span class="nt">&gt;</span>Your vanity URL<span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group mb-3"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group-prepend"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-text"</span> <span class="na">id=</span><span class="s">"basic-addon3"</span><span class="nt">&gt;</span>https://example.com/users/<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"basic-url"</span> <span class="na">aria-describedby=</span><span class="s">"basic-addon3"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group mb-3"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group-prepend"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-text"</span><span class="nt">&gt;</span>$<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">aria-label=</span><span class="s">"Amount (to the nearest dollar)"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group-append"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-text"</span><span class="nt">&gt;</span>.00<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group-prepend"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-text"</span><span class="nt">&gt;</span>With textarea<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;textarea</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">aria-label=</span><span class="s">"With textarea"</span><span class="nt">&gt;&lt;/textarea&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
        </div>
        <!-- //Input Group code -->


        <!-- Input Forms -->
        <div class="components mt-5">
          <h3 class="inner-heading mb-3">Input Forms</h3>
          <div class="components-info">
            <form action="#" method="post">
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control mt-2" id="exampleInputEmail1" aria-describedby="emailHelp"
                  placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                  else.</small>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control mt-2" id="exampleInputPassword1" placeholder="Password">
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
        <!-- //Input Forms -->

        <!-- Input form code -->
        <div class="code">
          <pre><code class="language-html" data-lang="html"><span class="nt">&lt;form&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"exampleInputEmail1"</span><span class="nt">&gt;</span>Email address<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleInputEmail1"</span> <span class="na">aria-describedby=</span><span class="s">"emailHelp"</span> <span class="na">placeholder=</span><span class="s">"Enter email"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;small</span> <span class="na">id=</span><span class="s">"emailHelp"</span> <span class="na">class=</span><span class="s">"form-text text-muted"</span><span class="nt">&gt;</span>We'll never share your email with anyone else.<span class="nt">&lt;/small&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"exampleInputPassword1"</span><span class="nt">&gt;</span>Password<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleInputPassword1"</span> <span class="na">placeholder=</span><span class="s">"Password"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group form-check"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">id=</span><span class="s">"exampleCheck1"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span> <span class="na">for=</span><span class="s">"exampleCheck1"</span><span class="nt">&gt;</span>Check me out<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Submit<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre>
        </div>
        <!-- Input form code -->

        <!-- Media Objects -->
        <div class="components mt-5">
          <h3 class="inner-heading mb-3">Media Objects</h3>
          <div class="media">
            <img src="assets/images/media-img.png" class="mr-3" alt="...">
            <div class="media-body">
              <h5 class="mt-0">Media heading</h5>
              <p class="mt-2">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                sollicitudin.
                Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
                vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
            </div>
          </div>
        </div>
        <!-- //Input Forms -->

        <!-- Media Objects code -->
        <div class="code mt-3">
          <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"assets/images/media-img.png"</span> <span class="na">class=</span><span class="s">"mr-3"</span> <span class="na">alt=</span><span class="s">"..."</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-body"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h5</span> <span class="na">class=</span><span class="s">"mt-0"</span><span class="nt">&gt;</span>Media heading<span class="nt">&lt;/h5&gt;</span>
    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
        </div>
        <!-- Media Objects code -->

        <!-- Nesting -->
        <div class="components mt-5">
          <h3 class="inner-heading mb-3">Nesting</h3>
          <div class="media">
            <img src="assets/images/media-img.png" class="mr-3" alt="...">
            <div class="media-body">
              <h5 class="mt-0">Media heading</h5>
              <p class="mt-2">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                sollicitudin.
                Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
                vulputate fringilla. Donec lacinia congue felis in faucibus.</p>

              <div class="media mt-3">
                <a class="mr-3" href="#">
                  <img src="assets/images/media-img.png" class="mr-3" alt="...">
                </a>
                <div class="media-body">
                  <h5 class="mt-0">Media heading</h5>
                  <p class="mt-2">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                    sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum
                    nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- //Nesting -->
        <!-- Nesting code -->
        <div class="code mt-3">
          <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"assets/images/media-img.png"</span> <span class="na">class=</span><span class="s">"mr-3"</span> <span class="na">alt=</span><span class="s">"..."</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-body"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h5</span> <span class="na">class=</span><span class="s">"mt-0"</span><span class="nt">&gt;</span>Media heading<span class="nt">&lt;/h5&gt;</span>
    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media mt-3"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"mr-3"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">class=</span><span class="s">"mr-3"</span> <span class="na">alt=</span><span class="s">"..."</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-body"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;h5</span> <span class="na">class=</span><span class="s">"mt-0"</span><span class="nt">&gt;</span>Media heading<span class="nt">&lt;/h5&gt;</span>
        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
        </div>
        <!-- Nesting code -->


      </div>
    </div>
  </section>
  <!--//Elements-->
  <!--/footer-->
  <footer class="w3l-footer-22 position-relative">
    <div class="footer-sub py-5">
      <div class="container py-md-5">
        <div class="row sub-columns">

          <div class="col-lg-4 col-md-6 sub-one-left ab-right-cont pr-lg-5 mb-md-0  mb-4">
            <h6>About </h6>
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
            <h6>Useful Links</h6>
            <ul>
              <li><a href="index.html"><span class="fas fa-chevron-right mr-2"></span>Home</a>
              </li>
              <li><a href="about.html"><span class="fas fa-chevron-right mr-2"></span>About</a>
              </li>
              <li><a href="courses.html"><span class="fas fa-chevron-right mr-2"></span>Courses</a></li>
              <li><a href="contact.html"><span class="fas fa-chevron-right mr-2"></span>Contact</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 sub-two-right pl-lg-5 mt-md-0 mt-4">
            <h6>Help & Support</h6>
            <ul>
              <li><a href="#live"><span class="fas fa-chevron-right mr-2"></span>Live
                  Chart</a></li>
              <li><a href="#faq"><span class="fas fa-chevron-right mr-2"></span>Faq</a>
              </li>
              <li><a href="#support"><span class="fas fa-chevron-right mr-2"></span>Support</a>
              </li>
              <li><a href="#terms"><span class="fas fa-chevron-right mr-2"></span>Terms
                  of Services</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 sub-two-right mt-md-0 mt-4">
            <h6>Research</h6>
            <ul>
              <li><a href="#"><span class="fas fa-chevron-right mr-2"></span> Academic Divisions</a>
              </li>
              <li><a href="#"><span class="fas fa-chevron-right mr-2"></span> Student Research</a>
              </li>
              <li><a href="#"><span class="fas fa-chevron-right mr-2"></span> Centers & Institutes</a>
              </li>
              <li><a href="#"><span class="fas fa-chevron-right mr-2"></span> Research Facilities</a></li>
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
          <p>© 2021 Edukator. All rights reserved.
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