    

      @extends('template.back')

      @section('Cback')
            
        <!-- ======= About Section ======= -->
        <div id="about" class="paddsection">
            <div class="container">
            <div class="row justify-content-between">

                <div class="col-lg-4 ">
                <div class="div-img-bg">
                    <div class="about-img">
                    <img src="assets/img/me.jpg" class="img-responsive" alt="me">
                    </div>
                </div>
                </div>

                <div class="col-lg-7">
                <div class="about-descr">

                    <div class="hero-content">

                    <form action="/updateAbout" method="post">
                        @csrf
                        @if ($errors->any()) 
                        <div class="alert alert-danger"> 
                        <ul> @foreach ($errors->all() as $error) 
                        <li>{{ $error }}</li> 
                        @endforeach </ul> 
                        </div> 
                        @endif
                        <textarea style="width: 600px; height:100px;	width: 600px;
                        height: 120px;
                        border: 3px solid #cccccc;
                        padding: 5px;
                        font-family: Tahoma, sans-serif;
                        background-image: url(bg.gif);
                        background-position: bottom right;
                        background-repeat: no-repeat;
                        "  class="d-flex text-dark mt-3" name="heading" id="" cols="30" placeholder="" rows="10"> {{$about[0]->heading}}</textarea>
                        <textarea style="width: 600px; height:100px;	width: 600px;
                        height: 120px;
                        border: 3px solid #cccccc;
                        padding: 5px;
                        font-family: Tahoma, sans-serif;
                        background-image: url(bg.gif);
                        background-position: bottom right;
                        background-repeat: no-repeat;"  class="separator d-flex text-dark mt-3" name="p" id="" cols="30" placeholder="" rows="10"> {{$about[0]->p}}</textarea>
                        
                        <button class="btn btn-primary mt-3" type="submit">Update</button>
                      </form>

                      </div>

                    {{-- <p class="p-heading">{{$about[0]->heading}}</p> --}}
                    

                </div>

                </div>
            </div>
            </div>
        </div><!-- End About Section -->
      
      
          
      @endsection