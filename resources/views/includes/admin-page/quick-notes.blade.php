{{-- //Includes for Quicknotes --}}

<div class="row">
    <ul id="quick-notes">
        <section class="card-fluid">
            <div class="quick-notes_header">
                <div class="quick-notes_title">
                    <h5> Quick Notes </h5>
                    <span class="quickNotes-ToggleBtn quick-note_close"><i class="fas fa-times"></i></span>
                </div>
                <ul class="quick-notes_options nav nav-tabs">
                    <li><a class="active show" id="todo-tab" data-toggle="tab" href="#todo" role="tab" aria-controls="todo" aria-selected="true">Todo</a>
                    </li>
                    <li><a id="Announcements-tab" data-toggle="tab" href="#Announcements" role="tab" aria-controls="Announcements" aria-selected="false">Announcements</a>
                    </li>
                    <li><a id="Assigned-tab" data-toggle="tab" href="#Assigned" role="tab" aria-controls="Assigned" aria-selected="false">Assigned</a>

                    </li>
                </ul>
            </div>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="todo" role="tabpanel" aria-labelledby="todo-tab">
                    <div class="quick-notes_todo-header">
                        <ul>
                            {{-- <li><i class="fas fa-undo-alt"></i></li>
                            <li><i class="fas fa-plus"></i></li> --}}
                            {{-- <li>select all</li> --}}
                            <li>
                                {{-- <a href="#" id="clearAll">Clear All</a> --}}
                                <label>select all<input type="checkbox" name="" id="selectAll" value='select-all'></label>
                            </li>
                        </ul>
                        <ul>
                            {{-- <li>delete selected</li> --}}
                            <li>
                                {{-- <a class="btn btn-sm btn-outline-light" href="#" id="deleteSelected">Delete Selected</a> --}}
            
                                <form id="deleteSelected" method="POST" action="/api/selected-quicknotes_todo">
                                    @csrf
                                    @method('DELETE')
                                    <span onclick="this.closest('form').submit();">
                                        Delete All
                                    </span>
                                </form>
                            </li>
                        </ul>
                    </div>
                    <ul class="sortable-lists list-group list-group-flush list-group-bordered" id="items">
                        {{-- //$todoResults is returned from App/Providers/AppServiceProvider --}}
                        @foreach ($todoResults as $todoTask)
                        <li class="list-group-item align-items-center drag-handle" id="{{$todoTask->id}}">
                            <input type="checkbox" name="ids" value="{{$todoTask->id}}" class="taskCheckBox">
                            <span class="drag-indicator"></span>
                            <div>{{$todoTask->title}}</div>
                            {{-- Display todoResults form api being sent from appProvider --}}
                            {{-- @php
                                echo '<pre>';
                                    // print_r($todoResults);
                                echo '</pre>';
                            @endphp --}}
                            <div class="btn-group ml-auto">
                                <!-- This button triggers editTodo modal -->
                                <button class="btn btn-sm btn-outline-light editTodo" data-id="{{$todoTask->id}}"   data-target="#editTodo">Edit
                                </button>
                                {{-- this uses "Delete method" to delete todoTask | If you remove '@method('DELETE')' below, it becomes a "POST" request, not recommended --}}
                                <form class="btn btn-sm btn-outline-light" id="delete-todoTask-{{$todoTask->id}}" method="POST" action="/api/quicknotes_todo/{{$todoTask->id}}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="deleteTodoBtn" data-id="{{$todoTask->id}}"
                                        onclick="this.closest('form').submit();">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    <ul class="quick-notes_footer">
                        <li><a href="#">Undo</a></li>
                        <li>
                            <!-- This button triggers addTodo modal -->
                            <a href="#" data-toggle="modal" data-target="#addTodo">
                            Add New
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="Announcements" role="tabpanel" aria-labelledby="Announcements-tab">
                    <h3>Announcement Section</h3>
                    <p>Nullam et tellus ac ligula condimentum sodales. Aenean tincidunt viverra suscipit. Maecenas id molestie est, a commodo nisi. Quisque fringilla turpis nec elit eleifend vestibulum. Aliquam sed purus in odio ullamcorper congue consectetur in neque. Aenean sem ex, tempor et auctor sed, congue id neque. </p>
                </div>
                <div class="tab-pane fade" id="Assigned" role="tabpanel" aria-labelledby="Assigned-tab">
                    <h3>Assigned Section</h3>
                    <p>Vivamus pellentesque vestibulum lectus vitae auctor. Maecenas eu sodales arcu. Fusce lobortis, libero ac cursus feugiat, nibh ex ultricies tortor, id dictum massa nisl ac nisi. Fusce a eros pellentesque, ultricies urna nec, consectetur dolor. Nam dapibus scelerisque risus, a commodo mi tempus eu.</p>
                </div>
            </div>
        </section>                
    </ul>
</div>

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
                <form id="todoAddForm" method="POST" action="/api/quicknotes_todo">
                    @csrf
                    <div class="form-group">
                        <label for="inputtitle">Title</label>
                        <input id="inputtitle" class="form-control form-control-lg @error('title') is-invalid @enderror" type="text" name="title" value="{{old('title')}}" required autofocus autocomplete="title" placeholder="Give task a title" />
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
                    <div class="modal-footer">
                        <a href="#" class="btn btn-secondary" data-dismiss="modal">Close</a>
                        <button type="submit" class="btn btn-primary saveBtn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!--end New Todo Modal -->
<!-- ============================================================== -->



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
                <form id="todoEditForm" method="POST" 
                {{-- action="api/quicknotes_todo" --}}
                >
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="editTodoTitle">Title</label>
                        <input id="editTodoTitle" class="form-control form-control-lg @error('title') is-invalid @enderror" type="text" name="title" value="{{old('title')}}" required autofocus autocomplete="title" placeholder="Edit task title" />
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="editTodoDescription">Description</label>
                        <textarea id="editTodoDescription" class="form-control form-control-lg" type="text" name="description" required autofocus placeholder="Edit this description"></textarea>
                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-secondary" data-dismiss="modal">Close</a>
                        <button type="submit" class="btn btn-primary saveBtn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!--end Edit Todo Modal -->
<!-- ============================================================== -->
    