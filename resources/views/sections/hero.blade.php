<div id="hero" class="home">

    <div class="container">
      <div class="hero-content">
        <h1>I'm <span class="typed"></span></h1>
        <p class="typed-items" style="@if($hero[0]->para)" data-typed-person="Alex Smith">{{$hero[0]->para}}</p>

        <ul class="list-unstyled list-social">

          @foreach ($liHero as $li)


           <li><a href="#"><i class="{{$li->i}}"></i></a></li>


              
          @endforeach
        </ul>
      </div>
    </div>
  </div><!-- End Hero -->