@extends('template.back')

@section('Cback')


<div class="container d-flex justify-content-center mt-5">

    <div class="card" style="width: 18rem;">
        
        <div class="card-body">

          <h1 class="card-title"><i class="text-primary" > </i></h1>
          <p class="card-text">Paste or edit your icon link then your title and paragraph below</p>
             <form action="/updatePorfolio/{{$show->id}}" enctype="multipart/form-data" method="POST">
                @csrf
                @if ($errors->any()) 
                  <div class="alert alert-danger"> 
                  <ul> @foreach ($errors->all() as $error) 
                  <li>{{ $error }}</li> 
                  @endforeach </ul> 
                  </div> 
                  @endif



                <br>

                <label for="">Icon</label>
                <input name="h4" value="{{$show->h4}}" class="form-control" type="text">

                <label for="">Title</label>

                <input name="p" value="{{$show->p}}" class="form-control" type="text">

                <label for="">Filter</label>

                <input name="filter" value="{{$show->filter}}" class="form-control" type="text">

                <label for="">New Img</label>

                {{-- <input name="src" value="{{$show->src}}" class="form-control" type="text"> --}}
                <input name="src"  class="form-control form-control-file" type="file"> 

                <button type="submit" class="btn btn-primary">Update</button>


        
             </form>

   
        </div>
      </div>

</div>



    
@endsection