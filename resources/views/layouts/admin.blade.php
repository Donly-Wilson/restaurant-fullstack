<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/libs/css/style.css">
    <link rel="stylesheet" href="/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="/assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="/assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="/assets/vendor/fonts/flag-icon-css/flag-icon.min.css">

    <title>Bailies's Burger - Admin</title>
    {{-- <title>{{$settings["general"]->site_title}} - St.Lucia Selling Franchise</title> --}}
    <style>
        #quick-notes {
            background:white;
            height: 100%; 
            width: 0; 
            position: fixed; 
            z-index: 1; 
            top: 0; 
            right: 0;
            overflow-x: hidden; 
            padding: 0; 
            transition: all 0.5s ease-in-out; 
            -webkit-box-shadow: -48px 3px 40px 1px rgba(0,0,0,0.19);
            -moz-box-shadow: -48px 3px 40px 1px rgba(0,0,0,0.19);
            box-shadow: -48px 3px 40px 1px rgba(0,0,0,0.09);
            border-left: 1px solid #e4e5e9;
            border-radius: 9px 0 0 9px;
            /* opacity: 0; */
            }
            #quick-notes .card-fluid{
                height:100vh;
                position: relative; /* Remove this and footer touches both ends of quicknotes */
            }
            .quick-notes_header{
                position: sticky;
                z-index: 1;
                background: white;
                width: 100%;
                height:117px;
                top: 0;
            }
            .quick-notes_title{
                display: flex;
                justify-content: space-between;
                padding: 12px 20px;
            }
            .quickNotClose{
                background: #f7f8fc;
                color: #8f91a0;
                cursor: pointer;
                transition: 0.2s all ease-in-out;
                line-height: 1.1;
                padding: 4px 2px;
                text-align: center;
                font-size: 12px;
                display: inline-block;
                border-radius: 100%;
                width:20px;
                height:20px;
            }
            .quickNotClose:hover{
                color: #ef172c;
                background-color: #fbd3d5;
            }
            .list-group-item{
                display: flex !important;
            }
            .list-group-item:nth-child(1){
                border-top: 0;
            }
            .connection .openQuickNotes{
                width:350px !important;
                padding: 0 10px !important;
                /* opacity: 1 !important; */
            }
            .quick-notes_options{
                display: flex;
                background: #f7f8fc;
                padding: 0;
                text-align: center;
                border-radius: 9px;
                justify-content: center;
                width: fit-content;
                border: 1px solid #e7ebee;
                margin: 0 auto 20px;
            }
            .quick-notes_options li{
                /* text-decoration: none; */
                border-radius: 9px;
                padding: 4px 15px;
                list-style-type:none;
            }
            .quick-notes_options li a{
                color:#8f91a0;
            }

            .quick-notes_options .active{
                background: white;
            }
            .quick-notes_options .active a{
                color:#7d8087;
            }
            .quick-notes_footer{
                display: flex;
                bottom: 0;
                padding: 0;
                position: sticky;
                /* height:42px; */
                width: 100%;
            }
            .quick-notes_footer li{
                list-style-type:none;
                /* width:33.33%; */
                flex-basis: 100%;
                padding:10px;
                text-align: center;
                background:#0e0c28;
            }
            .deleteTodoBtn{
                border: none;
                background: transparent;
                color: #7171a6;
            }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="/admin">Bailie's Burger</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        </li>
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Notification</div>
                                    <div class="notification-list">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action active">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="/assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="/assets/images/avatar-3.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">John Abraham </span>is now following you
                                                        <div class="notification-date">2 days ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="/assets/images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Monaan Pechi</span> is watching your main repository
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="/assets/images/avatar-5.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jessica Caruso</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="#">View all notifications</a></div>
                                </li>
                            </ul>
                        </li>
                        {{-- <li class="nav-item dropdown connection"> --}}
                        <li class="nav-item dropdown connection">
                            <a class="nav-link quickNoteBtn" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-align-left"></i> </a>
                            @include('includes.admin-page.quick-notes')
                            @php
                                echo '<pre>';
                                    // print_r($results);
                                echo '</pre>';
                            @endphp
                            {{-- @yield('quick-note') --}}
                        </li>
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="/assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">
                                        @guest
                                            No Username
                                        @else
                                            {{ Auth::user()->fname }} {{ Auth::user()->lname }}
                                        @endguest

                                    </h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                                {{-- <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a> --}}

                                @if (Route::has('login'))
                                    {{-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block"> --}}
                                            @auth
                                            {{-- This form is a post request that logout when clicked --}}
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                {{-- <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a> --}}
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                                onclick="event.preventDefault();
                                                                            this.closest('form').submit();">
                                                    <i class="fas fa-power-off mr-2"></i> {{ __('Logout') }}
                                                </a>
                                            </form>
                                        @else
                                            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                                            @if (Route::has('register'))
                                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                                            @endif
                                        @endif
                                    {{-- </div> --}}
                                @endif
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            @include('includes.admin-page.admin-side-menu')
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
            @endif
            
            @yield('content')
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                             Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="/assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="/assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="/assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="/assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="/assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="/assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="/assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="/assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="/assets/libs/js/dashboard-ecommerce.js"></script>
    <!-- Dragable QuickNote js -->
    <script src="/assets/vendor/shortable-nestable/Sortable.min.js"></script>
    <script src="/assets/vendor/shortable-nestable/sort-nest.js"></script>
    <script src="/assets/vendor/shortable-nestable/jquery.nestable.js"></script>
    {{-- Ajax --}}
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
    <script>
            //Open and close quickNote section
            let connection = $(".quickNoteBtn");
            
            connection.click(function(){
              $("#quick-notes").toggleClass("openQuickNotes");
            });

            //Place every '.model' class above backdrop by appending it to body(removed ".modal('show')" to prevent auto popup on login)
            $('.modal').appendTo("body");


            // $(document).ready(function () {
                //When click edit student
                $('body').on('click', '.editTodo', function () {
                var todo_id = $(this).attr('data-id');
                let selectedTodoRoute = 'api/quicknotes_todo' +'/' + todo_id;
                $.get(selectedTodoRoute, function (data) {
                    $('#editTodo').modal('show');
                    $('#todoForm').attr('action',selectedTodoRoute);
                    $('#editTodoTitle').val(data.title);
                    $('#editTodoDescription').val(data.description);
                    })
                });
            // });

        //On modal Submit btn clicked
        $('#saveBtn').click(function (e) {
            e.preventDefault();
            $(this).html('Saved');

            var form_action = $("#todoForm").attr("action");
            $.ajax({
            data: $('#todoForm').serialize(),
            url: form_action,
            type: "POST",
            dataType: 'json',
            success: function (data) {
        
                //   $('#todoForm').trigger("reset");
                $('#editTodo').modal('hide');
                //   table.draw();
                // $('.connection #items').html(data)
                // $('.connection #items').load(location.href+(' #items'));
                $('#items').load(' #items');
                console.log(data);
                //If form action has an id update its htlm, else if not append a new one to bottom list 
            
            },
            error: function (data) {
                console.log('Error:', data);
                $('#saveBtn').html('Save Changes');
            }
            });
        });


        // $('body').on('click', '.deleteTodoBtn', function () {
     
            
        //     var todo_id = $(this).attr('data-id');
        //     let selectedTodoRoute = 'api/quicknotes_todo' +'/' + todo_id;
        //     // confirm("Are You sure want to delete !");
        
        //     $.ajax({
        //         type: "DELETE",
        //         url: selectedTodoRoute,
        //         success: function (data) {
        //             $('#items').load(' #items');
        //             console.log(`#${data.id}`)
        //         },
        //         error: function (data) {
        //             console.log('Error:', data);
        //         }
        //     });
        // });

        //Delete QuickNote Todo
        $('body').on('click', '.deleteTodoBtn', function () {
            var todo_id = $(this).attr('data-id');
            $('#quick-notes #items #'+ todo_id).remove();
        }); 
    </script>
</body>

</html>