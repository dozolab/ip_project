<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">


  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view" style="max-height: 700px">
        <img class="d-block w-100" src="gallerypart/aboutfood2.jpeg"
          alt="First slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Welcome to Restaurant</h3>
        <p>A place to bring people together to eat better, feel </br>
            better, and celebrate a passion for better living.</p>
      </div>
    </div>
    <div class="carousel-item" >

      <div class="view" style="max-height: 700px">
        <img class="d-block w-100" style="" src="gallerypart/aboutfood1.jpeg"
          alt="Second slide">
        <div class="mask rgba-black-strong"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Welcome to Restaurant</h3>
        <p>A bowl that has your back.</br> Meet our new Immunity bowl.</p>
      </div>
    </div>
    <div class="carousel-item">

      <div class="view" style="max-height: 700px">
        <img class="d-block w-100" src="gallerypart/aboutfood3.jpeg"
          alt="Third slide">
        <div class="mask rgba-black-slight"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Welcome to Restaurant</h3>
        <p>A Better Definition of the Diet.</p>
      </div>
    </div>
  </div>

  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true">&lsaquo;</span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true">&rsaquo;</span>
    <span class="sr-only">Next</span>
  </a>

</div>
       <div class="row my-5 about-text">
             <div class="col">
                 <h1 style="">OUR CUSTOMERS FEEDBACK</h1>
              <div class="border" style=""></div>
           </div>
         </div>





         <div class="row justify-content-center" style="margin: 0 50px; background-color: #90d5ec;
background-image: linear-gradient(315deg, #90d5ec 0%, #fc575e 74%);
 padding-top: 80px;padding-bottom: 80px;">
          <div class="col-md-3">

<div class="card testimonial-card" >


  <div class="card-up" ></div>


  <div class="avatar mx-auto white avatarfotoresize" >
    <img src="https://scontent.ftas2-1.fna.fbcdn.net/v/t1.6435-9/139186034_916662782204502_256974999458152420_n.jpg?_nc_cat=111&ccb=1-3&_nc_sid=a26aad&_nc_ohc=AotlrqD6mNIAX-6aIRt&_nc_ht=scontent.ftas2-1.fna&oh=4a1d3e35eb0e4d401484080c5d41bef9&oe=60CCEA37" class="rounded-circle fotocardmy1"
      alt="woman avatar" >
  </div>


  <div class="card-body">

    <h4 class="card-title">Ozodbek Ulashov U1910304</h4>
    <hr>

    <p>
        <i class="fa fa-quote-right" id="iconqumy1" ></i>
       I like this restaurant food because their food is delicious and I try to follow their new recips.
        <br><br>
    </p>
  </div>

</div>

   </div>
 <div class="col-md-3">

<div class="card testimonial-card">


  <div class="card-up indigo lighten-1"></div>


  <div class="avatar mx-auto white">
    <img src="aboutpart/img/Abdulaziz.jpg" class="rounded-circle fotocardmy1"
      alt="woman avatar" >
  </div>


  <div class="card-body">

    <h4 class="card-title">Jalilov Abdulaziz U1910203</h4>
    <hr>

    <p>
        <i class="fa fa-quote-right" id="iconqumy1" ></i>
       I enjoyed from their food their restaurant is comfortable I put good score.
        <br><br>
    </p>
  </div>

</div>

</div>


 <div class="col-md-3">

<div class="card testimonial-card">


  <div class="card-up indigo lighten-1"></div>


  <div class="avatar mx-auto white">
    <img src="aboutpart/img/Javohir.png" class="rounded-circle fotocardmy1"
      alt="woman avatar">
  </div>


  <div class="card-body">

    <h4 class="card-title">Tojiyev Javohir </h4>
    <hr>

    <p>
        <i class="fa fa-quote-right" id="iconqumy1" ></i>
        I choose this restaurant because foods are nice and Waiters very good.
    </p>
  </div>

</div>

</div>
</div>

 </div>



<div class="row justify-content-center my-5">
<div class="col-md-5">
    @include('partials.errors')
<form class="text-center border border-light p-5" action="{{ route('pages.AboutUs') }}" method="POST">

    <p class="h4 mb-4">Contact us</p>


    <input type="text" id="defaultContactFormName" class="form-control mb-4 @error('name') is-invalid @enderror" placeholder="Name" name="name" value="{{ old('name') }}">
    @error('name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror

    <input type="email" id="defaultContactFormEmail" class="form-control mb-4 @error('email') is-invalid @enderror" placeholder="E-mail" name="email" value="{{ old('email') }}">
    @error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror


{{--    <label>Subject</label>--}}
{{--    <select class="browser-default custom-select mb-4" name="">--}}
{{--        <option value="" disabled>Choose option</option>--}}
{{--        <option value="1" selected>Feedback</option>--}}
{{--        <option value="2">Report a bug</option>--}}
{{--        <option value="3">Feature request</option>--}}
{{--        <option value="4">Feature request</option>--}}
{{--    </select>--}}

    <div class="form-group">
        {{ csrf_field() }}
        <textarea class="form-control rounded-2 @error('comment') is-invalid @enderror" id="exampleFormControlTextarea2" rows="3" placeholder="Message" name="comment" >{{ old('comment') }}</textarea>
        @error('comment')
        <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
        </span>
        @enderror

    </div>





    <button class="btn btn-info btn-block" type="submit">Send</button>

</form>
  </div>

<div class="col-md-5" style="margin: auto 0;">
    <div class="contacttext">
    <h2> Restaurant </h2>
     <p>Our restaurant is very near to you  </br> Use the form to leave your feedback</p>
     </div>
  </div>
    </div>
