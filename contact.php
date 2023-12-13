<?php include 'require/header.php'; ?>
<!-- breadcumb -->
<section class="breadcumb" aria-label="breadcumb" style="background-image: url('img/contact_bg.jpg');">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="main">
          <div class="bread">
            <div class="bread-title">Contact us</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- breadcumb end -->

<!-- section -->
<section aria-label="section" class="no-bottom">
  <div class="container-fluid">
    <div class='row p-3-vh'>
      <div class="col-12 centered my-o">
        <div class="detailcontent text-center p-0">
          <div class="heading">Get in touch with us to design <br>your <span class="color">dream</span> home</div>
          <p class="cont-para">We look forward to hearing from you and helping you bring your construction and interior design dreams to life. Whether you have questions, want to discuss a project, or simply want to learn more about our services, our team is here to assist you.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- section end -->



<!-- section contact -->
<section aria-label="contact">
  <div class="container-fluid">
    <div class="row p-3-vh align-item-center">
      <div class="col-md-1"> </div>

      <div class="col-md-5">
        <div class="text-side">
          <h3 class="heading">Annapoorneshwari Constructions Interiors Private Limited.</h3>
          <div class="address">
            <div class="heading">Our Office</div>
            <div class="list">
              <i class="fa fa-map-marker"></i>
              1st Floor, # 395, 8th 'B' Main, 14th 'B' Cross, 2nd Stage, 'B’ Sector, Yelahanka New Town, Bangalore - 560064.
            </div>
            <div class="list">
              <i class="fa fa-envelope-o"></i>
              <a href="mailto:raghu@annapoornaainterio.com">raghu@annapoornaainterio.com/</a><br>
              <a href="mailto:bhagyalakshmi@annapoornaainterio.com">bhagyalakshmi@annapoornaainterio.com</a>
            </div>
            <div class="list">
              <i class="fa fa-phone"></i>+91 9900094942 / +91 9900210030
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-5">

        <div class="quote-content">
          <h2>Request a Quote</h2>
          <p>If you're interested in a project estimate or a consultation, you can request a quote through our website, or you can contact us directly using the information provided.</p>
          <p>We value your inquiries and feedback and are committed to providing you with the best construction and interior services in the industry. Thank you for considering us.</p>
          <h3>Business Hours:</h3>
          <p>Monday - Saturday: 10:00 AM - 6:00 PM</p>
          <p>Sunday: Closed</p>
        </div>
        <form id="reg_form" class="autoheight" action="sendmail.php" method="POST">
          <div class="form-group user-name">
            <input type="text" class="form-control" name="name" required id="name-contact-1" placeholder="Your Name">
          </div>

          <div class="form-group user-email">
            <input type="email" class="form-control" name="email" required id="email-contact" placeholder="Your Email">
          </div>

          <div class="form-group user-message">
            <textarea class="form-control" name="message" required id="message-contact" placeholder="Your Message"></textarea>
            <div class="success" id="mail_success">Thank you. Your message has been sent</div>
            <div class="error" id="mail_failed">Error, email not sent</div>
          </div>
           <div class="form-group user-">
            <input type="text" readonly class="form-control" name="" value="<?php echo rand(0000,9999);?>" required id="g_captcha" placeholder="captcha" >
          </div>
          <div class="form-group user-">
            <input type="text" class="form-control" name="" required id="e_captcha" placeholder="captcha">
          </div>
          <button type="submit" id="" class="btn-contact">Send Now</button>
        </form>
      </div>
      <div class="col-md-1"> </div>
    </div>
  </div>
</section>
<!-- section end -->
<!-- map -->
<section aria-label="map" class="no-bottom">
  <div class="container-fluid">
    <div class="mapouter">
      <div class="gmap_canvas"><iframe width="100%" height="450" id="gmap_canvas" src="https://maps.google.com/maps?q=Yelahanka%20new%20town,%20Bangalore%20-%20560064.&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-org.net">123movies</a><br>
        <style>
          .mapouter {
            position: relative;
            text-align: right;
            height: 500px;
            width: 100%;
          }
        </style>
      </div>
    </div>
  </div>
</section>
<!-- map end -->


<!-- section company home end -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<div class="floating_btn">
  <a target="_blank" href="https://api.whatsapp.com/send?phone=9900210030&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202.">
    <div class="contact_icon">
      <i class="fa fa-whatsapp my-float"></i>
    </div>
  </a>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
  $("#reg_form").submit(function(){
    var g = $("#g_captcha").val();
    var e = $("#e_captcha").val();
    if(e!=g)
    {
    alert("Invalid Captcha...!");
    return false;
    }
    else
    {
        return true;
    }
  });
});
</script>



<!-- footer -->
<?php include 'require/footer.php'; ?>