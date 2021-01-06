{{-- //Includes for Quicknotes --}}
{{-- <ul class="dropdown-menu dropdown-menu-right connection-dropdown"> --}}
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
                @foreach ($results as $item)
                <li class="list-group-item align-items-center drag-handle">
                    <span class="drag-indicator"></span>
                    <div>{{$item->title}}</div>
                    {{-- {{dd($results)}} --}}
                    @php
                        echo '<pre>';
                            // print_r($results);
                        echo '</pre>';
                    @endphp
                    <div class="btn-group ml-auto">
                        <button class="btn btn-sm btn-outline-light">Edit</button>
                        <button class="btn btn-sm btn-outline-light">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </div>
                </li>
                @endforeach


                {{-- <li class="list-group-item align-items-center drag-handle">
                    <span class="drag-indicator"></span>
                    <div> Item two </div>
                    <div class="btn-group ml-auto">
                        <button class="btn btn-sm btn-outline-light">Edit</button>
                        <button class="btn btn-sm btn-outline-light">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </div>
                </li>
                <li class="list-group-item align-items-center drag-handle">
                    <span class="drag-indicator"></span>
                    <div>Item three</div>
                    <div class="btn-group ml-auto">
                        <button class="btn btn-sm btn-outline-light">Edit</button>
                        <button class="btn btn-sm btn-outline-light">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </div>
                </li>
                <li class="list-group-item align-items-center drag-handle">
                    <span class="drag-indicator"></span>
                    <div> Item four </div>
                    <div class="btn-group ml-auto">
                        <button class="btn btn-sm btn-outline-light">Edit</button>
                        <button class="btn btn-sm btn-outline-light">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </div>
                </li>
                <li class="list-group-item align-items-center drag-handle">
                    <span class="drag-indicator"></span>
                    <div> Item five </div>
                    <div class="btn-group ml-auto">
                        <button class="btn btn-sm btn-outline-light">Edit</button>
                        <button class="btn btn-sm btn-outline-light">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </div>
                </li> --}}
                {{-- Copies --}}
                {{-- <li class="list-group-item align-items-center drag-handle">
                    <span class="drag-indicator"></span>
                    <div> Item one </div>
                    <div class="btn-group ml-auto">
                        <button class="btn btn-sm btn-outline-light">Edit</button>
                        <button class="btn btn-sm btn-outline-light">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </div>
                </li>
                <li class="list-group-item align-items-center drag-handle">
                    <span class="drag-indicator"></span>
                    <div> Item two </div>
                    <div class="btn-group ml-auto">
                        <button class="btn btn-sm btn-outline-light">Edit</button>
                        <button class="btn btn-sm btn-outline-light">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </div>
                </li>
                <li class="list-group-item align-items-center drag-handle">
                    <span class="drag-indicator"></span>
                    <div>Item three</div>
                    <div class="btn-group ml-auto">
                        <button class="btn btn-sm btn-outline-light">Edit</button>
                        <button class="btn btn-sm btn-outline-light">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </div>
                </li>
                <li class="list-group-item align-items-center drag-handle">
                    <span class="drag-indicator"></span>
                    <div> Item four </div>
                    <div class="btn-group ml-auto">
                        <button class="btn btn-sm btn-outline-light">Edit</button>
                        <button class="btn btn-sm btn-outline-light">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </div>
                </li>
                <li class="list-group-item align-items-center drag-handle">
                    <span class="drag-indicator"></span>
                    <div> Item five </div>
                    <div class="btn-group ml-auto">
                        <button class="btn btn-sm btn-outline-light">Edit</button>
                        <button class="btn btn-sm btn-outline-light">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </div>
                </li>
                <li class="list-group-item align-items-center drag-handle">
                    <span class="drag-indicator"></span>
                    <div> Item one </div>
                    <div class="btn-group ml-auto">
                        <button class="btn btn-sm btn-outline-light">Edit</button>
                        <button class="btn btn-sm btn-outline-light">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </div>
                </li>
                <li class="list-group-item align-items-center drag-handle">
                    <span class="drag-indicator"></span>
                    <div> Item two </div>
                    <div class="btn-group ml-auto">
                        <button class="btn btn-sm btn-outline-light">Edit</button>
                        <button class="btn btn-sm btn-outline-light">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </div>
                </li>
                <li class="list-group-item align-items-center drag-handle">
                    <span class="drag-indicator"></span>
                    <div>Item three</div>
                    <div class="btn-group ml-auto">
                        <button class="btn btn-sm btn-outline-light">Edit</button>
                        <button class="btn btn-sm btn-outline-light">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </div>
                </li>
                <li class="list-group-item align-items-center drag-handle">
                    <span class="drag-indicator"></span>
                    <div> Item four </div>
                    <div class="btn-group ml-auto">
                        <button class="btn btn-sm btn-outline-light">Edit</button>
                        <button class="btn btn-sm btn-outline-light">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </div>
                </li>
                <li class="list-group-item align-items-center drag-handle">
                    <span class="drag-indicator"></span>
                    <div> Item five </div>
                    <div class="btn-group ml-auto">
                        <button class="btn btn-sm btn-outline-light">Edit</button>
                        <button class="btn btn-sm btn-outline-light">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </div>
                </li> --}}
            </ul>
            <ul class="quick-notes_footer">
                <li><a href="#">Undo</a></li>
                <li><a href="#">Add New</a></li>
                <li><a href="#">Clear All</a></li>
            </ul>
        </section>
</ul>