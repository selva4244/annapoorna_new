<?php include 'require/header.php'; ?>
<!-- breadcumb -->
<section class="breadcumb" aria-label="breadcumb" style="background-image: url('img/breadcumb.jpg');">
  <div class="container-fluid">
   <div class="row">
    <div class="col-12">
      <div class="main">
        <div class="bread">
          <div class="bread-title">GALLERY</div>
        </div>
      </div>
    </div>
   </div>
 </div>
</section>
<!-- breadcumb end -->

<!-- section gallery -->
<section aria-label="works" id="Gallery">
    <div class="container-fluid">
     <div class="row p-3-vh">

      <div class="col-12 centered mb-3">
        <div class="detailcontent text-center p-0">
           <!--<div class="subheading">qOUR WORKS</div>-->
           <div class="heading">GALLERY</div>
         </div>
      </div>

       <!-- filter project -->
       <div class="col-md-12 text-center">
        <ul id="filter-porto" class="d-block">
          <li class="filt-projects-w selected" data-project="*">All
          </li>
          <!-- <li class="filt-projects-w" data-project=".ren">Renovation - Century Club, Bangalore
          </li> -->
           <!-- <li class="filt-projects-w" data-project=".ren">Renovation works - Skyline Beverly Park, Bangalore
          </li> -->
           <li class="filt-projects-w" data-project=".emudhra">eMudhra Limited, IT company, Bangalore..
          </li>
          <!-- <li class="filt-projects-w" data-project=".villa">Interior - Gelato Factory - Ice-cream outlet
          </li> -->
          <li class="filt-projects-w" data-project=".v_int"> Interiors
          </li>
          <li class="filt-projects-w" data-project=".century">Century Club
          </li>
          <li class="filt-projects-w" data-project=".gelato_factory">Gelato Factory
          </li>
          <li class="filt-projects-w" data-project=".pre-engin">Pre-Engineered Buildings
          </li>
          <li class="filt-projects-w" data-project=".resort_interiors_ooty">Resort Interiors - Ooty
          </li>
          <li class="filt-projects-w" data-project=".showroom">Showroom
          </li>
          <li class="filt-projects-w" data-project=".skyline">Skyline Beverly Park, Bangalore
          </li>
           <li class="filt-projects-w" data-project=".tss">TSS India Pvt Ltd
          </li>
        </ul>
      </div>
      <!-- filter project end -->

  <!-- project -->

  <!--  -->
  <div class="col-md-12 mt-3 px-md-0">
        <div id="w-gallery-column" class="w-gallery-container">

           
<?php  
$x2 = 5;
 
while($x2 <= 13) {

  ?>
            <a class="w-gallery century" href="img/gallery/century_club/cen<?php echo $x2;?>.jpg">
              <?php //echo $x2; ?>
             
                <img src="img/gallery/century_club/cen<?php echo $x2;?>.jpg" alt="" class="w-gallery-image">
                
                  <div class="content-gallery">
                    <span class="ti-plus"></span>
                  </div>
                </a>
<?php
$x2++;
}
?>   
<?php  
$x3 = 1;
 
while($x3 <= 13) {

  ?>
            <a class="w-gallery emudhra" href="img/gallery/emudhra/em<?php echo $x3;?>.jpg">
                <img src="img/gallery/emudhra/em<?php echo $x3;?>.jpg" alt="" class="w-gallery-image">
                  <div class="content-gallery">
                    <span class="ti-plus"></span>
                  </div>
                </a>
<?php
$x3++;
}
?>  
    <!--  -->
    <?php  
$x4 = 1;
 
while($x4 <= 7) {

  ?>
            <a class="w-gallery gelato_factory" href="img/gallery/gelato_factory/gf<?php echo $x4;?>.jpeg">
                <img src="img/gallery/gelato_factory/gf<?php echo $x4;?>.jpeg" alt="" class="w-gallery-image">
                  <div class="content-gallery">
                    <span class="ti-plus"></span>
                  </div>
                </a>
<?php
$x4++;
}
?>  
<!--  -->
<?php  
$x5 = 1;
 
while($x5 <= 3) {

  ?>
            <a class="w-gallery pre-engin" href="img/gallery/pre-engin/pe<?php echo $x5;?>.jpg">
                <img src="img/gallery/pre-engin/pe<?php echo $x5;?>.jpg" alt="" class="w-gallery-image">
                  <div class="content-gallery">
                    <span class="ti-plus"></span>
                  </div>
                </a>
<?php
$x5++;
}
?>  
<!--  -->
<?php  
$x6 = 1;
 
while($x6 <= 12) {

  ?>
      <a class="w-gallery resort_interiors_ooty" href="img/gallery/resort_interiors_ooty/ri<?php echo $x6;?>.jpg">
        <?php //echo $x6; ?>
                <img src="img/gallery/resort_interiors_ooty/ri<?php echo $x6;?>.jpg" alt="" class="w-gallery-image">
                  <div class="content-gallery">
                    <span class="ti-plus"></span>
                  </div>
                </a>
<?php
$x6++;
}
?>  
<!--  -->
<?php  
$x7 = 3;
 
while($x7 <= 15) {

  ?>
      <a class="w-gallery showroom" href="img/gallery/showroom/sr<?php echo $x7;?>.jpg">
                <img src="img/gallery/showroom/sr<?php echo $x7;?>.jpg" alt="" class="w-gallery-image">
                  <div class="content-gallery">
                    <span class="ti-plus"></span>
                  </div>
                </a>
<?php
$x7++;
}
?> 
 <!--  -->
 <?php  
$x8 = 1;
 
while($x8 <= 29) {

  ?>
      <a class="w-gallery skyline" href="img/gallery/skyline/<?php echo $x8;?>.jpg">
                <img src="img/gallery/skyline/<?php echo $x8;?>.jpg" alt="" class="w-gallery-image">
                  <div class="content-gallery">
                    <span class="ti-plus"></span>
                  </div>
                </a>
<?php
$x8++;
}
?> 
<!--  -->
<?php  
$x9 = 1;
 
while($x9 <= 14) {

  ?>
      <a class="w-gallery tss" href="img/gallery/tss/<?php echo $x9;?>.jpg">
                <img src="img/gallery/tss/<?php echo $x9;?>.jpg" alt="" class="w-gallery-image">
                  <div class="content-gallery">
                    <span class="ti-plus"></span>
                  </div>
                </a>
<?php
$x9++;
}
?> 
<!--  -->
<?php  
$x10 = 1;
 
while($x10 <= 6) {

  ?>
      <a class="w-gallery v_int" href="img/gallery/v_int/v<?php echo $x10;?>.jpeg">
                <img src="img/gallery/v_int/v<?php echo $x10;?>.jpeg" alt="" class="w-gallery-image">
                  <div class="content-gallery">
                    <span class="ti-plus"></span>
                  </div>
                </a>
<?php
$x10++;
}
?> 
        </div>
       
        </div>
        <!--  -->
       
        
   
        <!-- project end -->
        </div>
    </div>
</section>
<!-- section gallery end -->

<!-- section cta -->
<!-- <section class="p-5 bggray" aria-label="cta">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8 centered">
        <div class="detail">
          <h3>Get Incredible Interior Design Now!</h3>
        </div>
      </div>
      <div class="col-md-4 centered">
        <div class="btn-content my-4">
          <span class="shine"></span>
          <a href="contact.html">More Details </a>
        </div>
      </div>
    </div>
  </div>
</section> -->
<!-- section cta end -->

<!-- section company home end -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      <div class="floating_btn">
     <a target="_blank" href="https://api.whatsapp.com/send?phone=9900210030&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202.">
      <div class="contact_icon">
        <i class="fa fa-whatsapp my-float"></i>
      </div>
    </a>
  </div>




<!-- footer -->
<?php include 'require/footer.php'; ?>