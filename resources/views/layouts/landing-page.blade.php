<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- inputs meta-tags from includes folder -->
        @include('includes.metaTags')
        <style>
            nav{
                display: flex;
                justify-content: space-between
            }
            .navbar-toggler{
                background-color:green;
            }
            #app-layout .side-menu{
                padding: 30px 50px 0;
                position:fixed;
                top:0;
                transition: all 0.3s ease-in-out;
                z-index: 1;
            }
            #app-layout .side-menu .logo{
                margin-bottom:40px;
            }
            #app-layout .side-menu .menu{
                margin-bottom:40px;
            }
            #app-layout .side-menu .social-icons{
                margin-bottom:10px;
            }
            #app-layout .side-menu .location{
                position: static;
            }
        </style>
    </head>
    <body>
        <nav>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <p>Ballie's Burger</p>
        </nav>
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

<script>
    sideMenuBtn = $('.navbar-toggler')
    sideMenuBtn.on('click', function() {
        $('.side-menu').css('transform', `translate3d(0%, 0, 0)`)
        // console.log("click");
    })
</script>