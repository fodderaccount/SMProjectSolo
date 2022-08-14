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