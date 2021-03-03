<!-- ======= Footer ======= -->
<div id="footer" class="text-center">
    <div class="container">
      <div class="socials-media text-center">

        <ul class="list-unstyled">
          {{-- <li><a href="#"><i class="ion-social-facebook"></i></a></li>
          <li><a href="#"><i class="ion-social-twitter"></i></a></li>
          <li><a href="#"><i class="ion-social-instagram"></i></a></li>
          <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
          <li><a href="#"><i class="ion-social-tumblr"></i></a></li>
          <li><a href="#"><i class="ion-social-dribbble"></i></a></li> --}}
          @foreach ($footerIcon as $f)

            <li><a href="#"><i class="{{$f->i}}"></i></a></li>  
              
          @endforeach
        </ul>

      </div>

      <p>&copy; Copyrights Folio. All rights reserved.</p>

      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Folio
      -->
        {{$footerExplode[0]}} <a href="{{$footer[0]->href}}">{{$footerExplode[1]}}</a>
      </div>

    </div>
  </div><!-- End Footer -->