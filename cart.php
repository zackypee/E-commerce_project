<?php

  session_start();
  if(isset($_POST['add_to_cart'])){


   /// if the user has already added a product to the cart
   if(isset($_SESSION['cart'])){

      $product_aray_ids = array_column($_SESSION['cart'], 'product_id');
      // this check if product is already in the cart or not 
if(!in_array($_POST['product_id'], $product_aray_ids)){

   $product_id = $_POST['product_id'];

   $product_aray = array(
      'product_id' => $_POST['product_id'],
      'product_name' => $_POST['product_name'],
      'product_price' => $_POST['product_price'],
      'product_image' => $_POST['product_image'],
      'product_quantity' => $_POST['product_quantity'],
   );
 

   $_SESSION['cart'][$product_id] = $product_aray;


   // if product has already been added to the cart
   }else{

      echo '<script>alert("product was already added to cart")</script>';
 }
   

      ///if this is the first product 
   }else {
      $product_id = $_POST['product_id'];
      $product_name = $_POST['product_name'];
      $product_price = $_POST['product_price'];
      $product_image = $_POST['product_image'];
      $product_quantity = $_POST['product_quantity'];

      $product_aray = array(
         'product_id' => $product_id,
         'product_name' => $product_name,
         'product_price' => $product_price,
         'product_image' => $product_image,
         'product_quantity' => $product_quantity,
      );
      $_SESSION['cart'][$product_id] = $product_aray;
   }


   // remove product from cart
  }else if(isset($_POST['remove_product'])){

   $product_id = $_POST['product_id'];
   unset($_SESSION['cart'][$product_id]);
  
}else{
      header('location: index.php');
  }


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/style.css">


    <style>
      .cart{
          margin-top: 100px !important;
      }
  </style>
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
                       <a href="contact.html"><i class="fa-solid fa-user"></i></a>
                     
                    </li>       
                 </ul>
                
                 
               </div>
             </div>
         </nav>
      
  <!--cart -->
  <section class="cart container my-5 py-5">
    <div class="container mt -5">
        <h2 class="font-weight-bold">Your Cart</h2>
        <hr>
    </div>
    <table class="mt-5 pt-5">
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>

        <?php foreach($_SESSION['cart'] as $key => $value){ ?>
        <tr>
            <td>
                <div class="product-info">
                    <img class="" src="assets/images/<?php echo $value['product_image']; ?>" alt="">
                    <div>
                     <p><?php echo $value['product_name']; ?></p>
                     <small><span>$</span><?php echo $value['product_price']; ?></small>
                     <br>
                     <form method="POST" action="cart.php">
                        <input type="hidden" name="product_id" value="<?php echo $value['product_id']; ?>">
                       <input type="submit" name="remove_product" class="remove-btn" href="#" value="remove">   
                     </form>
                     
                 </div> 
                  
                </div>
            </td>
            <td>
                 <input type="number" value="<?php echo $value['product_quantity']; ?>">
                 <a class="edit-btn" href="#">Edit</a>
            </td>
            <td>
               <span>$</span>
               <span class="product-price">129.99</span>
            </td>
        </tr>

        <?php } ?> 
    </table>

    <div class="cart-total">
      <table>
         <tr>
            <td>Subtotal</td>
            <td>$155</td>
         </tr>

         <tr>
            <td>Total</td>
             <td>$200 </td>
         </tr>

      </table>
    </div>

    <div class="checkout-container" >
      <button class="checkout-btn">Checkout</button>
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