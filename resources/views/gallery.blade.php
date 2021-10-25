@extends('layouts.app')
@section('titleApp', 'Gallery')
@section('modal')
    <!-- Add Modal -->
    <div id="add_Modal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content"><br>
                <div class="modal-header">
                    <h5 class="modal-title">Add Item in Gallery</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" id="insertForm" action="{{ route('gallery.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group has-feedback">
                            <h6 class="">Name <span id="required_str">*</span></h6>
                            <div class="input-group">
                                <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" placeholder="Name" title="Name" autocomplete="name" required/>
                            </div>
                            @error('name')
                            <span class="text-danger">
                                <p>{{ $message }}</p>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group has-feedback">
                            <h6>Description <span id="required_str">*</span> </h6>
                            <div class="input-group">
                                <input type="text" name="description" id="description" value="{{ old('description') }}" class="form-control @error('description') is-invalid @enderror" placeholder="Description" title="Description" autocomplete="description" required autofocus/>
                            </div>
                            @error('description')
                            <span class="text-danger">
							    {{ $message }}
						    </span>
                            @enderror
                        </div>
                        <div class="form-group has-feedback">
                            <h6>Category <span id="required_str">*</span></h6>
                            <div class="input-group">
                                <input id="category" class="form-control @error('category') is-invalid @enderror" placeholder="Category" title="Category" list="category_name" value="{{ old('category') }}" name="category" autocomplete="off" required>
                                <datalist id="category_name">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->category }}"></option>
                                    @endforeach
                                </datalist>
                            </div>
                            @error('category')
                            <span class="text-danger">
							    {{ $message }}
						    </span>
                            @enderror
                        </div>
                        <div class="form-group has-feedback">
                            <h6>Serial</h6>
                            <div class="input-group">
                                <input type="text" name="serial" id="serial" value="{{ old('serial') }}" class="form-control @error('serial') is-invalid @enderror"
                                       oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" placeholder="Serial" title="Serial" autocomplete="serial" autofocus/>
                            </div>
                            @error('serial')
                            <span class="text-danger">
							    {{ $message }}
						    </span>
                            @enderror
                        </div>
                        <div class="form-group has-feedback">
                            <h6>Photo (jpeg,jpg,bmp,png. Size: 5 MB) <span id="required_str">*</span></h6>
                            <div class="input-group">
                                <input type="file" name="photo" id="photo" value="{{ old('photo') }}" class="form-control @error('photo') is-invalid @enderror" placeholder="Photo" title="Photo" required autofocus/>
                            </div>
                            @error('photo')
                            <span class="text-danger">
							    {{ $message }}
						    </span>
                            @enderror
                        </div>
                        <input type="submit" id="insert" value="Add" class="btn btn-success"/>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div id="edit_Modal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content"><br>
                <div class="modal-header">
                    <h5 class="modal-title">Update Item in Gallery</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" id="EditForm" action="{{ route('gallery.update','id') }}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group has-feedback">
                            <h6 class="">Product Name <span id="required_str">*</span></h6>
                            <div class="input-group">
                                <input type="text" name="update_name" id="EditName" value="{{ old('update_name') }}" class="form-control @error('update_name') is-invalid @enderror" placeholder="Name" title="Name" autocomplete="update_name" required/>
                            </div>
                            @error('update_name')
                            <span class="text-danger">
                                <p>{{ $message }}</p>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group has-feedback">
                            <h6>Description <span id="required_str">*</span> </h6>
                            <div class="input-group">
                                <input type="text" name="update_description" id="EditDescription" value="{{ old('update_description') }}" class="form-control @error('update_description') is-invalid @enderror" placeholder="Description" title="Description" autocomplete="update_description" required autofocus/>
                            </div>
                            @error('update_description')
                            <span class="text-danger">
							    {{ $message }}
						    </span>
                            @enderror
                        </div>
                        <div class="form-group has-feedback">
                            <h6>Category <span id="required_str">*</span></h6>
                            <div class="input-group">
                                <input id="EditCategory" class="form-control @error('update_category') is-invalid @enderror" placeholder="Category" title="Category" list="category_names" value="{{ old('update_category') }}" name="update_category" autocomplete="off" required>
                                <datalist id="category_names">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->category }}"></option>
                                    @endforeach
                                </datalist>
                            </div>
                            @error('update_category')
                            <span class="text-danger">
							    {{ $message }}
						    </span>
                            @enderror
                        </div>
                        <div class="form-group has-feedback">
                            <h6>Serial</h6>
                            <div class="input-group">
                                <input type="text" name="update_serial" id="EditSerial" value="{{ old('update_serial') }}" class="form-control @error('update_serial') is-invalid @enderror"
                                       oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" placeholder="Serial" title="Serial" autocomplete="update_serial" autofocus/>
                            </div>
                            @error('update_serial')
                            <span class="text-danger">
							    {{ $message }}
						    </span>
                            @enderror
                        </div>
                        <div class="form-group has-feedback">
                            <h6>Visible <span id="required_str">*</span></h6>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="visible" id="RadiosActiveVisible" value="1" required>
                                <label class="form-check-label" for="RadiosActiveVisible">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="visible" id="RadiosInactiveVisible" value="0" required>
                                <label class="form-check-label" for="RadiosInactiveVisible">No</label>
                            </div>
                        </div>
                        <div class="form-group has-feedback">
                            <h6>Photo (jpeg,jpg,bmp,png. Size: 5 MB) <span id="required_str">*</span></h6>
                            <div class="input-group">
                                <input type="file" name="update_photo" id="EditPhoto" value="{{ old('update_photo') }}" class="form-control @error('update_photo') is-invalid @enderror" placeholder="Photo" title="Photo" autofocus/>
                            </div>
                            @error('update_photo')
                            <span class="text-danger">
							    {{ $message }}
						    </span>
                            @enderror
                        </div>
                        <input type="submit" id="insert" value="Update" class="btn btn-success"/>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    @if (session()->has('notification'))

            <div class="alert alert-success alert-dismissible">
                {!! session('notification') !!}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
    @endif
    <!-- Header -->
    <header class="w3-container" style="padding-top:22px">
        <h5><b><i class="fa fa-picture-o"></i> Gallery</b></h5>
    </header>
    <div class="card mb-4">
        <div class="card-header">
            <button title="Click to add new item in gallery"
                    style="border: none;background-color: inherit; outline-style: none;" data-toggle="modal"
                    data-target="#add_Modal"><i style="font-size: 15px; color: #e70f55;" class="fa fa-plus-circle"></i></button>
            Gallery List
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="tbl_leave_type" width="100%" cellspacing="0">
                    <thead>
                        <th>Serial</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Visible</th>
                        <th>Photo</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach($galleries as $gallery)
                            <tr>
                                <td style="vertical-align: middle;">{{ $gallery->serial }}</td>
                                <td style="vertical-align: middle;">{{ $gallery->name }}</td>
                                <td style="vertical-align: middle;">{{ $gallery->description }}</td>
                                <td style="vertical-align: middle;">{{ $gallery->category }}</td>
                                <td style="vertical-align: middle;">@if($gallery->visible) Yes @else No @endif</td>
                                <td style="vertical-align: middle;"><img src="{{ asset('/storage/gallery_photo/'.$gallery->photo) }}?ver=100" width="30" height="30" alt=""/></td>
                                <td style="vertical-align: middle;"><button class="btn btn-success" data-toggle="modal" data-target="#edit_Modal" data-ID = "{{ $gallery->id }}"
                                                data-name = "{{ $gallery->name }}" data-description = "{{ $gallery->description }}"
                                                data-category = "{{ $gallery->category }}" data-serial = "{{ $gallery->serial }}" data-visible = "{{ $gallery->visible }}">Edit</button>
                                    <a class="btn btn-danger" title="Delete" onclick="return checkDelete()" href="{{ route('gallery.delete',$gallery->id) }}">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            $('#tbl_leave_type').DataTable({
                "order": [],
                "pagingType": "full_numbers",
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                'columnDefs': [{
                    'targets': [5,6], // column index (start from 0)
                    'orderable': false, // set orderable false for selected columns
                }],
                response: true,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search",
                }
            });
        });
    </script>

    <script>
        $('#edit_Modal').on('show.bs.modal', function(e){
            if ( e.relatedTarget != null) {
                var button = $(e.relatedTarget); // Button that triggered the modal
                var modal = $(this);
                var visible = button.attr('data-visible');

                var id = button.attr('data-ID');
                var url = '{{ route('gallery.update', ':id') }}';
                url = url.replace(':id',id);
                $('#EditForm').attr('action',url);

                modal.find($('#EditSerial')).val(button.attr('data-serial'));
                modal.find($('#EditName')).val(button.attr('data-name'));
                modal.find($('#EditDescription')).val(button.attr('data-description'));
                modal.find($('#EditCategory')).val(button.attr('data-category'));

                if(visible == 1)
                    $("#RadiosActiveVisible").prop("checked", true);
                else
                    $("#RadiosInactiveVisible").prop("checked", true);
            }
        });
    </script>

    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/additional-methods.js"></script>

    <!--<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/additional-methods.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>-->


    @if (count($errors) > 0)
        <script>
            $( document ).ready(function() {
                @if($errors->has('name') || $errors->has('description') || $errors->has('category') || $errors->has('serial') || $errors->has('photo'))
                $('#add_Modal').modal('show');
                @else
                $('#edit_Modal').modal('show');
                @endif
            });
        </script>
    @endif
@endsection

