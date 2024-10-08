<?php require_once  './includes/db.php';?>
<?php require_once "./includes/blog-header.php" ;?>
<?php $current_page ="Contacto"; ?>
<!-- breadcrumb -->
  <section class="w3l-about-breadcrumb text-center">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
      <div class="container py-lg-5 py-md-4">
        <div class="w3breadcrumb-gids">
          <div class="w3breadcrumb-left text-left">
            <h2 class="title AboutPageBanner">
              Contact Us </h2>
            <p class="inner-page-para mt-2">
              Learn Anytime, Anywhere.
              Accelerate Your Future.</p>
          </div>
          <div class="w3breadcrumb-right">
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.html">Home</a></li>
              <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Contact</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--//breadcrumb-->
  <!-- contacts-5-grid -->
<div class="w3l-contact-10 py-5" id="contact">
    <div class="form-41-mian pt-lg-4 pt-md-3 pb-lg-4">
        <div class="container">
            <div class="heading text-center mx-auto">
              <h5 class="title-subw3hny text-center">Contact our team</h5>
              <h3 class="title-w3l">Got any <span class="inn-text">Questions? </span></h3>
            </div>

            <div class="contacts-5-grid-main mt-5">
                <div class="contacts-5-grid">
                    <div class="map-content-5">
                        <div class="d-grid grid-col-2">
                            <div class="contact-type">
                                <div class="address-grid">
                                    <h6><span class="fas fa-map-marked-alt"></span> Address</h6>
                                    <p>#302, 5th Floor, VHLY-2247 ek, Settlers Lane, New York.</p>
                                    
                                </div>
                                <div class="address-grid">
                                    <h6><span class="fas fa-envelope-open-text"></span> Email</h6>
                                    <a href="mailto:mailone@example.com" class="link1">mailone@example.com</a>
                                    <a href="mailto:mailtwo@example.com"
                                        class="link1">mailtwo@example.com</a>
                                        
                                </div>
                                <div class="address-grid">
                                    <h6><span class="fas fa-phone-alt"></span> Phone</h6>
                                    <a href="tel:+12 324-016-695" class="link1">+12 324-016-695</a>
                                    <a href="tel:+44 224-058-545" class="link1">+44 224-058-545</a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-inner-cont mt-5">
                <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="signin-form">
                    <div class="form-grids">
                        <div class="form-input">
                            <input type="text" name="w3lName" id="w3lName" placeholder="Enter your name *"
                                required="" />
                        </div>
                        <div class="form-input">
                            <input type="text" name="w3lSubject" id="w3lSubject" placeholder="Enter subject "
                                required />
                        </div>
                        <div class="form-input">
                            <input type="email" name="w3lSender" id="w3lSender" placeholder="Enter your email *"
                                required />
                        </div>
                        <div class="form-input">
                            <input type="text" name="w3lPhone" id="w3lPhone" placeholder="Enter your Phone Number *"
                                required />
                        </div>
                    </div>
                    <div class="form-input">
                        <textarea name="w3lMessage" id="w3lMessage" placeholder="Type your query here"
                            required=""></textarea>
                    </div>
                    <div class="text-right">
                        <button class="btn btn-style btn-primary">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- //contacts-5-grid -->
</div>

<div class="contacts-sub-5">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.305935303!2d-74.25986548248684!3d40.69714941932609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1563262564932!5m2!1sen!2sin"
        style="border:0" allowfullscreen></iframe>
</div>

<?php require_once "./includes/footer.php" ;?>