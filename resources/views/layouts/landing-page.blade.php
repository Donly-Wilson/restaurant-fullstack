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
                width: 100%;
                align-items: flex-end;
            }
            .footer-contents{
                background:#323231;
                /* height: 300px; */
                margin-top: -1px
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
            <div class="footer-contents row">
                <div class="footer-info col-md-6">
                    <p>Copyright © 2020 Big Chef Steakhouse. All rights reserved.</p>
                    <p>COVID-19 Opening Approval</p>
                </div>
                <div class="map col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3870.0990527598574!2d-60.9581723851427!3d14.071327793599698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c4068278000428b%3A0xbe25441b9a1fea41!2sTriangle%20PUB%2C%20St%20Lucia!5e0!3m2!1sen!2s!4v1606865834386!5m2!1sen!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
            <div class="row">
                <p>Copyright © 2020 Big Chef Steakhouse. All rights reserved.</p>
                    <p>COVID-19 Opening Approval</p>
            </div>
        </footer>
    </body>
</html>
<script src="/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="/js/customJquery.js"></script>