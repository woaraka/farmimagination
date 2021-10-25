@extends('layouts.app')
@section('titleApp', 'Home')
@section('modal')
@endsection
@section('content')
    <!-- Header -->
    <header class="w3-container" style="padding-top:22px">
        <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
    </header>

    <div class="w3-row-padding w3-margin-bottom">
        <div class="w3-quarter">
            <div class="w3-container w3-red w3-padding-16">
                <div class="w3-left"><i class="fa fa-comment w3-xxxlarge"></i></div>
                <div class="w3-right">
                    <h3>{{ count($messages) }}</h3>
                </div>
                <div class="w3-clear"></div>
                <h4>Messages</h4>
            </div>
        </div>
        <div class="w3-quarter">
            <div class="w3-container w3-blue w3-padding-16">
                <div class="w3-left"><i class="fa fa-diamond w3-xxxlarge"></i></div>
                <div class="w3-right">
                    <h3>{{ count($products) }}</h3>
                </div>
                <div class="w3-clear"></div>
                <h4>Product</h4>
            </div>
        </div>
        <div class="w3-quarter">
            <div class="w3-container w3-teal w3-padding-16">
                <div class="w3-left"><i class="fa fa-handshake-o w3-xxxlarge"></i></div>
                <div class="w3-right">
                    <h3>{{ count($clients) }}</h3>
                </div>
                <div class="w3-clear"></div>
                <h4>Client</h4>
            </div>
        </div>
        <div class="w3-quarter">
            <div class="w3-container w3-orange w3-text-white w3-padding-16">
                <div class="w3-left"><i class="fa fa-bold w3-xxxlarge"></i></div>
                <div class="w3-right">
                    <h3>{{ count($blogs) }}</h3>
                </div>
                <div class="w3-clear"></div>
                <h4>Blog</h4>
            </div>
        </div>
    </div>
    <br>
    <div class="w3-panel">
        <div class="w3-row-padding" style="margin:0 -16px">
            <div class="w3-third">
                <h5>Image Upload Size</h5>
                <table class="w3-table w3-striped w3-white">
                    <tr>
                        <td><i class="fa fa-home w3-text-blue w3-large"></i></td>
                        <td>Name</td>
                        <td><i>Size</i></td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-diamond w3-text-blue w3-large"></i></td>
                        <td>Product</td>
                        <td><i>273 × 207</i></td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-file-image-o w3-text-red w3-large"></i></td>
                        <td>Gallery</td>
                        <td><i>241 × 163</i></td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-handshake-o w3-text-yellow w3-large"></i></td>
                        <td>Client</td>
                        <td><i>146 × 155</i></td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-bold w3-text-red w3-large"></i></td>
                        <td>Blog</td>
                        <td><i>273 × 207</i></td>
                    </tr>
                </table>
            </div>
            <div class="w3-twothird">
                <h5>Last Update</h5>
                <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
                    <tr>
                        <td><i class="fa fa-comment w3-text-red w3-large"></i></td>
                        <td>Message</td>
                        <td><i>@if($last_message) {{ date('jS F, Y h:i A', strtotime($last_message->created_at) ) }}@else None @endif</i></td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-diamond w3-text-blue w3-large"></i></td>
                        <td>Product</td>
                        <td><i>@if($last_product){{ date('jS F, Y h:i A', strtotime($last_product->created_at) ) }} @else None @endif</i></td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-file-image-o w3-text-red w3-large"></i></td>
                        <td>Gallery</td>
                        <td><i>@if($last_gallery){{ date('jS F, Y h:i A', strtotime($last_gallery->created_at) ) }} @else None @endif</i></td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-handshake-o w3-text-yellow w3-large"></i></td>
                        <td>Client</td>
                        <td><i>@if($last_client){{ date('jS F, Y h:i A', strtotime($last_client->created_at) ) }} @else None @endif</i></td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-bold w3-text-red w3-large"></i></td>
                        <td>Blog</td>
                        <td><i>@if($last_blog){{ date('jS F, Y h:i A', strtotime($last_blog->created_at) ) }} @else None @endif</i></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <hr>


    <div class="w3-container">
        @if($last_message)
            <h5>Last Message <span class="w3-opacity w3-medium">({{ date('jS F, Y h:i A', strtotime($last_message->created_at) ) }})</span></h5>
            <div class="w3-row">
                <div class="w3-col m10 w3-container">
                    <h4>{{ $last_message->name }} <span class="w3-opacity w3-medium">({{ $last_message->email }} {{ $last_message->phone }})</span></h4>
                    <p><pre style="white-space: initial;font-size: 100%;text-align: left; overflow-x: auto; white-space: pre-wrap;white-space: -moz-pre-wrap;white-space: -pre-wrap;white-space: -o-pre-wrap;word-wrap: break-word;">{{ $last_message->message }}</pre></p><br>
                </div>
            </div>
        @else
            <h5>Last Message <span class="w3-opacity w3-medium"></span></h5>
            <div class="w3-row">
                <div class="w3-col m10 w3-container">
                    <h4 class="text-danger">No Message</h4>
                </div>
            </div>
        @endif
    </div>
    <br>
@endsection
@section('script')
@endsection

