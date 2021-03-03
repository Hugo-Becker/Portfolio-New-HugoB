<!-- ======= Portfolio Section ======= -->
<div id="portfolio" class="paddsection">

    <div class="container">
      <div class="section-title text-center">
        <h2>{{$porfolio[0]->h2}}</h2>
      </div>
    </div>

    <div class="container">


      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">

            @foreach ($liPorfolio as $p)


              <li data-filter="{{$p->filter}}">{{$p->content}}</li>

                
            @endforeach
          </ul>
        </div>
      </div>


      <div class="row portfolio-container">


        @foreach ($cardPorfolio as $c)
        <div class="col-lg-4 col-md-6 portfolio-item {{$c->filter}}">
          <img src={{asset($c->src)}} class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>{{$c->h4}}</h4>
            <p>{{$c->p}}</p>
            <a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="{{$c->h4}}"><i class="bx bx-plus"></i></a>

            
          </div>
        </div>
        @endforeach



      </div>

    </div>

  </div><!-- End Portfolio Section -->