@extends('template.back')

@section('Cback')


<div class="container d-flex justify-content-center mt-5">

    <div class="card" style="width: 18rem;">
        
        <div class="card-body">

          <h1 class="card-title"><i class="text-primary" > </i></h1>
          <p class="card-text">Paste or edit your icon link then your title and paragraph below</p>
             <form action="/storePorfolio" enctype="multipart/form-data" method="POST">
                @csrf

                <br>

                <label for="">Icon</label>
                <input name="h4"  class="form-control" type="text">

                <label for="">Title</label>

                <input name="p"  class="form-control" type="text">

                <label for="">Filter</label>

                <input name="filter"  class="form-control" type="text">

                <label for="">Img</label>

                {{-- <input name="src"  class="form-control" type="text"> --}}
                <input name="src"  class="form-control form-control-file  " type="file">

                <button type="submit" class="btn btn-primary">Add</button>

        
             </form>

   
        </div>
      </div>

</div>



    
@endsection