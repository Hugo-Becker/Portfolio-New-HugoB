@extends('template.back')

@section('Cback')

<div class="container d-flex justify-content-center mt-5">

    <div class="card" style="width: 18rem;">
        
        <div class="card-body">

          <h1 class="card-title"><i class="text-primary" > </i></h1>
          <p class="card-text">Paste or edit your icon link then your title and paragraph below</p>
             <form action="/storeServices" method="POST">
                @csrf
                <label for="">Icon</label>
                <input name="i" value="" class="form-control" type="text">

                <label for="">Title</label>

                <input name="span" value="" class="form-control" type="text">

                <label for="">Paragraph</label>

                <input name="p" value="" class="form-control" type="text">
                <button type="submit" class="btn btn-primary">Store</button>

        
             </form>

   
        </div>
      </div>

</div>


    
@endsection