<!DOCTYPE html>
<html lang="en">

@include('client.layouts.header')
<body>
   
<!-- header section starts  -->



@include('client.layouts.navbar')
<!-- header section ends -->



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