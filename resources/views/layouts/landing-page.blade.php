<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- inputs meta-tags from includes folder -->
        @include('includes.metaTags')
    </head>
    <body>
    <!-- inputs navbar from includes folder as the header navbar-->
    @include('includes.navbar')
        
        <section id="app-layout">
            <!-- inputs welcome-menu from includes folder as side-menu-->
            @include('includes.side-menu')
            
            <div class="welcome-jumbo">
              <div class="status">NEW</div>
              <h1>Ballie's Burger</h1>
              <img class="burger-fries" src="./img/hamburger-and-fries.png" alt="">
            </div>
        </section>
        @yield('content')
        <footer>
            <div class="footer-image">
                <img src="/img/footer.svg" alt="">
            </div>
            <div class="footer-contents row no-gutters">
                <a class="footer-logo col-md-12" href="/">
                    <img src="./img/restaurant-logo.png" alt="">
                    <h2>Bailie's Burger</h2>
                </a>
                <div class="footer-info col-md-12 row">
                    <div class="col-md-4">
                        <h3>Where We At</h3>
                        <p class="address">{{$settings["general"]->address_1}} {{$settings["general"]->address_2}}<br>
                            {{$settings["general"]->city}}, {{$settings["general"]->state}} {{$settings["general"]->zipcode}}</p>
                        <p>Mobile: 754 716 284</p>
                        <p>Telephone: 254 906 364</p>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <a class="footer-reservationBtn" href="/reservations">ONLINE RESERVATION</a>
                            <p>Open Daily</p>
                            <p>1pm. - 9pm.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h3>Follow Us</h3>
                        <a class="email" href="mailto:bailie@outlook.com">E-mail: bailie@outlook.com</a>
                        <div class="social-icons">
                            <a class="whatsapp" href="https://web.whatsapp.com/" target="new"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                            <a href="{{$settings["social"]->facebook_url}}" target="new"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="{{$settings["social"]->twitter_url}}" target="new"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="{{$settings["social"]->instagram_url}}" target="new"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </div>
                        {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3870.0990527598574!2d-60.9581723851427!3d14.071327793599698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c4068278000428b%3A0xbe25441b9a1fea41!2sTriangle%20PUB%2C%20St%20Lucia!5e0!3m2!1sen!2s!4v1606865834386!5m2!1sen!2s" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> --}}
                    </div>
            </div>
            <div class="footer-extras col-md-12">
                <hr>
                <div class="footer-extras_content">
                    <div>
                        <p>Copyright &copy; <script>document.write(new Date().getFullYear())</script> Bailie's Burger. All rights reserved.</p>
                        {{-- <p>COVID-19 Opening Approval</p> --}}
                    </div>
                    <ul class="links">
                        <li><a href="/menu">Food</a></li>
                        <li><a href="/reservations">Reservations</a></li>
                        <li><a href="/offers">Offers</a></li>
                        <li><a href="/contact">Contact</a></li>
                        <li><a href="/about">About Us</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </body>
</html>
<script src="/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="/js/customJquery.js"></script>