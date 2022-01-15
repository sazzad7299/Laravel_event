@extends('layouts.front_master')
@include('layouts.slider')
@section('content')

    <!-- Coundown Section Start -->
    <section class="countdown-timer section-padding">
        <div class="container">
          <div class="row text-center">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="heading-count">
                <h2 class="wow fadeInDown" data-wow-delay="0.2s">Event Will Start In</h2>
              </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="row time-countdown justify-content-center wow fadeInUp" data-wow-delay="0.2s">
                <div id="clock" class="time-count"></div>
              </div>
              <a href="pricing.html" class="btn btn-common wow fadeInUp" data-wow-delay="0.3s">Add to My Calender</a>
            </div>
          </div>
        </div>
      </section>
      <!-- Coundown Section End -->
  
 

  
      <!-- Counter Area Start-->
      <section class="counter-section section-padding">
        <div class="container">
          <div class="row">
            <!-- Counter Item -->
            <div class="col-md-6 col-lg-3 col-xs-12 work-counter-widget text-center">
              <div class="counter wow fadeInRight" data-wow-delay="0.3s">
                <div class="icon"><i class="lni-map"></i></div>
                <p>Wst. Conference Center</p>
                <span>San Francisco, CA</span>
              </div>
            </div>
            <!-- Counter Item -->
            <div class="col-md-6 col-lg-3 col-xs-12 work-counter-widget text-center">
              <div class="counter wow fadeInRight" data-wow-delay="0.6s">
                <div class="icon"><i class="lni-timer"></i></div>
                <p>February 14 - 19, 2018</p>
                <span>09:00 AM – 05:00 PM</span>
              </div>
            </div>
            <!-- Counter Item -->
            <div class="col-md-6 col-lg-3 col-xs-12 work-counter-widget text-center">
              <div class="counter wow fadeInRight" data-wow-delay="0.9s">
                <div class="icon"><i class="lni-users"></i></div>
                <p>343 Available Seats</p>       
                <span>Hurryup! few tickets are left</span>
              </div>
            </div>
            <!-- Counter Item -->
            <div class="col-md-6 col-lg-3 col-xs-12 work-counter-widget text-center">
              <div class="counter wow fadeInRight" data-wow-delay="1.2s">
                <div class="icon"><i class="lni-coffee-cup"></i></div>
                <p>Free Lunch & Snacks</p>
                <span>Don’t miss it</span>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Counter Area End-->



      <!-- Event Slides Section Start -->
      <section id="event-slides" class="section-padding">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="section-title-header text-center">
                <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Event Guideline</h1>
                <p class="wow fadeInDown" data-wow-delay="0.2s">Global Grand Event on Digital Design</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xs-12 wow fadeInRight" data-wow-delay="0.3s">
              <div class="video">
                <img class="img-fluid" src="assets/img/about/about.jpg" alt="">
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xs-12 wow fadeInLeft" data-wow-delay="0.3s">
              <p class="intro-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.
              </p>
              <h2 class="intro-title">Check List</h2>
              <ul class="list-specification">
                <li><i class="lni-check-mark-circle"></i> Lorem Ipsum is simply dummy</li>
                <li><i class="lni-check-mark-circle"></i> Ipsum passages, and more recently</li>
                <li><i class="lni-check-mark-circle"></i> PageMaker including versions</li>
                <li><i class="lni-check-mark-circle"></i> Lorem Ipsum is simply dummy</li> 
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- Event Slides Section End -->

            <!-- Ask Question Section Start -->
            <section id="faq" class="section-padding">
              <div class="container">
                <div class="row">
                  <div class="col-12">
                    <div class="section-title-header text-center">
                      <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Ask Question?</h1>
                      <p class="wow fadeInDown" data-wow-delay="0.2s">Global Grand Event on Digital Design</p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                    <div class="accordion">
                      <div class="card">
                        <div class="card-header" id="headingOne">
                          <div class="header-title" data-toggle="collapse" data-target="#questionOne" aria-expanded="true" aria-controls="collapseOne">
                            <i class="lni-pencil"></i> How to make a new event?
                          </div>
                        </div>
                        <div id="questionOne" class="collapse" aria-labelledby="headingOne" data-parent="#question">
                          <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingTwo">
                            <div class="header-title" data-toggle="collapse" data-target="#questionTwo" aria-expanded="false" aria-controls="questionTwo">
                              <i class="lni-pencil"></i>  Which payment methods do you accept? 
                            </div>
                        </div>
                        <div id="questionTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#question">
                          <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingThree">
                          <div class="header-title" data-toggle="collapse" data-target="#questionThree" aria-expanded="false" aria-controls="questionThree">
                            <i class="lni-pencil"></i>  Which document can i bring to meeting?   
                          </div>
                        </div>
                        <div id="questionThree" class="collapse" aria-labelledby="headingThree" data-parent="#question">
                          <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingThree">
                          <div class="header-title" data-toggle="collapse" data-target="#questionFour" aria-expanded="false" aria-controls="questionFour">
                           <i class="lni-pencil"></i> Who can join at the live event venue?
                          </div>
                        </div>
                        <div id="questionFour" class="collapse" aria-labelledby="headingThree" data-parent="#question">
                          <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                    <div class="accordion">
                      <div class="card">
                        <div class="card-header" id="headingOne2">
                          <div class="header-title" data-toggle="collapse" data-target="#questionOne2" aria-expanded="true" aria-controls="collapseOne">
                            <i class="lni-pencil"></i> How to make a new event?
                          </div>
                        </div>
                        <div id="questionOne2" class="collapse" aria-labelledby="headingOne" data-parent="#question">
                          <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingTwo2">
                            <div class="header-title" data-toggle="collapse" data-target="#questionTwo2" aria-expanded="false" aria-controls="questionTwo">
                              <i class="lni-pencil"></i>  Which payment methods do you accept? 
                            </div>
                        </div>
                        <div id="questionTwo2" class="collapse" aria-labelledby="headingTwo" data-parent="#question">
                          <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingThree">
                          <div class="header-title" data-toggle="collapse" data-target="#questionFive" aria-expanded="false" aria-controls="questionFive">
                            <i class="lni-pencil"></i>How to set price? 
                          </div>
                        </div>
                        <div id="questionFive" class="collapse" aria-labelledby="headingThree" data-parent="#question">
                          <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingThree">
                          <div class="header-title" data-toggle="collapse" data-target="#questionSix" aria-expanded="false" aria-controls="questionSix">
                            <i class="lni-pencil"></i>  What our price list? 
                          </div>
                        </div>
                        <div id="questionSix" class="collapse" aria-labelledby="headingThree" data-parent="#question">
                          <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- Ask Question Section End -->


        <!-- Ticket Pricing Area Start -->
        <section id="pricing" class="section-padding">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="section-title-header text-center">
                  <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Our Pricing</h1>
                  <p class="wow fadeInDown" data-wow-delay="0.2s">Global Grand Event on Digital Design</p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 col-sm-6 col-xa-12 mb-3">
                <div class="price-block-wrapper wow fadeInLeft" data-wow-delay="0.2s">
                  <div class="icon">
                    <i class="lni-write"></i>
                  </div>
                  <div class="colmun-title">
                    <h5>Basic Pass</h5>
                  </div>
                  <div class="price">
                    <h2>$29</h2>
                    <p>452 Tickets Available</p>
                  </div>
                  <div class="pricing-list">
                    <ul>
                      <li><i class="lni-check-mark-circle"></i><span class="text">Entrance</span></li>
                      <li><i class="lni-check-mark-circle"></i><span class="text">Coffee Break</span></li>
                      <li><i class="lni-check-mark-circle"></i><span class="text">Lunch on all days</span></li>
                      <li><i class="lni-close"></i><span class="text">Access to all areas</span></li>
                      <li><i class="lni-close"></i><span class="text">Certificate</span></li>
                      <li><i class="lni-check-mark-circle"></i><span class="text">Workshop</span></li>
                    </ul>
                  </div>
                  <a href="#" class="btn btn-common">Buy Ticket</a>
                </div>
              </div>
              <div class="col-lg-4 col-sm-6 col-xa-12 mb-3">
                <div class="price-block-wrapper wow fadeInUp" data-wow-delay="0.3s">
                  <div class="icon">
                    <i class="lni-layers"></i>
                  </div>
                  <div class="colmun-title">
                    <h5>Standard Pass</h5>
                  </div>
                  <div class="price">
                    <h2>$40</h2>
                    <p>452 Tickets Available</p>
                  </div>
                  <div class="pricing-list">
                    <ul>
                      <li><i class="lni-check-mark-circle"></i><span class="text">Entrance</span></li>
                      <li><i class="lni-check-mark-circle"></i><span class="text">Coffee Break</span></li>
                      <li><i class="lni-check-mark-circle"></i><span class="text">Lunch on all days</span></li>
                      <li><i class="lni-close"></i><span class="text">Access to all areas</span></li>
                      <li><i class="lni-check-mark-circle"></i><span class="text">Certificate</span></li>
                      <li><i class="lni-close"></i><span class="text">Workshop</span></li>
                    </ul>
                  </div>
                  <a href="#" class="btn btn-common">Buy Ticket</a>
                </div>
              </div>
              <div class="col-lg-4 col-sm-6 col-xa-12 mb-3">
                <div class="price-block-wrapper wow fadeInRight" data-wow-delay="0.4s">
                  <div class="icon">
                    <i class="lni-leaf"></i>
                  </div>
                  <div class="colmun-title">
                    <h5>Premium Pass</h5>
                  </div>
                  <div class="price">
                    <h2>$68</h2>
                    <p>452 Tickets Available</p>
                  </div>
                  <div class="pricing-list">
                    <ul>
                      <li><i class="lni-check-mark-circle"></i><span class="text">Entrance</span></li>
                      <li><i class="lni-check-mark-circle"></i><span class="text">Coffee Break</span></li>
                      <li><i class="lni-close"></i><span class="text">Lunch on all days</span></li>
                      <li><i class="lni-check-mark-circle"></i><span class="text">Access to all areas</span></li>
                      <li><i class="lni-check-mark-circle"></i><span class="text">Certificate</span></li>
                      <li><i class="lni-close"></i><span class="text">Workshop</span></li>
                    </ul>
                  </div>
                  <a href="#" class="btn btn-common">Buy Ticket</a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Ticket Pricing Area End -->
      <!-- Blog Section Start -->
      <section id="blog" class="section-padding">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="section-title-header text-center">
                <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Our Latest News & Articles</h1>
                <p class="wow fadeInDown" data-wow-delay="0.2s">Global Grand Event on Digital Design</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12">
              <div class="blog-item">
                <div class="blog-image">
                  <a href="#">
                    <img class="img-fluid" src="assets/img/blog/img-1.jpg" alt="">
                  </a>
                </div>
                <div class="descr">
                  <div class="tag">Design</div>
                  <h3 class="title">
                    <a href="single-blog.html">
                      The 9 Design Trends You Need to Know
                    </a>
                  </h3>
                  <div class="meta-tags">
                    <span class="date">Jan 20, 2018</span>
                    <span class="comments">| <a href="#"> by Cindy Jefferson</a></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12">
              <div class="blog-item">
                <div class="blog-image">
                  <a href="#">
                    <img class="img-fluid" src="assets/img/blog/img-2.jpg" alt="">
                  </a>
                </div>
                <div class="descr">
                  <div class="tag">Design</div>
                  <h3 class="title">
                    <a href="single-blog.html">
                      The 9 Design Trends You Need to Know
                    </a>
                  </h3>
                  <div class="meta-tags">
                    <span class="date">Jan 20, 2018 </span>
                    <span class="comments">| <a href="#"> by Cindy Jefferson</a></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12">
              <div class="blog-item">
                <div class="blog-image">
                  <a href="#">
                    <img class="img-fluid" src="assets/img/blog/img-3.jpg" alt="">
                  </a>
                </div>
                <div class="descr">
                  <div class="tag">Design</div>
                  <h3 class="title">
                    <a href="single-blog.html">
                      The 9 Design Trends You Need to Know
                    </a>
                  </h3>
                  <div class="meta-tags">
                    <span class="date">Jan 20, 2018</span> 
                    <span class="comments">| <a href="#"> by Cindy Jefferson</a></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 text-center">
              <a href="#" class="btn btn-common">Read More News</a>
            </div>
          </div>
        </div>
      </section>
      <!-- Blog Section End -->
      <!-- Sponsors Section Start -->
      <section id="sponsors" class="section-padding">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="section-title-header text-center">
                <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Sponsores</h1>
                <p class="wow fadeInDown" data-wow-delay="0.2s">Global Grand Event on Digital Design</p>
              </div>
            </div>
          </div>
          <div class="row mb-30 text-center wow fadeInDown" data-wow-delay="0.3s">
            <div class="col-md-3 col-sm-3 col-xs-12">
              <div class="spnsors-logo">
                <a href="#"><img class="img-fluid" src="assets/img/sponsors/logo-01.png" alt=""></a>
              </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
              <div class="spnsors-logo">
                <a href="#"><img class="img-fluid" src="assets/img/sponsors/logo-02.png" alt=""></a>
              </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
              <div class="spnsors-logo">
                <a href="#"><img class="img-fluid" src="assets/img/sponsors/logo-03.png" alt=""></a>
              </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
              <div class="spnsors-logo">
                <a href="#"><img class="img-fluid" src="assets/img/sponsors/logo-04.png" alt=""></a>
              </div>
            </div>
            <div class="col-12 text-center">
              <a href="#" class="btn btn-common">become a sponsor</a>
            </div>
          </div>
        </div>
      </section>
      <!-- Sponsors Section End -->
      <!-- Subscribe Area Start -->
      <div id="subscribe" class="section-padding">
        <div class="container">
          <div class="row justify-content-md-center">
            <div class="col-md-10 col-lg-7">
              <div class="subscribe-inner wow fadeInDown" data-wow-delay="0.3s">
                <h2 class="subscribe-title">Sign Up For Our Newsletter</h2>
                <form class="text-center form-inline">
                  <input class="mb-20 form-control" name="email" placeholder="Enter Your Email Here">
                  <button type="submit" class="btn btn-common sub-btn" data-style="zoom-in" data-spinner-size="30" name="submit" id="submit">
                  <span class="ladda-label"><i class="lni-check-box"></i> Submit</span>
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Subscribe Area End -->
  
      <!-- Map Section Start -->
      <section id="google-map-area">
        <div class="container-fluid">
          <div class="row">
          </div>
        </div>
      </section>
      <!-- Map Section End -->

@endsection