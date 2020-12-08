<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- inputs meta-tags from includes folder -->
        @include('includes.metaTags')
    </head>
    <body>
        <section id="app-layout">
            <!-- inputs navbar from includes folder as the header navbar-->
            @include('includes.navbar')
            <!-- inputs welcome-menu from includes folder as side-menu-->
            @include('includes.side-menu')
            <!-- display the content of a given section that is called-->
            <section id="content-section">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                @yield('content')
            </section>
        </section>
    </body>
</html>
<script src="/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="/js/customJquery.js"></script>