@extends('front.layouts.master')
@section('title')
   SINGLE BLOG
@endsection
@section('section')
@include('front.layouts.header')
<div class="container-fluid py-3">
    <div class="container">
        <div class="bg-light py-2 px-4 mb-3">
            <h3 class="m-0">Contact Us For Any Queries</h3>
        </div>
        <div class="row">
            
            <div class="col">
                <div class="contact-form bg-light mb-3" style="padding: 30px;">
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="control-group">
                                    <input type="text" class="form-control p-4" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="control-group">
                                    <input type="email" class="form-control p-4" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control p-4" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" rows="4" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary font-weight-semi-bold px-4" style="height: 50px;" type="submit" id="sendMessageButton">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

<!-- Footer Start -->
<div class="container-fluid bg-light pt-5 px-sm-3 px-md-5">
    <div class="row">
        <div class="col-lg-3 col-md-6 mb-5">
            <a href="index.html" class="navbar-brand">
                <h1 class="mb-2 mt-n2 display-5 text-uppercase"><span class="text-primary">News</span>Room</h1>
            </a>
            <p>Volup amet magna clita tempor. Tempor sea eos vero ipsum. Lorem lorem sit sed elitr sed kasd et</p>
            <div class="d-flex justify-content-start mt-4">
                <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-instagram"></i></a>
                <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="font-weight-bold mb-4">Categories</h4>
            <div class="d-flex flex-wrap m-n1">
                <a href="" class="btn btn-sm btn-outline-secondary m-1">Politics</a>
                <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                <a href="" class="btn btn-sm btn-outline-secondary m-1">Corporate</a>
                <a href="" class="btn btn-sm btn-outline-secondary m-1">Sports</a>
                <a href="" class="btn btn-sm btn-outline-secondary m-1">Health</a>
                <a href="" class="btn btn-sm btn-outline-secondary m-1">Education</a>
                <a href="" class="btn btn-sm btn-outline-secondary m-1">Science</a>
                <a href="" class="btn btn-sm btn-outline-secondary m-1">Technology</a>
                <a href="" class="btn btn-sm btn-outline-secondary m-1">Foods</a>
                <a href="" class="btn btn-sm btn-outline-secondary m-1">Entertainment</a>
                <a href="" class="btn btn-sm btn-outline-secondary m-1">Travel</a>
                <a href="" class="btn btn-sm btn-outline-secondary m-1">Lifestyle</a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="font-weight-bold mb-4">Tags</h4>
            <div class="d-flex flex-wrap m-n1">
                <a href="" class="btn btn-sm btn-outline-secondary m-1">Politics</a>
                <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                <a href="" class="btn btn-sm btn-outline-secondary m-1">Corporate</a>
                <a href="" class="btn btn-sm btn-outline-secondary m-1">Sports</a>
                <a href="" class="btn btn-sm btn-outline-secondary m-1">Health</a>
                <a href="" class="btn btn-sm btn-outline-secondary m-1">Education</a>
                <a href="" class="btn btn-sm btn-outline-secondary m-1">Science</a>
                <a href="" class="btn btn-sm btn-outline-secondary m-1">Technology</a>
                <a href="" class="btn btn-sm btn-outline-secondary m-1">Foods</a>
                <a href="" class="btn btn-sm btn-outline-secondary m-1">Entertainment</a>
                <a href="" class="btn btn-sm btn-outline-secondary m-1">Travel</a>
                <a href="" class="btn btn-sm btn-outline-secondary m-1">Lifestyle</a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="font-weight-bold mb-4">Quick Links</h4>
            <div class="d-flex flex-column justify-content-start">
                <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right text-dark mr-2"></i>About</a>
                <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right text-dark mr-2"></i>Advertise</a>
                <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right text-dark mr-2"></i>Privacy & policy</a>
                <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right text-dark mr-2"></i>Terms & conditions</a>
                <a class="text-secondary" href="#"><i class="fa fa-angle-right text-dark mr-2"></i>Contact</a>
            </div>
        </div>
    </div>
</div>

@endsection