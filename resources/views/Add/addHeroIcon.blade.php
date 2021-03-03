@extends('template.back')

@section('Cback')

<div class="container d-flex justify-content-center mt-5">

    <div class="card" style="width: 18rem;">
        
        <div class="card-body">

          <h1 class="card-title"><i class="  text-primary" > </i></h1>
          <p class="card-text">Paste or edit your icon link then your link to the page below</p>
             <form action="/storeHeroIcon" method="POST">
                @csrf
                <input name="i" value="" class="form-control" type="text">
                <input name="href" value="" class="form-control" type="text">
                <button type="submit" class="btn btn-primary">Store</button>

        
             </form>

   
        </div>
      </div>

</div>


    
@endsection