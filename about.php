<?php
require ("includes/common.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Grand Shopper | Ecommerce_2023</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
  <link rel="stylesheet" href="style.css">
</head>
<body style="overflow-x:hidden; padding-bottom:100px;">
  <?php
        include 'includes/header_menu.php';
    ?>
  <div>
    <div class="container mt-5 ">
      <div class="row justify-content-around">
        <div class="col-md-5 mt-3">
          <h3 class="text-warning pt-3 title">What Do We Stand For?</h3>
          <hr />
          <img
            src="images/onlineSup.jpg"
            class="img-fluid d-block rounded mx-auto image-thumbnail">
          <p class="mt-2">Our online ecommerce platform is a cutting-edge digital 
            marketplace that offers a wide range of products and services to 
            customers worldwide.With a user-friendly interface and seamless 
            navigation, our platform provides a convenient and secure shopping 
            experience.
         We collaborate with numerous reputable sellers and brands to curate 
         a diverse selection of high-quality products, catering to various 
         interests and preferences. From electronics, fashion, and home goods
         to beauty, health, and beyond,our platform offers something for everyone.</p>
        </div>
        <div class="col-md-5 mt-3">
          <span class="text-warning pt-3">
            <h1 class="title">24/7_LIVE SUPPORT</h1>
           
          </span>
          <hr>
          <p>We prioritize customer satisfaction by ensuring prompt delivery, 
            reliable customer support, and hassle-free returns. Our secure 
            payment options guarantee the safety of transactions, giving 
            customers peace of mind while shopping with us.

            In addition to the extensive product catalog, we regularly update 
            our platform with exciting deals, discounts, and promotions, 
            allowing customers to enjoy significant savings on their purchases.
           We also utilize personalized recommendations and search algorithms 
           to help customers discover new products tailored to their interests.

            By harnessing the power of technology and innovation, our 
            online ecommerce platform strives to create a seamless and 
            enjoyable shopping experience, connecting customers with the 
            products they love in a convenient and reliable manner.
          </p>

        </div>
      </div>
    </div>
  </div>
  <div class="container pb-3">
  </div>
  <div class="container mt-3 d-flex justify-content-center card pb-3 col-md-6">

    <form class="col-md-12" action="https://formspree.io/EnterYourEmail" method="POST" name="_next">
      <h3 class="text-warning pt-3 title mx-auto"><b>Contact Us</b></h3>
      <div class="form-group">
        <label for="exampleFormControlInput1">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Email"
          name="email">
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Message</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="5"></textarea>
      </div>
      <input type="hidden" name="_next" value="http://localhost/foody/about.php" />
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>


  </div>
  <!--footer -->
  <?php include 'includes/footer.php'?>
  <!--footer end-->


</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function () {
    $('[data-toggle="popover"]').popover();
  });
  $(document).ready(function () {

    if (window.location.href.indexOf('#login') != -1) {
      $('#login').modal('show');
    }

  });
</script>
<?php if(isset($_GET['error'])){ $z=$_GET['error']; echo "<script type='text/javascript'>
$(document).ready(function(){
$('#signup').modal('show');
});
</script>"; echo "
<script type='text/javascript'>alert('".$z."')</script>";} ?>
<?php if(isset($_GET['errorl'])){ $z=$_GET['errorl']; echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>"; echo "
<script type='text/javascript'>alert('".$z."')</script>";} ?>
</html>
