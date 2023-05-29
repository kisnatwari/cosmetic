@extends('frontend.layout.header')  

@section('content')
    <div id="all">
      <div id="content">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div id="main-slider" class="owl-carousel owl-theme">
                <div class="item"><img src="{{asset('frontend/img/slide61.png')}}" alt="" class="img-fluid"></div>
                <div class="item"><img src="{{asset('frontend/img/main-slider2.jpg')}}" alt="" class="img-fluid"></div>
                <div class="item"><img src="{{asset('frontend/img/main-slider3.jpg')}}" alt="" class="img-fluid"></div>
                <div class="item"><img src="{{asset('frontend/img/main-slider4.jpg')}}" alt="" class="img-fluid"></div>
              </div>
              <!-- /#main-slider-->
            </div>
          </div>
        </div>
        <!--
        *** ADVANTAGES HOMEPAGE ***
        _________________________________________________________
        -->
        <div id="advantages">
          <div class="container">
            <div class="row mb-4">
              <div class="col-md-4">
                <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                  <div class="icon"><i class="fa fa-heart"></i></div>
                  <h3><a href="#">We love our customers</a></h3>
                  <p class="mb-0">We are known to provide best possible service ever</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                  <div class="icon"><i class="fa fa-tags"></i></div>
                  <h3><a href="#">Best prices</a></h3>
                  <p class="mb-0">You can check that the height of the boxes adjust when longer text like this one is used in one of them.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                  <div class="icon"><i class="fa fa-thumbs-up"></i></div>
                  <h3><a href="#">100% satisfaction guaranteed</a></h3>
                  <p class="mb-0">Free returns on everything for 3 months.</p>
                </div>
              </div>
            </div>
            <!-- /.row-->
          </div>
          <!-- /.container-->
        </div>
        <!-- /#advantages-->
        <!-- *** ADVANTAGES END ***-->
        <!--
        *** HOT PRODUCT SLIDESHOW ***
        _________________________________________________________
        -->
        <div id="hot">
          <div class="box py-4">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <h2 class="mb-0">Products</h2>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="product-slider owl-carousel owl-theme">

            @foreach ($products as $product)
            <div class="product item">
                <div class="flip-container">
                  <div class="flipper">
                    <div class="front"><a href="detail.html"><img src="{{asset('images/products/'.$product->photopath)}}" alt="" class="img-fluid"></a></div>
                    <div class="back"><a href="detail.html"><img src="{{asset('images/products/'.$product->photopath)}}" alt="" class="img-fluid"></a></div>
                  </div>
                </div><a href="detail.html" class="invisible"><img src="{{asset('images/products/'.$product->photopath)}}" alt="" class="img-fluid"></a>
                <div class="text">
                  <h3><a href="detail.html">{{$product->name}}</a></h3>
                  <p class="price"> 
                    <del></del>Rs. {{$product->price}}
                  </p>
                  <p class="buttons"><a href="detail.html" class="btn btn-outline-secondary">View detail</a><a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a></p>
                </div>
                <!-- /.text-->
              </div>
            @endforeach
              
              
              <!-- /.product-slider-->
            </div>
            <!-- /.container-->
          </div>
          <!-- /#hot-->
          <!-- *** HOT END ***-->
        </div>
        
        
        
              
            </div>
            <!-- /#blog-homepage-->
          </div>
        </div>
        <!-- /.container-->
        <!-- *** BLOG HOMEPAGE END ***-->
      </div>
    </div>
    <!--
    *** FOOTER ***
    _________________________________________________________
    -->
    <div class="p-4 m-3">
        <div id="contact" class="box p-4">
          <center>
            <h1>Contact Us</h1><br>
          <p class="lead">Are you curious about something? Do you have some kind of problem with our products?</p><br>
          <p>Please feel free to contact us, our customer service center is working for you 24/7.</p>
          </center>
          <hr>
          <div class="row">
            <div class="col-md-4">
              <h3><i class="fa fa-map-marker"></i>Address</h3>
              <p>13/25 New Avenue<br>New Heaven<br>45Y 73J<br>England<br><strong>Great Britain</strong></p>
            </div>
            <!-- /.col-sm-4-->
            <div class="col-md-4">
              <h3><i class="fa fa-phone"></i> Call center</h3>
              <p class="text-muted">This number is toll free if calling from Great Britain otherwise we advise you to use the electronic form of communication.</p>
              <p><strong>+33 555 444 333</strong></p>
            </div>
            <!-- /.col-sm-4-->
            <div class="col-md-4">
              <h3><i class="fa fa-envelope"></i> Electronic support</h3>
              <p class="text-muted">Please feel free to write an email to us or to use our electronic ticketing system.</p>
              <ul>
                <li><strong><a href="mailto:">info@fakeemail.com</a></strong></li>
                <li><strong><a href="#">Ticketio</a></strong> - our ticketing support platform</li>
              </ul>
            </div>
            <!-- /.col-sm-4-->
          </div>
          <!-- /.row-->
          <hr>
          <div id="map"></div>
          <hr>
          <h2 class="text-center">Contact form</h2>
          <form>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="firstname">Firstname</label>
                  <input id="firstname" type="text" class="form-control">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="lastname">Lastname</label>
                  <input id="lastname" type="text" class="form-control">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="email">Email</label>
                  <input id="email" type="text" class="form-control">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="subject">Subject</label>
                  <input id="subject" type="text" class="form-control">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea id="message" class="form-control"></textarea>
                </div>
              </div>
              <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send message</button>
              </div>
            </div>
            <!-- /.row-->
          </form>
        </div>
      </div>
    @yield('content')

    @endsection
   
    
    
   
    