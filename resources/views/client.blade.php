@extends('layouts.app')
@section('titleApp', 'Client')
@section('modal')
    <!-- Add Modal -->
    <div id="add_Modal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content"><br>
                <div class="modal-header">
                    <h5 class="modal-title">Add Client</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" id="insertForm" action="{{ route('client.store') }}" enctype="multipart/form-data">
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
                            <h6>Address</h6>
                            <div class="input-group">
                                <textarea type="text" name="address" id="address" class="form-control @error('address') is-invalid @enderror" placeholder="Address" title="Address" autofocus rows="3">{{ old('address') }}</textarea>
                            </div>
                            @error('address')
                            <span class="text-danger">
							    {{ $message }}
						    </span>
                            @enderror
                        </div>
                        <div class="form-group has-feedback">
                            <h6>Contact</h6>
                            <div class="input-group">
                                <textarea type="text" name="contact" id="contact" class="form-control @error('contact') is-invalid @enderror" placeholder="Contact Details" title="Contact" autofocus rows="3">{{ old('contact') }}</textarea>
                            </div>
                            @error('contact')
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
                            <h6>Photo (only png. Max size: 5 MB) <span id="required_str">*</span></h6>
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
                    <h5 class="modal-title">Update Client</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" id="EditForm" action="{{ route('client.update','id') }}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group has-feedback">
                            <h6 class="">Name <span id="required_str">*</span></h6>
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
                            <h6>Address</h6>
                            <div class="input-group">
                                <textarea type="text" name="update_address" id="EditAddress" class="form-control @error('address') is-invalid @enderror" placeholder="Address" title="Address" autofocus rows="3">{{ old('update_address') }}</textarea>
                            </div>
                            @error('update_address')
                            <span class="text-danger">
							    {{ $message }}
						    </span>
                            @enderror
                        </div>
                        <div class="form-group has-feedback">
                            <h6>Contact</h6>
                            <div class="input-group">
                                <textarea type="text" name="update_contact" id="EditContact" class="form-control @error('update_contact') is-invalid @enderror" placeholder="Contact Details" title="Contact" autofocus rows="3">{{ old('update_contact') }}</textarea>
                            </div>
                            @error('update_contact')
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
        <h5><b><i class="fa fa-handshake-o"></i> Client</b></h5>
    </header>
    <div class="card mb-4">
        <div class="card-header">
            <button title="Click to add new client"
                    style="border: none;background-color: inherit; outline-style: none;" data-toggle="modal"
                    data-target="#add_Modal"><i style="font-size: 15px; color: #e70f55;" class="fa fa-plus-circle"></i></button>
            Client List
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="tbl_leave_type" width="100%" cellspacing="0">
                    <thead>
                        <th>Serial</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Contact</th>
                        <th>Visible</th>
                        <th>Photo</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach($clients as $client)
                            <tr>
                                <td style="vertical-align: middle;">{{ $client->serial }}</td>
                                <td style="vertical-align: middle;">{{ $client->name }}</td>
                                <td style="vertical-align: middle;"><pre style="font-family: 'Raleway', sans-serif;">{{ $client->address }}</pre></td>
                                <td style="vertical-align: middle;"><pre style="font-family: 'Raleway', sans-serif;">{{ $client->contact }}</pre></td>
                                <td style="vertical-align: middle;">@if($client->visible) Yes @else No @endif</td>
                                <td style="vertical-align: middle;"><img src="{{ asset('/storage/client_photo/'.$client->photo) }}?ver=100" width="30" height="30" alt=""/></td>
                                <td style="vertical-align: middle;"><button class="btn btn-success" data-toggle="modal" data-target="#edit_Modal" data-ID = "{{ $client->id }}"
                                                data-name = "{{ $client->name }}" data-address = "{{ $client->address }}" data-contact = "{{ $client->contact }}"
                                                data-serial = "{{ $client->serial }}" data-visible = "{{ $client->visible }}">Edit</button>
                                    <a class="btn btn-danger" title="Delete" onclick="return checkDelete()" href="{{ route('client.delete',$client->id) }}">
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
                var url = '{{ route('client.update', ':id') }}';
                url = url.replace(':id',id);
                $('#EditForm').attr('action',url);

                modal.find($('#EditSerial')).val(button.attr('data-serial'));
                modal.find($('#EditName')).val(button.attr('data-name'));
                modal.find($('#EditAddress')).val(button.attr('data-address'));
                modal.find($('#EditContact')).val(button.attr('data-contact'));

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
                @if($errors->has('name') || $errors->has('address') || $errors->has('contact') || $errors->has('serial') || $errors->has('photo'))
                $('#add_Modal').modal('show');
                @else
                $('#edit_Modal').modal('show');
                @endif
            });
        </script>
    @endif
@endsection

