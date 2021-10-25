@extends('layouts.app')
@section('titleApp', 'Blog')
@section('modal')
    <!-- Add Modal -->
    <div id="add_Modal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content"><br>
                <div class="modal-header">
                    <h5 class="modal-title">Add New Blog</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" id="insertForm" action="{{ route('blog.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group has-feedback">
                            <h6 class="">Heading <span id="required_str">*</span></h6>
                            <div class="input-group">
                                <input type="text" name="headline" id="headline" value="{{ old('headline') }}" class="form-control @error('headline') is-invalid @enderror" placeholder="Heading" title="Heading" autocomplete="headline" required/>
                            </div>
                            @error('headline')
                            <span class="text-danger">
                                <p>{{ $message }}</p>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group has-feedback">
                            <h6>Details <span id="required_str">*</span></h6>
                            <div class="input-group">
                                <textarea type="text" name="details" id="details" class="form-control @error('details') is-invalid @enderror" placeholder="Details..." title="Details" autofocus rows="7" required>{{ old('details') }}</textarea>
                            </div>
                            @error('details')
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
                    <h5 class="modal-title">Update Blog</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" id="EditForm" action="{{ route('blog.update','id') }}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group has-feedback">
                            <h6 class="">Heading <span id="required_str">*</span></h6>
                            <div class="input-group">
                                <input type="text" name="update_headline" id="EditHeadline" value="{{ old('update_headline') }}" class="form-control @error('update_headline') is-invalid @enderror" placeholder="Heading" title="Heading" autocomplete="update_headline" required/>
                            </div>
                            @error('update_headline')
                            <span class="text-danger">
                                <p>{{ $message }}</p>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group has-feedback">
                            <h6>Details <span id="required_str">*</span></h6>
                            <div class="input-group">
                                <textarea type="text" name="update_details" id="EditDetails" class="form-control @error('update_details') is-invalid @enderror" placeholder="Details..." title="Details" autofocus rows="7" required>{{ old('update_details') }}</textarea>
                            </div>
                            @error('update_details')
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


    <!-- View Modal -->
    <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content"><br>
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="viewModalTitle"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <pre id="viewDetails" style="text-align: left; overflow-x: auto; white-space: pre-wrap;white-space: -moz-pre-wrap;white-space: -pre-wrap;white-space: -o-pre-wrap;word-wrap: break-word;"></pre>
                </div>
                <div class="modal-header">
                    <img style="display: block;margin-left: auto;margin-right: auto;width: 50%;" height="500px" id="viewImg" src="{{ asset('templet/img/latest-products/pro-icon-4.png') }}" alt="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
        <h5><b><i class="fa fa-bold"></i>log</b></h5>
    </header>
    <div class="card mb-4">
        <div class="card-header">
            <button title="Click to add new blog"
                    style="border: none;background-color: inherit; outline-style: none;" data-toggle="modal"
                    data-target="#add_Modal"><i style="font-size: 15px; color: #e70f55;" class="fa fa-plus-circle"></i></button>
            Blog List
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="tbl_leave_type" width="100%" cellspacing="0">
                    <thead>
                        <th>Serial</th>
                        <th>Heading</th>
                        <th>Details</th>
                        <th>Visible</th>
                        <th>Photo</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach($blogs as $blog)
                            <tr>
                                <td style="vertical-align: middle;">{{ $blog->serial }}</td>
                                <td style="vertical-align: middle;">{{ $blog->headline }}</td>
                                <td style="vertical-align: middle;">{{ substr($blog->details, 0, 20) }}......</td>
                                <td style="vertical-align: middle;">@if($blog->visible) Yes @else No @endif</td>
                                <td style="vertical-align: middle;"><img src="{{ asset('/storage/blog_photo/'.$blog->photo) }}?ver=100" width="30" height="30" alt=""/></td>
                                <td style="vertical-align: middle;"><button class="btn btn-primary" data-toggle="modal" data-target="#viewModal" data-ID = "{{ $blog->id }}"
                                                data-heading = "{{ $blog->headline }}" data-details = "{{ $blog->details }}"
                                                data-photo = "{{ asset('/storage/blog_photo/'.$blog->photo) }}">View</button>
                                                <button class="btn btn-success" data-toggle="modal" data-target="#edit_Modal" data-ID = "{{ $blog->id }}"
                                                data-heading = "{{ $blog->headline }}" data-details = "{{ $blog->details }}"
                                                data-serial = "{{ $blog->serial }}" data-visible = "{{ $blog->visible }}">Edit</button>
                                    <a class="btn btn-danger" title="Delete" onclick="return checkDelete()" href="{{ route('blog.delete',$blog->id) }}">
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
                    'targets': [4,5], // column index (start from 0)
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
                var url = '{{ route('blog.update', ':id') }}';
                url = url.replace(':id',id);
                $('#EditForm').attr('action',url);

                modal.find($('#EditSerial')).val(button.attr('data-serial'));
                modal.find($('#EditHeadline')).val(button.attr('data-heading'));
                modal.find($('#EditDetails')).val(button.attr('data-details'));

                if(visible == 1)
                    $("#RadiosActiveVisible").prop("checked", true);
                else
                    $("#RadiosInactiveVisible").prop("checked", true);
            }
        });
    </script>

    <script>
        $('#viewModal').on('show.bs.modal', function(e){
            if ( e.relatedTarget != null) {
                var button = $(e.relatedTarget); // Button that triggered the modal
                var modal = $(this);
                var image = button.attr('data-photo');

                $('#viewImg').attr('src',image);

                modal.find($('#viewModalTitle')).text(button.attr('data-heading'));
                modal.find($('#viewDetails')).text(button.attr('data-details'));

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
                @if($errors->has('headline') || $errors->has('details') || $errors->has('serial') || $errors->has('photo'))
                $('#add_Modal').modal('show');
                @else
                $('#edit_Modal').modal('show');
                @endif
            });
        </script>
    @endif
@endsection

