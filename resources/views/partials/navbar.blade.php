
    <nav id="main-nav">
        <div class="row">
          <div class="container">
    
            <div class="logo">
              <a href="index.html"><img src="assets/img//logo.png" alt="logo"></a>
            </div>
    
            <div class="responsive"><i data-icon="m" class="ion-navicon-round"></i></div>
    
            <ul class="nav-menu list-unstyled">
              {{-- <li><a href="index.html" class="smoothScroll">Home</a></li>
              <li><a href="#about" class="smoothScroll">About</a></li>
              <li><a href="#portfolio" class="smoothScroll">Portfolio</a></li>
              <li><a href="#contact" class="smoothScroll">Contact</a></li>
              <li><a href="#journal" class="smoothScroll">Creation</a></li> --}}

              @foreach ($nav as $n)

              <li><a href="{{$n->href}}" class="smoothScroll">{{$n->content}}</a></li>


                  
              @endforeach




            </ul>
    
          </div>
        </div>
      </nav><!-- End Navbar -->
