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
                background: rgba(0, 0, 0, 0.5);
                color:white;
                position:fixed;
                padding:5px 4%;
                transition: all 0.4s ease-in-out;
                width:100%;
                z-index: 5;
            }
            .animated{
                transform: translate3d(0, -100%, 0);
            }
            .sticky{
                transform: translate3d(0, 0, 0);
                /* z-index: 6; */
            }

            /* Hamburger-Menu */
            .navbar-toggler:focus{
                outline:none;
            }
            .hamburger-icon{
                position: relative; 
                width: 34px;
                height: 24px; 
                transition: transform 0.4s;
            }
            .hamburger-icon span{
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translateX(-50%) translateY(-50%); 
                display: block;
                width: 22px;
                height: 2px;
                background-color: #FFF;
                transition: background 0.3s;
            }
            .hamburger-icon span::before, .hamburger-icon span::after {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                transform: translateY(-6px);
                display: block;
                width: 22px;
                height: 2px;
                background-color: #FFF;
                transition: transform 0.5s;
            }
            .hamburger-icon span::after {
                transform: translateY(6px); 
            }
            .hamburger-icon.is-opened span { background: transparent; }
            .hamburger-icon.is-opened span::before { transform: translateY(0) rotate(45deg); }
            .hamburger-icon.is-opened span::after { transform: translateY(0) rotate(-45deg); }
            /* .hamburger-icon.is-opened { transform: rotate(180deg); } */

            /* mobile side-menu */
            #app-layout .side-menu{
                padding: 30px 50px 0;
                position:fixed;
                top:0;
                transition: transform 0.3s ease-in-out;
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
            .outerLayer{
                background: rgba(0, 0, 0, 0.5);
                cursor: pointer;
                bottom: 0;
                left: 300px;
                height: calc(100vh - 6.8%);
                width: calc(100vw - 300px);
                position: absolute;
                opacity: 0;
                transition: opacity 0.4s ease-in-out;
            }
            .open-menu .outerLayer{
                opacity: 1;
            }
        </style>
    </head>
    <body>
        <nav>
            <p>Ballie's Burger</p>
            <button class="navbar-toggler" type="button">    
                <div class="hamburger-icon">
                    <span></span>
                </div>
            </button>
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
    // Toggle on Hamburger Menu Click
    hamburgerBtn = $('.navbar-toggler')
    menuOuterLayer = $('.outerLayer')
    controlSideMenu = [hamburgerBtn,menuOuterLayer]
    controlSideMenu.forEach(openCloseMenu => {
        openCloseMenu.click(function() {
            $('.side-menu').toggleClass('open-menu');
            $('.hamburger-icon').toggleClass('is-opened');
        }); 
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