<!-- header section starts  -->

<header class="header">


    <section class="flex">
 
       <a href="{{route('client.index')}}" class="logo">Pizza.</a>
 
       <nav class="navbar">
          <a href="{{route('client.index')}}">home</a>
          <div class="dropdown">
            <button class="dropbtn"><a>category</a></button>
            <div class="category-content">
               
                  @foreach(App\Models\Category::all() as $cat)
                  <a href="{{url('viewCategory/'.$cat->name)}}">
                  <li class="option" value="{{$cat->id}}">{{$cat->name}}</li>
                  </a>
                  @endforeach
               
            </div>
          </div>
          <a href="{{route('client.about')}}">about</a>
          <a href="{{route('client.menu')}}">menu</a>
          <a href="{{route('client.order')}}">order</a>
          <a href="{{route('client.faq')}}">faq</a>
       </nav>
 
       <div class="icons">
          <a id="menu-btn" class="fas fa-bars"></a>
          <a class="fas fa-user" href="{{route('login')}}"></a>
          <a href="#" class="fas fa-box"></a>
          <a href="#" class="fas fa-shopping-cart"></a>
       </div>
 
    </section>
 
 </header>
 
 <!-- header section ends -->
