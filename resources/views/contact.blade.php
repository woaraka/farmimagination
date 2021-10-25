@extends('layouts.app')
@section('titleApp', 'Contact')
@section('modal')
    <!-- View Modal -->
    <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content"><br>
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100">Email Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-left font-weight-bold">Details</h5>
                                    <pre id="viewDetails" style="white-space: initial;color:black;font-size: 100%;text-align: left; overflow-x: auto; white-space: pre-wrap;white-space: -moz-pre-wrap;white-space: -pre-wrap;white-space: -o-pre-wrap;word-wrap: break-word;"></pre>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-left font-weight-bold">Customer info</h5>
                                    <table class="">
                                        <tbody style="font-size: 14px; text-align: left">
                                        <tr>
                                            <th>Name:&emsp;&emsp;</th>
                                            <td id="viewName" class="text-success font-weight-bold"></td>
                                        </tr>
                                        <tr>
                                            <th>Email:&emsp;&emsp;</th>
                                            <td id="viewEmail"></td>
                                        </tr>
                                        <tr>
                                            <th>Phone:&emsp;&emsp;</th>
                                            <td id="viewPhone"> </td>
                                        </tr>
                                        <tr>
                                            <th>Purpose:&emsp;&emsp;</th>
                                            <td id="viewPurpose"></td>
                                        </tr>
                                        <tr>
                                            <th>Time:&emsp;&emsp;</th>
                                            <td id="viewTime"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
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
        <h5><b><i class="fa fa-user-circle-o"></i> Contact</b></h5>
    </header>
    <div class="card mb-4">
        <div class="card-header">
            Contact List
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="tbl_leave_type" width="100%" cellspacing="0">
                    <thead>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Purpose</th>
                        <th>Message</th>
                        <th>Time</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach($contacts as $contact)
                            <tr>
                                <td style="vertical-align: middle;">{{ $contact->name }}</td>
                                <td style="vertical-align: middle;">{{ $contact->email }}</td>
                                <td style="vertical-align: middle;">{{ $contact->phone }}</td>
                                <td style="vertical-align: middle;">{{ $contact->purpose }}</td>
                                <td style="vertical-align: middle;">{{ substr($contact->message, 0, 20) }}......</td>
                                <td style="vertical-align: middle;">{{ date('m/d/Y H:i', strtotime($contact->created_at)) }}</td>
                                <td style="vertical-align: middle;"><button class="btn btn-primary" data-toggle="modal" data-target="#viewModal" data-ID = "{{ $contact->id }}"
                                                data-name = "{{ $contact->name }}" data-email = "{{ $contact->email }}" data-phone = "{{ $contact->phone }}"
                                               data-purpose = "{{ $contact->purpose }}"data-details = "{{ $contact->message }}" data-time = "{{ date('m/d/Y H:i', strtotime($contact->created_at)) }}">View</button>
                                    <a class="btn btn-danger" title="Delete" onclick="return checkDelete()" href="{{ route('contact.delete',$contact->id) }}">
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
        $('#viewModal').on('show.bs.modal', function(e){
            if ( e.relatedTarget != null) {
                var button = $(e.relatedTarget); // Button that triggered the modal
                var modal = $(this);

                modal.find($('#viewName')).text(button.attr('data-name'));
                modal.find($('#viewEmail')).text(button.attr('data-email'));
                modal.find($('#viewPhone')).text(button.attr('data-phone'));
                modal.find($('#viewPurpose')).text(button.attr('data-purpose'));
                modal.find($('#viewTime')).text(button.attr('data-time'));
                modal.find($('#viewDetails')).text(button.attr('data-details'));

            }
        });
    </script>
@endsection

