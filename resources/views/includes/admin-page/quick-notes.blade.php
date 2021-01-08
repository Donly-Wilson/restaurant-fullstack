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
                <li class="list-group-item align-items-center drag-handle" id="{{$todoList->id}}">
                    <span class="drag-indicator"></span>
                    <div>{{$todoList->title}}</div>

                    {{-- Display results form api being sent from appProvider --}}
                    {{-- @php
                        echo '<pre>';
                            // print_r($results);
                        echo '</pre>';
                    @endphp --}}
                    <div class="btn-group ml-auto">
                        <!-- Button trigger edit modal -->
                        <button class="btn btn-sm btn-outline-light editTodo" data-id="{{$todoList->id}}" data-toggle="modal" data-target="#editTodo">Edit
                            {{-- <a href="#" >
                                Add New
                            </a> --}}
                        </button>
                        
                        {{-- this uses "Delete method" to delete todoList | If you remove '@method('DELETE')' below, it becomes a "POST" request --}}
                        <form class="btn btn-sm btn-outline-light" id="delete-todoList-{{$todoList->id}}" method="POST" action="/api/quicknotes_todo/{{$todoList->id}}">
                            @csrf
                            @method('DELETE')
                            <button class="todo-DeleteBtn"
                                onclick="this.closest('form').submit();">
                                <i class="far fa-trash-alt"></i>
                                 {{-- {{ __('Delete') }} --}}
                            </button>
                        </form>
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
                        <form class="" method="POST" action="/api/quicknotes_todo">
                            @csrf
                            <div class="form-group">
                                <label for="inputtitle">Title</label>
                                <input id="inputtitle" class="form-control form-control-lg @error('title') is-invalid @enderror" type="text" name="title" value="{{old('title')}}" required autofocus autocomplete="title" placeholder="Give category a title" />
                                @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputdescription">Description</label>
                                <textarea id="inputdescription" class="form-control form-control-lg" type="text" name="description" autofocus placeholder="Write a description">{{old('description')}}</textarea>
                                @error('description')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                </div>
                                <div class="col-sm-6 pl-0">
                                    <p class="text-right">
                                        <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                    </p>
                                </div>
                            </div>
                        </form>
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
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!--end New Todo Modal -->
        <!-- ============================================================== -->
</div>

<div class="">
    <!-- ============================================================== -->
    <!-- Edit Todo Modal -->
    <!-- ============================================================== -->
    <div class="modal fade" id="editTodo" tabindex="-1" role="dialog" aria-labelledby="editTodoLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editTodoLabel">Edit Todo</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </a>
                </div>
                <div class="modal-body">
                    <form class="" id="todoForm" method="POST" 
                    {{-- action="api/quicknotes_todo" --}}
                    >
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="editTodoTitle">Title</label>
                            <input id="editTodoTitle" class="form-control form-control-lg @error('title') is-invalid @enderror" type="text" name="title" value="{{old('title')}}" required autofocus autocomplete="title" placeholder="Give category a title" />
                            @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="editTodoDescription">Description</label>
                            <textarea id="editTodoDescription" class="form-control form-control-lg" type="text" name="description" required autofocus placeholder="Write a description"></textarea>
                            @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                            </div>
                            <div class="col-sm-6 pl-0">
                                <p class="text-right">
                                    <button id="saveBtn" type="submit" class="btn btn-space btn-primary">Submit</button>
                                </p>
                            </div>
                        </div>
                    </form>
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
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!--end Edit Todo Modal -->
    <!-- ============================================================== -->
</div>

{{-- $('body').on('click', '.editTodo', function () {
    var book_id = $(this).data('id');
    $.get("{{ route('books.index') }}" +'/' + book_id +'/edit', function (data) {
        $('#modelHeading').html("Edit Book");
        $('#saveBtn').val("edit-book");
        $('#ajaxModel').modal('show');
        $('#book_id').val(data.id);
        $('#title').val(data.title);
        $('#author').val(data.author);
    })
 }); --}}