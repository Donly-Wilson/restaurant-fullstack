<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- inputs meta-tags from includes folder -->
        @include('includes.metaTags')
        <style>
            footer{
                margin-top: -13px;
            }
            .footer-image{
                display: flex;
            }
            .footer-image img{
                width: 100%;
                align-items: flex-end;
            }
            .footer-content{
                background:#323231;
                height: 300px;
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
            <div class="footer-content">
                <p>Copyright © 2020 Big Chef Steakhouse. All rights reserved.</p>
                <p>COVID-19 Opening Approval</p>
            </div>
        </footer>
    </body>
</html>
<script src="/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="/js/customJquery.js"></script>