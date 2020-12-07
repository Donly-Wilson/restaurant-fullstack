<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- inputs meta-tags from includes folder -->
        @include('includes.metaTags')
        <style>
            nav{
                display: flex;
                justify-content: space-between;
                align-items: center;
                position:fixed;
                z-index: 5;
                color:white;
                width:100%;
                background: rgba(0, 0, 0, 0.5);
                transition: all 0.4s ease-in-out;
            }
            .animated{
                transform: translate3d(0, -100%, 0);
            }
            .sticky{
                transform: translate3d(0, 0, 0);
                /* z-index: 6; */
            }
            .navbar-toggler{
                background-color:green;
                z-index: 10;
            }
            #app-layout .side-menu{
                padding: 30px 50px 0;
                position:fixed;
                top:0;
                transition: all 0.3s ease-in-out;
                z-index: 6;
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

            #app-layout .open-menu{
                transform: translate3d(0%, 0, 0);
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
    // Toggle Hamburger Menu
    hamburgerBtn = $('.navbar-toggler')
    hamburgerBtn.click(function() {
        $('.side-menu').toggleClass('open-menu');
});
    //Navbar
$(function(){
    var scroll = $(document).scrollTop();
    var navHeight = $('nav').outerHeight();
    console.log(navHeight);
    $(window).scroll(function () {
        var scrolled = $(document).scrollTop();
        // console.log(scrolled);
        if(scrolled > navHeight){
            $('nav').addClass('animated');
        }else{
            $('nav').removeClass('animated');
        }

        if (scrolled > scroll) {
            $('nav').removeClass('sticky');
        }else{
            $('nav').addClass('sticky');
        }

        scroll = $(document).scrollTop();
    });
});
</script>