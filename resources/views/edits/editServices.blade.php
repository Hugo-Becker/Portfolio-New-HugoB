@extends('template.back')


@section('Cback')

<a href="/addServices" class="btn btn-success d-flex justify-content-center">
    click to ADD SERVICES
</a>



<div class="">

  @foreach ($services as $s)


  <div class="container d-flex justify-content-center mt-5">

      <div class="card" style="width: 18rem;">
          
          <div class="card-body">

            <h1 class="card-title"><i class="text-primary" > </i></h1>
            <p class="card-text">Paste or edit your icon link then your title and paragraph below</p>
              <form action="/updateServices/{{$s->id}}" method="POST">
                  @csrf
                  @if ($errors->any()) 
                  <div class="alert alert-danger"> 
                  <ul> @foreach ($errors->all() as $error) 
                  <li>{{ $error }}</li> 
                  @endforeach </ul> 
                  </div> 
                  @endif
                  
                  <i style="font-size:50px;" class="{{$s->i}}"></i>
                  <br>

                  <label for="">Icon</label>
                  <input name="i" value="{{$s->i}}" class="form-control" type="text">

                  <label for="">Title</label>

                  <input name="span" value="{{$s->span}}" class="form-control" type="text">

                  <label for="">Paragraph</label>

                  <input name="p" value="{{$s->p}}" class="form-control" type="text">
                  <button type="submit" class="btn btn-primary">update</button>

          
              </form>

    
          </div>
        </div>

  </div>




  @endforeach


</div>





@endsection
