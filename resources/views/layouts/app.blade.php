<!DOCTYPE html>
<html>
<title>@yield('titleApp')</title>
<!-- FAVICON -->
<link rel="shortcut icon" href="{{ asset('templet/img/FILogo.png') }}" type="image/x-icon" >
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/rowgroup/1.1.2/css/rowGroup.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
    <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
    <span class="w3-bar-item w3-right"><a href="{{ URL('/') }}" target="_blank"><img src="{{ asset('templet/img/FILogo(2).png') }}" width="30" height="30"></a></span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:250px;" id="mySidebar"><br>
    <div class="w3-container w3-row">
        <div class="w3-col s4">
            <img src="https://www.w3schools.com/w3images/avatar2.png" class="w3-circle w3-margin-right" style="width:46px">
        </div>
        <div class="w3-col s8 w3-bar">
            <span>Welcome,<br> <strong>{{ Auth::user()->name }}</strong></span><br>
            <!--<a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
            <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>-->
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
               document.getElementById('logout-form').submit();" class="w3-bar-item w3-button">Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>
    <hr>
    @yield('modal')
    <div class="w3-bar-block">
        <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
        <a href="{{ URL('/home') }}" class="w3-bar-item w3-button w3-padding @if (URL::current() == URL('/home')) w3-blue @endif"><i class="fa fa-home"></i>&nbsp;&nbsp;&nbsp;&nbsp;Home</a>
        <a href="{{ route('product') }}" class="w3-bar-item w3-button w3-padding @if (URL::current() == route('product')) w3-blue @endif"><i class="fa fa-diamond"></i>&nbsp;&nbsp;&nbsp;Product</a>
        <a href="{{ route('gallery') }}" class="w3-bar-item w3-button w3-padding @if (URL::current() == route('gallery')) w3-blue @endif"><i class="fa fa-file-image-o"></i>&nbsp;&nbsp;&nbsp;&nbsp;Gallery</a>
        <a href="{{ route('client') }}" class="w3-bar-item w3-button w3-padding @if (URL::current() == route('client')) w3-blue @endif"><i class="fa fa-handshake-o"></i>&nbsp;&nbsp;&nbsp;Client</a>
        <a href="{{ route('blog') }}" class="w3-bar-item w3-button w3-padding @if (URL::current() == route('blog')) w3-blue @endif"><i class="fa fa-bold"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blog</a>
        <a href="{{ route('contact') }}" class="w3-bar-item w3-button w3-padding @if (URL::current() == route('contact')) w3-blue @endif"><i class="fa fa-user-circle-o"></i>&nbsp;&nbsp;&nbsp;&nbsp;Contact</a>
        <a href="{{ URL('/') }}" target="_blank" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>&nbsp;&nbsp;Main Page</a><br><br>
    </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">
@yield('content')


    <!-- End page content -->
</div><br><br><br>
<!-- Footer start -->
<footer style="position: fixed;bottom: 0;background-color: #e0e0e0; width: 100%;text-align: center;">
    <p style="margin-top: 10px">&copy; FarmImagination 2021. All rights reserved. <span class="fa fa-heart"></span>  Design and developed by <a href="https://www.facebook.com/mindplanar/" target="https://www.facebook.com/mindplanar/">Mind Planar</a> </p>
</footer>
<style>
    #required_str{
        color: red;
        font-weight: bold;
    }
</style>
<!-- Footer end -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/rowgroup/1.1.2/js/dataTables.rowGroup.min.js"></script>

<script>
    // Get the Sidebar
    var mySidebar = document.getElementById("mySidebar");

    // Get the DIV with overlay effect
    var overlayBg = document.getElementById("myOverlay");

    // Toggle between showing and hiding the sidebar, and add overlay effect
    function w3_open() {
        if (mySidebar.style.display === 'block') {
            mySidebar.style.display = 'none';
            overlayBg.style.display = "none";
        } else {
            mySidebar.style.display = 'block';
            overlayBg.style.display = "block";
        }
    }

    // Close the sidebar with the close button
    function w3_close() {
        mySidebar.style.display = "none";
        overlayBg.style.display = "none";
    }
</script>
<script>
    $('.modal').on('shown.bs.modal', function() {
        //Make sure the modal and backdrop are siblings (changes the DOM)
        $(this).before($('.modal-backdrop'));
        //Make sure the z-index is higher than the backdrop
        $(this).css("z-index", parseInt($('.modal-backdrop').css('z-index')) + 1);
    });
</script>
<script>
    function checkDelete(){
        return confirm('Are you sure to Delete this?');
    }
</script>
@yield('script')

</body>
</html>
