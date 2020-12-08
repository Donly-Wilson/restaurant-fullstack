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
        
    </body>
</html>
<script src="/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="/js/customJquery.js"></script>