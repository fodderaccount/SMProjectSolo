<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> Pizza. </title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
   <!-- custom css file link  -->
   <link rel="stylesheet" href="client/css/style.css">
</head>

<body>
   
<!-- header section starts  -->


@include('client.layouts.header')

<!-- header section ends -->





<!-- header section ends -->





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