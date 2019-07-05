
<!-- Newsletter -->
<section class="newsletter-cover">
    <!-- Overlay -->
    <div class="nl-bg-ol"></div>
    <div class="container">
        <div class="newsletter pt-80 pb-80">
            <!-- Section title -->
            <div class="section-title text-center">
                <h2>Subscribe Our Newsletter</h2>
            </div>
            <!-- End of Section title -->
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <!-- Newsletter Form -->
                    <form  action="{{route('add.subscriber')}}" method="post" required>
                        @csrf
                        <div class="input-group">
                            <input type="email" name="email" class="form-control" placeholder="Enter Your Email">
                            <div class="input-group-append">
                                <button class="btn btn-default">Submit</button>
                            </div>
                        </div>
                         @error('email')
                            <div class="pl-1 text-danger">{{ $message }}</div>
                        @enderror
                        <p class="checkbox-cover d-flex justify-content-center">
                            <label> I've read and accept the <a href="#"> Privacy Policy </a>
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </p>
                    </form>
                    <!-- End of Newsletter Form -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Newsletter -->

<!-- Footer -->
<footer class="footer-container d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center footer">
            <div class="col-md-4 text-center text-md-left order-md-1 order-2">
                <div class="footer-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-google"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center order-md-2 order-1">
                <a href="#"><img src="{{ asset('theme-front/images/logo.png') }}" alt="" class="img-fluid"></a>
            </div>
            <div class="col-md-4 order-md-3 order-3">
                <div class="footer-cradit text-center text-md-right">
                    <p>© 2019 <a href="#">Themelooks.</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End of Footer -->