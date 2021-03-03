@extends('template.back')

@section('Cback')

<div id="hero" class="home">

  <div class="container">
    <div class="hero-content">
      <h1>I'm <span class="typed"></span></h1>
      <p class="typed-items" data-typed-person="Alex Smith">

        {{-- {{$hero[0]->para}} --}}
        <form action="/updateHero" method="post">
          @csrf
          @if ($errors->any()) 
            <div class="alert alert-danger"> 
              <ul> 
                @foreach ($errors->all() as $error)  
                <li>{{ $error }}</li> 
                @endforeach 
              </ul> 
            </div> 
          @endif
          <input name="para" class="form-control bg-light" value="{{$hero[0]->para}}" type="text">
          <button class="btn btn-primary" type="submit">Update</button>
        </form>

      </p>

      <ul class="list-unstyled list-social">

        @foreach ($liHero as $li)


         <li><a href="/showHeroIcon/{{$li->id}}"><i class="{{$li->i}}"></i></a></li>


            
        @endforeach
      </ul>

      <a style="width: 200px" class="btn btn-success" href="/addHeroIcon">Add socials</a>

    </div>
  </div>
</div><!-- End Hero -->


    
@endsection