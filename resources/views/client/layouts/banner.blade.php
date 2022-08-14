<div class="home-bg">
   <section class="home" id="home">
<<<<<<< HEAD
      <div class="slide-container">
 
<<<<<<< HEAD
       <div class="slide-container">
         @foreach ($slider as $key => $value)
    

          <div class="slide active">
             <div class="image">
                <img src="{{asset('uploads/img/'.$value->image)}}" alt="">
             </div>
             <div class="content">
                <h3>{{ $value->title }}</h3>
                <div class="fas fa-angle-left" onclick="prev()"></div>
                <div class="fas fa-angle-right" onclick="next()"></div>
             </div>
          </div>
          @endforeach
          <div class="slide">
             <div class="image">
                <img src="client/images/home-img-2.png" alt="">
             </div>
             <div class="content">
                <h3>Pizza With Mushrooms</h3>
                <div class="fas fa-angle-left" onclick="prev()"></div>
                <div class="fas fa-angle-right" onclick="next()"></div>
             </div>
          </div>
=======
=======

>>>>>>> f8bf4901e183f4bad3a96865acd11c8a25b3c809
         <div class="slide active">
            <div class="image">
               <img src="client/images/home-img-1.png" alt="">
            </div>
            <div class="content">
               <h3>homemade Pepperoni Pizza</h3>
               <div class="fas fa-angle-left" onclick="prev()"></div>
               <div class="fas fa-angle-right" onclick="next()"></div>
            </div>
         </div>
 
         <div class="slide">
            <div class="image">
               <img src="client/images/home-img-2.png" alt="">
            </div>
            <div class="content">
               <h3>Pizza With Mushrooms</h3>
               <div class="fas fa-angle-left" onclick="prev()"></div>
               <div class="fas fa-angle-right" onclick="next()"></div>
            </div>
         </div>
 
         <div class="slide">
            <div class="image">
               <img src="client/images/home-img-3.png" alt="">
            </div>
            <div class="content">
               <h3>Mascarpone And Mushrooms</h3>
               <div class="fas fa-angle-left" onclick="prev()"></div>
               <div class="fas fa-angle-right" onclick="next()"></div>
            </div>
<<<<<<< HEAD
         </div>
>>>>>>> main
=======

       <div class="slide-container">
         @foreach ($slider as $key => $value)
    

          <div class="slide active">
             <div class="image">
                <img src="{{asset('uploads/img/'.$value->image)}}" alt="">
             </div>
             <div class="content">
                <h3>{{ $value->title }}</h3>
                <div class="fas fa-angle-left" onclick="prev()"></div>
                <div class="fas fa-angle-right" onclick="next()"></div>
             </div>
          </div>
          @endforeach
          <div class="slide">
             <div class="image">
                <img src="client/images/home-img-2.png" alt="">
             </div>
             <div class="content">
                <h3>Pizza With Mushrooms</h3>
                <div class="fas fa-angle-left" onclick="prev()"></div>
                <div class="fas fa-angle-right" onclick="next()"></div>
             </div>
          </div>

>>>>>>> f8bf4901e183f4bad3a96865acd11c8a25b3c809
 
      </div>
 
   </section>
 
</div>