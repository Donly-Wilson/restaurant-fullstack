{{-- //Includes for Quicknotes --}}

<div class="row">
    <ul id="quick-notes">
        <section class="card-fluid">
            <div class="quick-notes_header">
                <div class="quick-notes_title">
                    <h5> Quick Notes </h5>
                    <span class="quickNotes-ToggleBtn quick-note_close"><i class="fas fa-times"></i></span>
                </div>
                <ul class="quick-notes_options">
                    <li class="active"><a href="#">Todo</a></li>
                    <li><a href="#">Announcements</a></li>
                    <li><a href="#">Assigned</a></li>
                </ul>
            </div>
            <ul class="sortable-lists list-group list-group-flush list-group-bordered" id="items">
                {{-- //$todoResults is returned from App/Providers/AppServiceProvider --}}
                @foreach ($todoResults as $todoTask)
                <li class="list-group-item align-items-center drag-handle" id="{{$todoTask->id}}">
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
                <li><a href="#">Clear All</a></li>
            </ul>
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
    