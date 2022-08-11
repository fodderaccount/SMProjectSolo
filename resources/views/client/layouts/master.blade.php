<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> Pizza. </title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="client/css/style.css">

</head>
<body>
   
<!-- header section starts  -->

@include('client.layouts.header')

<!-- header section ends -->

<div class="user-account">

   <section>

      <div id="close-account"><span>close</span></div>

      <div class="user">
         <p><span>you are not logged in now!</span></p>
      </div>

      

      <div class="flex">

         <form action="" method="post">
            <h3>login now</h3>
            <input type="email" name="email" required class="box" placeholder="enter your email" maxlength="50">
            <input type="password" name="pass" required class="box" placeholder="enter your password" maxlength="20">
            <input type="submit" value="login now" name="login" class="btn">
         </form>

         <form action="{{route('client.include.register')}}" method="post" enctype="multipart/form-data">
            <h3>register now</h3>
            <input type="text" name="name" required class="box" placeholder="enter your name" maxlength="20">
            <input type="email" name="email" required class="box" placeholder="enter your email" maxlength="50">
            <input type="password" name="pass" required class="box" placeholder="enter your password" maxlength="20">
            <input type="password" name="cpass" required class="box" placeholder="confirm your password" maxlength="20">
            <input type="submit" value="register now" name="register" class="btn">
         </form>

      </div>

   </section>

</div>

<div class="my-orders">

   <section>

      <div id="close-orders"><span>close</span></div>

      <h3 class="title"> my orders </h3>

      <div class="box">
         <p>placed on : <span>06/04/2022</span> </p>
         <p>name : <span>shaikh anas</span> </p>
         <p>number : <span>1234567890</span></p>
         <p>address : <span>flat no. 123, bulding no. 2, jogeshwari, mumbai, india - 400104</span></p>
         <p>payment method : <span>cash on delivery</span></p>
         <p>your orders : <span>pizza 01 $3/- x 2, pizza 03 $2/- x 1, pizza 06 $4/- x 4, pizza 07, $2/- x 1</span></p>
         <p>total price : <span>$11/-</span></p>
         <p>payment status : <span style="color: var(--red);">pending</span> </p>
      </div>

      <div class="box">
         <p>placed on : <span>06/04/2022</span> </p>
         <p>name : <span>shaikh anas</span> </p>
         <p>number : <span>1234567890</span></p>
         <p>address : <span>flat no. 123, bulding no. 2, jogeshwari, mumbai, india - 400104</span></p>
         <p>payment method : <span>cash on delivery</span></p>
         <p>your orders : <span>pizza 01 $3/- x 2, pizza 03 $2/- x 1, pizza 06 $4/- x 4, pizza 07, $2/- x 1</span></p>
         <p>total price : <span>$11/-</span></p>
         <p>payment status : <span style="color: var(--red);">pending</span> </p>
      </div>

   </section>

</div>

<div class="shopping-cart">

   <section>

      <div id="close-cart"><span>close</span></div>

      <div class="box">
         <a href="#" class="fas fa-times"></a>
         <img src="client/images/pizza-1.jpg" alt="">
         <div class="content">
            <p>pizza-1 <span>( $3/- x 2 )</span></p>
            <form action="" method="post">
               <input type="number" class="qty" name="qty" min="1" value="2" max="100">
               <button type="submit" class="fas fa-edit" name="update_qty"></button>
            </form>
         </div>
      </div>

      <div class="box">
         <a href="#" class="fas fa-times"></a>
         <img src="client/images/pizza-3.jpg" alt="">
         <div class="content">
            <p>pizza-3 <span>( $2/- x 1 )</span></p>
            <form action="" method="post">
               <input type="number" class="qty" name="qty" min="1" value="1" max="100">
               <button type="submit" class="fas fa-edit" name="update_qty"></button>
            </form>
         </div>
      </div>

      <div class="box">
         <a href="#" class="fas fa-times"></a>
         <img src="client/images/pizza-6.jpg" alt="">
         <div class="content">
            <p>pizza-6 <span>( $4/- x 2 )</span></p>
            <form action="" method="post">
               <input type="number" class="qty" name="qty" min="1" value="2" max="100">
               <button type="submit" class="fas fa-edit" name="update_qty"></button>
            </form>
         </div>
      </div>

      <div class="box">
         <a href="#" class="fas fa-times"></a>
         <img src="client/images/pizza-7.jpg" alt="">
         <div class="content">
            <p>pizza-7 <span>( $2/- x 1 )</span></p>
            <form action="" method="post">
               <input type="number" class="qty" name="qty" min="1" value="1" max="100">
               <button type="submit" class="fas fa-edit" name="update_qty"></button>
            </form>
         </div>
      </div>

      <a href="#order" class="btn">order now</a>

   </section>

</div>

<!-- banner -->
      @include('client.layouts.banner')
<!-- banner -->

<!-- about section starts  -->


<!-- about section ends -->



<!-- menu section starts  -->

@yield('content')

<!-- menu section ends -->

<!-- order section starts  -->


<!-- order section ends -->



<!-- faq section starts  -->


<!-- faq section ends -->



<!-- footer section starts  -->

@include('client.layouts.footer')

<!-- footer section ends -->




<!-- custom js file link  -->
<script src="client/js/script.js"></script>

</body>
</html>