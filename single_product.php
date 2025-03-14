<?php

include('server/connection.php');

if(isset($_GET['product_id'])){
   $product_id = $_GET['product_id'];
      
   $stmt = $conn->prepare("SELECT * FROM products WHERE product_id = ?");
   $stmt->bind_param("i",$product_id);
   $stmt->execute();

   $product = $stmt->get_result(); 
  
   
   //no producy id was  given 
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
        .single-product{
            margin-top: 185px !important;
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
               <a class="nav-link" href="#">Contact Us</a>
            </li>
            <li class="nav-item">
               <i class="fa-solid fa-bag-shopping"></i>
               <i class="fa-solid fa-user"></i>
            </li>       
         </ul>
        
         
       </div>
     </div>
   </nav> 





   <!--single product-->
   <section class="single-product py-5 pt-5">
    <div class="row mt-5">
      <?php while($row = $product->fetch_assoc()){ ?>

        

        <div class="container  col-lg-5 col-md-6 col-sm-12">
            <img class="image-fluid w-100 pb-1" src="assets/images/<?php echo $row['product_image'];?>" id="mainImg" alt="">
            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="assets/images/<?php  echo $row['product_image'];?>" width="100%" class="small-img"  alt="">
                </div>
                <div class="small-img-col">
                    <img src="assets/images/<?php echo $row['product_image2'];?>" width="100%" class="small-img"  alt="">
                </div>
                <div class="small-img-col">
                    <img src="assets/images/<?php echo $row['product_image3'];?>" width="100%" class="small-img"  alt="">
                </div>
                <div class="small-img-col">
                    <img src="assets/images/<?php echo $row['product_image4'];?>" width="100%" class="small-img"  alt="">
                </div> 

            </div>
        </div>
        <div class="col-lg-5 col-md-12 col-12">
            <h6><?php echo $row['product_name'];?></h6>
            <h2>$<?php echo $row['product_price'];?></h2>
            <form action="cart.php" method="POST">
               <input type="hidden" name="product_id" value="<?php echo $row['product_id'];?>">
               <input type="hidden" name="product_image" value="<?php echo $row['product_image'];?>">
               <input type="hidden" name="product_name" value="<?php echo $row['product_name'];?>">
               <input type="hidden" name="product_price" value="<?php echo $row['product_price'];?>">
      
               <input type="number" value="1" name="product_quantity" id="">
               <button class="buy-btn" type="submit" name="add_to_cart" >Add To cart</button>
            </form>
            
            <h4 class="mt-5 mb-5">Product Details</h4>
            <span><?php echo $row['product_description'];?>
            </span>
        </div>
           

        <?php } ?>
    </div>

  </section> 


  <!--related product-->

  <section id="related-product my-5 pb-5">
    <div class="container text-center mt-5 py-5">
       <H3>Related Product</H3>
       <hr class="mx-auto">
      
    </div>
    <div class="row mx-auto container-fluid">
       <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="image-fluid mb-3" src="assets/images/p-shoe1.avif" alt="hey">
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
          <img class="image-fluid mb-3" src="assets/images/p-shoe2.webp" alt="hey">
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
          <img class="image-fluid mb-3" src="assets/images/p-shoe3.jpg" alt="hey">
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
          <img class="image-fluid mb-3" src="assets/images/p-shoe4.avif" alt="hey">
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




    <script>
        const firstImg = document.getElementById('mainImg')
        const smallImg = document.getElementsByClassName('small-img')

        for(let i=0; i<smallImg.length; i++){
           smallImg[i].onclick = function(){
           firstImg.src = smallImg[i].src
           }
        }

    </script>
</body>
</html>