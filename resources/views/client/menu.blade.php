
@extends('client.layouts.master')


@section('content')

<!-- menu section starts  -->
<section id="menu" class="menu">


   <h1 class="heading">Our Pizza</h1>

   <div class="container">

      <div class="row">
         @foreach ($product as $prod)
         <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card-p-2">
               <a href="{{url('detail/'.$prod->id)}}" style="text-decoration: none">
                  <div class="price">$<span>{{$prod->price}}</span></div>
                  <img src="uploads/img/{{$prod->image}}" alt="">
                  <div class="name">{{$prod->name}}</div>
               </a>
               <form action="" method="post">
                  <input type="number" min="1" max="100" value="1" class="qty" name="qty">
                  <input type="submit" value="add to cart" name="add_to_cart" class="btn">
               </form>
            </div>
         </div>
         @endforeach
         
      </div>

   

   </div>

</section>


 
 <!-- menu section ends -->
 @endsection