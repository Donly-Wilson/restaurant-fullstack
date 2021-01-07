{{-- //Includes for Quicknotes --}}
{{-- <ul class="dropdown-menu dropdown-menu-right connection-dropdown"> --}}

<div class="row">
    <ul id="quick-notes">
        <section class="card-fluid">
            <div class="quick-notes_header">
                <div class="quick-notes_title">
                    <h5> Quick Notes </h5>
                    <span class="quickNoteBtn quickNotClose"><i class="fas fa-times"></i></span>
                </div>
                <ul class="quick-notes_options">
                    <li class="active"><a href="#">Todo</a></li>
                    <li><a href="#">Announcements</a></li>
                    <li><a href="#">Assigned</a></li>
                </ul>
            </div>
            <ul class="sortable-lists list-group list-group-flush list-group-bordered" id="items">
                {{-- //$results is returned from AppServiceProvider --}}
                @foreach ($results as $todoList)
                <li class="list-group-item align-items-center drag-handle">
                    <span class="drag-indicator"></span>
                    <div>{{$todoList->title}}</div>

                    {{-- Display results form api being sent from appProvider --}}
                    {{-- @php
                        echo '<pre>';
                            // print_r($results);
                        echo '</pre>';
                    @endphp --}}
                    <div class="btn-group ml-auto">
                        <button class="btn btn-sm btn-outline-light">Edit</button>
                        <button class="btn btn-sm btn-outline-light">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </div>
                </li>
                @endforeach
            </ul>
            <ul class="quick-notes_footer">
                <li><a href="#">Undo</a></li>
                <li>
                    <!-- Button trigger modal -->
                    <a href="#" data-toggle="modal" data-target="#addTodo">
                    Add New
                    </a>
                </li>
                <li><a href="#">Clear All</a></li>
            </ul>
        </section>                
    </ul>
</div>

<div class="">
        <!-- ============================================================== -->
        <!-- New Todo Modal -->
        <!-- ============================================================== -->
        <div class="modal fade" id="addTodo" tabindex="-1" role="dialog" aria-labelledby="addTodoLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addTodoLabel">Create New Todo</h5>
                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </a>
                    </div>
                    <div class="modal-body">
                        <form class="" method="POST" 
                        {{-- action="/admin/food-categories" --}}
                        >
                            <input type="hidden" name="_token" value="2LTwmixFtuRBLAoNaMwlOSfYUz2QLnIBGwcTsYeP">                            
                            <div class="form-group">
                                <label for="inputtitle">Title</label>
                                <input id="inputtitle" class="form-control form-control-lg " type="text" name="title" value="" required="" autofocus="" autocomplete="title" placeholder="Give category a title">
                            </div>
                            <div class="form-group">
                                <label for="inputdescription">Description</label>
                                <textarea id="inputdescription" class="form-control form-control-lg" type="text" name="description" required="" autofocus="" placeholder="Write a description"></textarea>
                            </div>
                            {{-- <div class="row">
                                <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                </div>
                                <div class="col-sm-6 pl-0">
                                    <p class="text-right">
                                        <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                    </p>
                                </div>
                            </div> --}}
                        </div>
                        <div class="modal-footer">
                            <a href="#" class="btn btn-secondary" data-dismiss="modal">Close</a>
                            <a href="#" type="submit" class="btn btn-primary">Save changes</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!--end New Todo Modal -->
        <!-- ============================================================== -->
    </div>
