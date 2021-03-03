@extends('template.back')

@section('Cback')

     <!-- ======= Contact Section ======= -->
    <div id="contact" class="paddsection">
        <div class="container">
            <div class="contact-block1">
                <div class="row">

                    <div class="col-lg-6">
                        <div class="contact-contact">

                            <h2 class="mb-30">{{ $contact[0]->h2 }}</h2>

                            

                                <form action="/updateContact" method="POST">
                                    @csrf
                                    @if ($errors->any()) 
                                    <div class="alert alert-danger"> 
                                    <ul> @foreach ($errors->all() as $error) 
                                    <li>{{ $error }}</li> 
                                    @endforeach </ul> 
                                    </div> 
                                    @endif

                                    <ul class="contact-details">


                                        <li><input type="text" value="{{ $adress[0]->street}}" name="street"></li>
                                        <li><input type="text" value="{{ $adress[0]->city}}" name="city"></li>
                                        <li><input type="text" value="{{ $phone[0]->number}}" name="number"></li>
                                        <li><input type="text" value="{{ $mail[0]->email}}" name="email"></li>

                                        <button class="btn btn-success" type="submit">UPDATE</button>


                                    </ul>
                                
                                </form>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">

                                <div class="col-lg-6">
                                    <div class="form-group contact-block1">
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Your Name" data-rule="minlen:4"
                                            data-msg="Please enter at least 4 chars" />
                                        <div class="validate"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Your Email" data-rule="email"
                                            data-msg="Please enter a valid email" />
                                        <div class="validate"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subject" id="subject"
                                            placeholder="Subject" data-rule="minlen:4"
                                            data-msg="Please enter at least 8 chars of subject" />
                                        <div class="validate"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" rows="12" data-rule="required"
                                            data-msg="Please write something for us" placeholder="Message"></textarea>
                                        <div class="validate"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>

                                <div class="col-lg-12">
                                    <input type="submit" class="btn btn-defeault btn-send" value="Send message">
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Contact Section -->

    
@endsection