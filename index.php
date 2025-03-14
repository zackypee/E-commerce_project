<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <!--Navbar-->
<nav class="navbar navbar-expand-lg bg-white py-3 fixed-top">
 <div class="container">
     <img class="logo" src="./assets/images/brandlogo.avif" alt="logo">
     <h5 class="mt-1">ackyypee</h5>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
     </button>
    <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
         <li class="nav-item">
          <a class="nav-link" href="index.html">Home</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="shop.html">Shop</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="#">Blog</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact Us</a>
         </li>
         <li class="nav-item">
            <a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a>
            <a href="account.html"><i class="fa-solid fa-user"></i></a>
          
         </li>       
      </ul>
     
      
    </div>
  </div>
</nav>
<!--HOME-->
<section id="home">
   <div class="container">
      <h5>NEW ARRIVALS</h5>
      <h1>Best Prices <span>This Season</span></h1>
      <p>Eshop offer the best product for the most affordable Prices</p>
      <button>Shop Now</button>
   </div>
</section>

<!--BRAND-->
<section id="brand" class="container">
   <div class="row m-0">
      <img class="image-fluid col-lg-3 col-md-6 col-sm-12" src="./assets/images/adidas-2.svg" alt="">
      <img class="image-fluid col-lg-3 col-md-6 col-sm-12" src="./assets/images/fashion_nova-logo_brandlogos.net_aqcdr.png" alt="">
      <img class="image-fluid col-lg-3 col-md-6 col-sm-12" src="./assets/images/Louis-Vuitton.jpeg" alt="">
      <img class="image-fluid col-lg-3 col-md-6 col-sm-12" src="./assets/images/nike_lgo.png" alt="">

   </div>
</section>

<!--NEW-->
<section id="new" class="w-100">
   <div class="row p-0 m-0 ">
      <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
         <img class="image-fluid" src="assets/images/long_sleves.jpg" alt="">
         <div class="details">
            <h2>Extremely Awesome shirts</h2>
            <button class="text-uppercase">Shop Now</button>
         </div>
      </div>

      <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
         <img class="image-fluid" src="assets/images/bag.jpg" alt="">
         <div class="details">
            <h2>Extremely Awesome Bags</h2>
            <button class="text-uppercase">Shop Now</button>
         </div>
      </div>
      <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
         <img class="image-fluid" src="assets/images/nikie.png" alt="">
         <div class="details">
            <h2>50% OFF</h2>
            <button class="text-uppercase">Shop Now</button>
         </div>
      </div>
   </div>
   
</section>

<!--FEATURED-->
<section id="featured my-5 pb-5">
   <div class="container text-center mt-5 py-5">
      <H3>Our Featured</H3>
      <hr class="mx-auto">
      <p>Here you can check our featured products</p>
   </div>
   <div class="row mx-auto container-fluid">

   <?php include('server/get_featured_products.php'); ?>

   <?php while( $row = $featured_products->fetch_assoc()){?>
      <div onclick="window.location.href='single_product.html';" class="product text-center col-lg-3 col-md-4 col-sm-12">
         <img class="image-fluid mb-3" src="assets/images/<?php echo $row['product_image']; ?>">
         <div class="star">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
         </div>
         <h5 class="p-product"><?php echo $row['product_name']; ?></h5>
         <h4 class="p-price">$<?php echo $row['product_price'];?></h4>
         <a href="<?php echo "single_product.php?product_id=". $row['product_id'];?>"><button class="buy-btn">Buy Now</button> </a>
      </div>

      <?php } ?>

   </div>

</section>

<!--BANNER-->
<section id="banner" class="my-5 py-5">
   <div class="container"> 
      <h4> MID SEASONS SALE </h4>
      <h1>Autumn Collection <br> UP TO 30% OFF</h1>  
      <button class="text-uppercase">shop now </button>
   </div>
</section>


<!--Clothes-->
<section id="Clothes my-5 ">
   <div class="container text-center mt-5 py-5">
      <H3>Dresses & Coats</H3>
      <hr class="mx-auto">
      <p>Here you can check our amazing clothes</p>
   </div>
   <div class="row mx-auto container-fluid">

   <?php include('server/get_coats.php');?>

   <?php while($row = $coats_products->fetch_assoc()){?>

      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
         <img class="image-fluid mb-3" src="assets/images/<?php echo $row['product_image'];?>" alt="hey">
         <div class="star">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
         </div>
         <h5 class="p-product"><?php echo $row['product_name'];?></h5>
         <h4 class="p-price">$<?php echo $row['product_price'];?></h4>
         <button class="buy-btn">Buy Now</button>
      </div>
      <?php } ?>

   </div>

</section>

<!--Watches-->
<section id="Watches my-5 ">
   <div class="container text-center mt-5 py-5">
      <H3>Amazing Watches</H3>
      <hr class="mx-auto">
      <p>Check our amazing Watches</p>
   </div>
   <div class="row mx-auto container-fluid">
      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
         <img class="image-fluid mb-3" src="assets/images/watch1.webp" alt="hey">
         <div class="star">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
         </div>
         <h5 class="p-product">Sport Shoes</h5>
         <h4 class="p-price">$19.99</h4>
         <button class="buy-btn">Buy Now</button>
      </div>
      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
         <img class="image-fluid mb-3" src="assets/images/watch2.webp" alt="hey">
         <div class="star">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
         </div>
         <h5 class="p-product">Sport Shoes</h5>
         <h4 class="p-price">$19.99</h4>
         <button class="buy-btn">Buy Now</button>
      </div>
      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
         <img class="image-fluid mb-3" src="assets/images/watch3.jpg" alt="hey">
         <div class="star">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
         </div>
         <h5 class="p-product">Sport Shoes</h5>
         <h4 class="p-price">$19.99</h4>
         <button class="buy-btn">Buy Now</button>
      </div>
      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
         <img class="image-fluid mb-3" src="assets/images/watch4.jpeg" alt="hey">
         <div class="star">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
         </div>
         <h5 class="p-product">Sport Shoes</h5>
         <h4 class="p-price">$19.99</h4>
         <button class="buy-btn">Buy Now</button>
      </div>

   </div>

</section>

<!--Shoes-->
<section id="shoes my-5 ">
   <div class="container text-center mt-5 py-5">
      <H3>Shoes</H3>
      <hr class="mx-auto">
      <p>Here you can check our amazing Shoes</p>
   </div>
   <div class="row mx-auto container-fluid">
      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
         <img class="image-fluid mb-3" src="assets/images/shoee1.jpg" alt="hey">
         <div class="star">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
         </div>
         <h5 class="p-product">Sport Shoes</h5>
         <h4 class="p-price">$19.99</h4>
         <button class="buy-btn">Buy Now</button>
      </div>
      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
         <img class="image-fluid mb-3" src="assets/images/shoee2.jpg" alt="hey">
         <div class="star">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
         </div>
         <h5 class="p-product">Sport Shoes</h5>
         <h4 class="p-price">$19.99</h4>
         <button class="buy-btn">Buy Now</button>
      </div>
      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
         <img class="image-fluid mb-3" src="assets/images/shoee3.jpeg" alt="hey">
         <div class="star">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
         </div>
         <h5 class="p-product">Sport Shoes</h5>
         <h4 class="p-price">$19.99</h4>
         <button class="buy-btn">Buy Now</button>
      </div>
      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
         <img class="image-fluid mb-3" src="assets/images/shoee4.webp" alt="hey">
         <div class="star">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
         </div>
         <h5 class="p-product">Sport Shoes</h5>
         <h4 class="p-price">$19.99</h4>
         <button class="buy-btn">Buy Now</button>
      </div>

   </div>

</section>

<!--Footer-->
<footer class="mt-5 py-5">
   <div class="row container mx-auto pt-5">
      <div class="footer-one col-lg-3 col-md-6 col-sm-12">
         <img src="" alt="">
         <p class="pt-3">We provide the best products for affordable Prices</p>
      </div>

      <div class="footer-one col-lg-3 col-md-6 col-sm-12">
        <h5 class="pb-5"> Featured</h5>
        <ul class="text-uppercase"> 
         <li><a href="#">men</a></li>
         <li><a href="#">women</a></li>
         <li><a href="#">boys</a></li>
         <li><a href="#">girls</a></li>
         <li><a href="#">new arrivals</a></li>
         <li><a href="#">clothes</a></li>
        </ul>
      </div>

      <div class="footer-one col-lg-3 col-md-6 col-sm-12">
         <h5 class="pb-2"> Contact Us</h5>
         <div>
            <h6 class="text-upper">Address</h6>
            <p>1 makinde str, New York </p>
         </div>
         <div>
            <h6 class="text-upper">Phone </h6>
            <p>+1 (760) 234 4567 </p>
         </div>
         <div>
            <h6 class="text-upper">Email</h6>
            <p>zackyypee@gmail.com</p>
         </div>
      </div>
      <div class="footer-one col-lg-3 col-md-6 col-sm-12">
         <h5 class="pb-2">Instagram</h5>
         <div class="row">
            <img class="image-fluid w-25 h-100 m-2" src="assets/images/p-shirt.webp" alt="">
            <img class="image-fluid w-25 h-100 m-2" src="./assets/images/newBag.webp" alt="">
            <img class="image-fluid w-25 h-100 m-2" src="assets/images/p-shoe3.jpg" alt="">
            <img class="image-fluid w-25 h-100 m-2" src="assets/images/p-shoe1.avif" alt="">
            <img class="image-fluid w-25 h-100 m-2" src="assets/images/coats3.jpg" alt="">
         </div>
      </div>
    
   </div>

   <div class="copyright mt-5 "> 
      <div class="row container mx-auto">
         <div class="col-lg-3 col-md-5 col-sm-12 mb-4 text-nowrap">
            <img src="/assets/images/payment.webp" alt="">
         </div>
         <div class="col-lg-3 col-md-5 col-sm-12 mb-4 text-nowrap">
            <p>zackyypee @ 2025 All Right Reserved</p>
         </div>
         <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
            <a href="#"> <i class="fa-brands fa-facebook"></i></a>
            <a href="#"> <i class="fa-brands fa-instagram"></i></a>
            <a href="#"> <i class="fa-brands fa-twitter"></i></a>
         </div>
      </div>
   </div>
</footer>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>