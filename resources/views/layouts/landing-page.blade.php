<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- inputs meta-tags from includes folder -->
        @include('includes.metaTags')
        <style>
            footer{
                
                margin-top: -13px;
                color:white;
            }
            .footer-image{
                display: flex;
            }
            .footer-image img{
                align-items: flex-end;
                filter: brightness(0);
                width: 100%;
            }
            .footer-contents{
                /* background:#323231; */
                background:black;
                padding: 40px 40px 0;
                margin-top: -1px
            }
            .footer-reservationBtn{
                padding:10px;
                border:1px solid #f59c2e;
                margin-bottom: 5px;
                color: white;
                display: inline-block;
                background: transparent;
            }
            .footer-logo{
                font-size: 3rem;
                font-weight: 700;
                margin-bottom: 3rem;
            }
            .footer-logo img{
                width:70px;
            }
            .footer-logo h2{
                display: inline;
                vertical-align: text-top;
            }
            .footer-info{
                font-size: 1.1rem;
                padding:20px 0;
            }
            .footer-info p{
                padding-top:10px;
            }
            .footer-info li{
                padding: 10px 0;
            }
            .footer-info a{
                color:white;
            }
            .footer-info h3{
                color:#f59c2e;
                font-size: 1.3rem;
            }
            .footer-info div:nth-child(2){
                text-align: center;
            }
            .footer-info div:nth-child(3){
                text-align: right;
            }
            .footer-info div:nth-child(3) .social-icons{
                margin-top: 15px;
                font-size: 1.5rem;
            }
            .footer-info div:nth-child(3) .social-icons a{
                margin-left: 15px;
            }
            .footer-info div:nth-child(3) .social-icons a .whatsapp{
                font-size: 1.7rem;
            }
            .footer-extras{
                /* background:#323231; */
                background:black;
                padding: 40px 40px 10px;
                /* text-align: center; */
            }
            .footer-extras_content{
                display: flex;
                justify-content: space-between;
            }
            .footer-extras_content .links{
                display: flex;
                padding: 9px;
            }
            .footer-extras_content .links a{
                color:white;
                text-decoration: none;
                margin-left: 10px;
            }
            .footer-extras hr{
                border-top: 1px solid white;
            }
            .footer-extras p{
                padding: 10px;
            }
        </style>
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
                <div class="footer-logo col-md-12">
                        <img src="./img/restaurant-logo.png" alt="">
                    <h2>Bailie's Burger</h2>
                </div>
                <div class="footer-info col-md-12 row">
                    <div class="col-md-4">
                        <h3>Where we at</h3>
                        <p>Rodney bay</p>
                        <p>Mobile: 754 716 284</p>
                        <p>Telephone: 254 906 364</p>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-reservation">
                            <a class="footer-reservationBtn" href="">ONLINE RESERVATION</a>
                            <p>Open Daily</p>
                            <p>1pm. - 9pm.</p>
                        </div>
                    </div>
                    <div class="map col-md-4">
                        <h3>Follow Us</h3>
                        <p>E-mail: bailie@outlook.com</p>
                        <div class="social-icons">
                            <a class="whatsapp" href="{{$settings["social"]->facebook_url}}" target="new"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
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
                        <p>Copyright © 2020 Bailie's Burger. All rights reserved.</p>
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