@extends('template.back')

@section('Cback')

<div class="container d-flex justify-content-center mt-5">

    <div class="card" style="width: 18rem;">
        
        <div class="card-body">

          <h1 class="card-title"><i class=" {{$show->i}} text-primary" > </i></h1>
          <p class="card-text">Paste or edit your icon link and link to the page below</p>
             <form action="/updateHeroIcon/{{$show->id}}" method="POST">
                @csrf
                <input name="i" value="{{$show->i}}" class="form-control" type="text">
                <input name="href" value="{{$show->href}}" class="form-control" type="text">
                <button type="submit" class="btn btn-primary">Update</button>

        
             </form>

             <form class="mt-3" action="/destroyHeroIcon/{{$show->id}}" method="POST">
                @csrf
                <button class="btn btn-danger" type="submit">Delete this link</button>
            </form>
        </div>
      </div>

</div>


    
@endsection