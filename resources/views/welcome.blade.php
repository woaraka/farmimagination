<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FarmImagination</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" href="{{ asset('templet/img/FILogo.png') }}" type="image/x-icon" >
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kalam:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Just+Another+Hand" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('templet/css/bootstrap.min.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('templet/css/animate.min.css') }}">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="{{ asset('templet/css/font-awesome.min.css') }}">
    <!-- Slick Slider CSS -->
    <link rel="stylesheet" href="{{ asset('templet/slick/slick.css') }}">
    <!-- Reset CSS -->
    <link rel="stylesheet" href="{{ asset('templet/css/reset.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('templet/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('templet/css/responsive.css') }}">
    <!-- The Farm House colors. We have chosen the color Vermilion for this default
          page. However, you can choose any other color by changing color css file.
    -->
    <link rel="stylesheet" type="text/css" href="{{ asset('templet/css/colors/default-vermilion.css') }}">
    <!-- <link rel="stylesheet" type="text/css" href="css/colors/shamrock.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="css/colors/keylimepie.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="css/colors/scooter.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="css/colors/goldengrass.css"> -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="js">
<!-- Page loader -->
<!--<div id="preloader"></div>-->
<!-- header area start -->
<header class="farm-navbar-area">
    <nav class="navbar navbar-expand-sm">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggler collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">&#x2630;</button>
                <a class="navbar-brand"
                   href="#home">
                    <img src="{{ asset('templet/img/FILogo(20).png') }}" alt="">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav menu navbar-nav ml-auto">
                    <li class="current-menu-item nav-item"><a href="#home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item"><a href="#about" class="nav-link">About</a>
                    </li>
                    <li class="nav-item"><a href="#product" class="nav-link">products</a>
                    </li>
                    <li class="nav-item"><a href="#prices" class="nav-link">prices</a>
                    </li>
                    <li class="nav-item"><a href="#gallery" class="nav-link">gallery</a>
                    <li class="nav-item"><a href="#testimonials" class="nav-link">Services</a>
                    </li>  <li class="nav-item"><a href="#sponsor" class="nav-link">clients</a>
                    </li>
                    <li class="nav-item"><a href="#bloger" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item"><a href="#faq" class="nav-link">FAQ&#xB4;s</a>
                    </li>
                    <li class="nav-item"><a href="#contact" class="nav-link"><span class="fa fa-pencil-square-o"></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header><!-- header area end -->
<!-- slider area start -->
<section class="farm-welcome-text wow fadeIn" id="home">
    <div class="farm-home-slider-area">
        <div class="farm-home-slider">
            <div class="farm-slider-item">
                <img src="{{ asset('templet/img/home-slider/slide-1.jpeg') }}" alt="">
                <div class="item-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="welcome-text-content">
                                    <div class="weltext">
                                        <h2 class="welcome-text"><h2 class="dia">Absolutely   Pesticide Free.</h2></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="farm-slider-item">
                <img src="{{ asset('templet/img/home-slider/slide-2.JPG') }}" alt="">
                <div class="item-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="welcome-text-content">
                                    <div class="weltext">
                                        <h2 class="welcome-text"><h2 class="dia">First ever Vertical Farming in controlled
                                                environment in Bangladesh.</h2></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="farm-slider-item">
                <img src="{{ asset('templet/img/home-slider/slider-3.JPG') }}" alt="">
                <div class="item-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="welcome-text-content">
                                    <div class="weltext">
                                        <h2 class="welcome-text"><h2 class="dia">No Preservative  & No Insecticide</h2></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="farm-slider-item">
                <img src="{{ asset('templet/img/home-slider/slider-4.jpeg') }}" alt="">
                <div class="item-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="welcome-text-content">
                                    <div class="weltext">
                                        <h2 class="welcome-text"><h2 class="dia">We bring Garden  at your Home - Pluck & Eat.</h2></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="farm-slider-item">
                <img src="{{ asset('templet/img/home-slider/slider-5.jpeg') }}" alt="">
                <div class="item-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="welcome-text-content">
                                    <div class="weltext">
                                        <h2 class="welcome-text"><h2 class="dia">Least possible to plate thus more nutritious.</h2></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="farm-slider-item">
                <img src="{{ asset('templet/img/home-slider/slider-6.jpeg') }}" alt="">
                <div class="item-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="welcome-text-content">
                                    <div class="weltext">
                                        <h2 class="welcome-text"><h2 class="dia">Vertical Farming in Controlled environment– The Future Farming option for Bangladesh.</h2></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="farm-social-icon">
        <a href="https://www.facebook.com/FarmImagination-101518515344798" target="_blank" class="fa fa-facebook"></a>
        <a href="https://www.linkedin.com/" target="_blank" class="fa fa-linkedin-square"></a>
        <a href="https://www.youtube.com/channel/UCywquWJAhfzFndaLNqZWHXA" target="_blank" class="fa fa-youtube"></a>
    </div>
</section><!-- slider area end -->
<!-- about area start -->
<section id="about" class="farm-about-us">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="farm-faqs-title">
                    <h2 class="content-title">About Us</h2>
                </div>
                <div class="farm-house-accourdion">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel">
                            <div class="card-header" role="tab" id="headingEleven">
                                <h4 class="card-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven" aria-expanded="true" aria-controls="collapseEleven">
                                        <h4> Who we are? </h4>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseEleven" class="panel-collapse collapse show" role="tabpanel"
                                 aria-labelledby="headingEleven">
                                <div class="card-body">
                                    <p>At FarmImagination, we are working hard to build Farms beyond Imagination. For now, we are not planning to build a farm in the space but we are interested to build farms needed for Bangladesh in the post immediate future era. As such, we are exploring those farming and alternative food sources, and their related sectors.</p> <p> In FarmImagination, we are fast tracking the farming of Bangladesh to the future
                                    <hr>		FarmImagination’s selection of fruits, vegetables, spices, herbs and exotic produce will be grown in an organic, pesticide free environment. The product mix for each facility will be “customized” to meet the individual needs of high-end restaurants, catering companies and luxury produce retailers in each local market.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="card-header" role="tab" id="headingTwelve">
                                <h4 class="card-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">What are we working on now?</a>
                                </h4>
                            </div>
                            <div id="collapseTwelve" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="headingTwelve">
                                <div class="card-body">
                                    <p>			<p>Recently, we have constructed a Plant Factory with Artificial Light (PFAL) in a 4,000 square
                                        - feet building. We grow different kinds of leafy greens and herbs in controlled environment.
                                        We are using a 5-layered vertical farm hydroponic agriculture system. </p>	<br>
                                    <h4>The Vertical Advantage:</h4>
                                    <li>Vertical farming and/or hydroponics can produce about 10 times the amount of produce per acre,
                                        per year, than a traditional soil farmer. This type of growing uses 70 to 90 percent less water
                                        than a field farmer as the water is recirculated and goes straight to the plants, resulting in
                                        minimal evaporation.</li>
                                    <li>Plants receive all of their needs from the environment of their grow rooms. Temperature, humidity,
                                        Carbon-di-oxide, air current speed, aeration, and nutrition level are provided and controlled for
                                        optimum growth of the plants.</li>
                                    <li>Artificial LED lights of appropriate spectrum and intensities are provided to replace the sunlight. </li>
                                    <li>No Pesticide and Diseases: Most pests and diseases are soil-borne; however, hydroponics is soilless.
                                        The plants are super clean, fresh, healthy, and nutritious. We can just pluck and eat those crunchy
                                        leafy and herbs. </li>
                                    <p>We are also conducting market research on alternative food sources.</p></p>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="card-header" role="tab" id="headingThirteen">
                                <h4 class="card-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">Future Farming of Bangladesh:</a>
                                </h4>
                            </div>
                            <div id="collapseThirteen" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="headingThirteen">
                                <div class="card-body">
                                    <p><p>We can ask Why FarmImagination’s farming technique is the future farming for Bangladesh? The answer is </p>
                                    <li>Bangladesh is a small country of 144,000 square kilometers with a population of 167 million. To house
                                        this ever-growing enormous population, cultivable land is decreasing by 1% each year. Also, total
                                        land area is likely to, significantly, shrink due to the sea-level rising caused by the global warming.
                                        Within less than a decade, the cultivable lands will not be sufficient for growing staple crops, rice,
                                        let alone the leafy greens and vegetables. As such, Bangladesh needs to grow crops vertically to
                                        multiply the cultivable land. Indoor Vertical farming is the solution for protecting the forest
                                        while keeping sufficient land for staple crops. That is what we are doing at FarmImagination. </li>
                                    <li>Hydroponic growing allows crops that would traditionally be a mono crop to have multiple yields each
                                        season. This strategy also allows us to grow coveted “out of season” crops. </li>
                                    <li>Cyclone, drought, flood, hurricane, etc. are the common phenomenon in Bangladesh. These are increasing
                                        day by day due to climate change. The controlled environment agriculture initiated by FarmImagination
                                        can grow crops round the year without any impact from the harsh climate. </li>
                                    <li>Farming vertically, in the open field, is not sustainable as only the top layer of the farm will
                                        receive sunlight. Plants on the other layers will not receive any sunlight thus will not thrive.
                                        As such, vertical farming has to be complimented by artificial light. That is what we are doing in
                                        FarmImagination. </li></p>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="card-header" role="tab" id="headingFourteen">
                                <h4 class="card-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">What are our future outlooks?</a>
                                </h4>
                            </div>
                            <div id="collapseFourteen" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="headingFourteen">
                                <div class="card-body">
                                    <p> <li>Vertical farming with artificial light of staple crops (rice and wheat) and exotic fruits  </li>
                                    <li>High-tech and superior quality animal farming </li>
                                    <li>High-tech and superior quality fish farming </li>
                                    <li>Research and develop all kinds of alternative farming and food solutions</li></p>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="card-header" role="tab" id="headingFifteen">
                                <h4 class="card-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">Our Vision & Our Mission</a>
                                </h4>
                            </div>
                            <div id="collapseFifteen" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="headingFifteen">
                                <div class="card-body">
                                    <p><h4>Our Vision</h4>
                                    <li>Always be the Forerunner of Innovative and Revolutionary farming solution in Bangladesh and compete worldwide</li>
                                    <h4>Our Mission</h4>
                                    <li>Research, develop and implement innovative urban farming solution for safer, fresher, and cleaner produces in large quantities and inspire urban and rural farmers</li></p>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="card-header" role="tab" id="headingSixteen">
                                <h4 class="card-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">Our Objectives</a>
                                </h4>
                            </div>
                            <div id="collapseSixteen" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="headingSixteen">
                                <div class="card-body">
                                    <p>	<li>Research, develop, and implement hydroponic, aeroponic, and geoponic vertical farming for yielding  large quantity of produces in small space</li>
                                    <li>Implement these farming projects in controlled environment to eliminate weather effect and produce off season crops</li>
                                    <li>Reduce import dependency of vegetables and fruits thus prevent currency drain</li>
                                    <li>Produce crops without pesticides for consumer safety and safe environment</li>
                                    <li>Reduce farm to plate time thereby ensuring fruits and vegetables are more fresh, clean, and nutrition rich</li>
                                    <li>Providing those farming solutions at an affordable price to the interested farmers</li>
                                    <li>Sell the farming solutions to the international market for bringing remittance to our country</li>
                                    <li>Train interested farmers on those farming systems to create a revolution in farming</li>
                                    <li>Always work hard to innovate new farming solutions</li></p>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="card-header" role="tab" id="headingSeventeen">
                                <h4 class="card-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen">Our Core Values</a>
                                </h4>
                            </div>
                            <div id="collapseSeventeen" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="headingSeventeen">
                                <div class="card-body">
                                    <p>		<li>Innovation</li>
                                    <li>Food Safety</li>
                                    <li>Environment Safety</li>
                                    <li>Quality and Quantity</li>
                                    <li>Consumer Satisfaction</li>
                                    <li>Grow with Others</li>
                                    <li>Commitment</li>
                                    <li>Reliability</li></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="farm-about-img wow zoomIn">
                    <img class="aboutp" src="{{ asset('templet/img/abouto.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section><!-- about area end -->
<!-- product area start -->
<section id="product" class="farm-latest-products">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="farm-section-title">
                    <h2 class="section-title">Latest Products</h2>
                    <h4>Directly from the farm, freshly grown for our clients.</h4>
                </div>
            </div>
        </div>
        <div class="farm-product-slider">
            @for($i = 0; $i< count($products); $i++)
                @if($products[$i]['latest'])
                    <div class="row product-select">
                        @for($j = $i+1 ; $j <= count($products) ; $j++,$i++)
                            @if($j%4 == 1)
                                <div class="col-md-6">
                                    <div class="farm-single-product">
                                        <div class="single-product">
                                            <img src="{{ asset('/storage/product_photo/'.$products[$i]['photo']) }}" alt="">
                                        </div>
                                        <div class="product-free">
                                        <!--<img src="{{ asset('templet/img/latest-products/pro-icon-1.png') }}" alt="" >-->
                                        </div>
                                        <div class="hover-product"><a href="#contact"><h2>{{ $products[$i]['name'] }}</h2>@if($products[$i]['price'])Available @else coming soon... @endif <h3>Order now</h3></a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if($j%4 == 2)
                                <div class="col-md-6">
                                    <div class="farm-single-product">
                                        <div class="single-product">
                                            <img src="{{ asset('/storage/product_photo/'.$products[$i]['photo']) }}" alt="">
                                        </div>
                                        <div class="product-free">
                                        <!--<img src="{{ asset('templet/img/latest-products/pro-icon-2.png') }}" alt="">-->
                                        </div>
                                        <div class="hover-product"><a href="#contact"><h2>{{ $products[$i]['name'] }}</h2>@if($products[$i]['price'])Available @else coming soon... @endif <h3>Order now</h3></a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if($j%4 == 3)
                                <div class="col-md-6">
                                    <div class="farm-single-product">
                                        <div class="single-product">
                                            <img src="{{ asset('/storage/product_photo/'.$products[$i]['photo']) }}" alt="">
                                        </div>
                                        <div class="product-free">
                                        <!--<img src="{{ asset('templet/img/latest-products/pro-icon-3.png') }}" alt="">-->
                                        </div>
                                        <div class="hover-product"><a href="#contact"><h2>{{ $products[$i]['name'] }}</h2>@if($products[$i]['price'])Available @else coming soon... @endif <h3>Order now</h3></a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if($j%4 == 0)
                                <div class="col-md-6">
                                    <div class="farm-single-product">
                                        <div class="single-product">
                                            <img src="{{ asset('/storage/product_photo/'.$products[$i]['photo']) }}" alt="">
                                        </div>
                                        <div class="product-free">
                                        <!--<img src="{{ asset('templet/img/latest-products/pro-icon-4.png') }}" alt="">-->
                                        </div>
                                        <div class="hover-product"><a href="#contact"><h2>{{ $products[$i]['name'] }}</h2>@if($products[$i]['price'])Available @else coming soon... @endif <h3>Order now</h3></a>
                                        </div>
                                    </div>
                                </div>
                                @break
                            @endif
                        @endfor
                    </div>
                @endif
            @endfor

        </div>
    </div>
</section><!-- product area end -->
<!-- prices area start -->
<section id="prices" class="farm-pricing-list">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="farm-pricing-table wow zoomIn">
                    <table>
                        <thead>
                        <tr class="table-heading">
                            <th>product</th>
                            <th>price</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>@if($product->price)৳{{ $product->price }}/{{ $product->unit }} @else Contact Us @endif</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="mx-md-auto col-lg-7 col-md-6">
                <div class="farm-price-content">
                    <h2 class="content-title">Price List</h2>
                    <!--<h4>We can build system as per your requirement &amp; We also provide consultancy for your farm. </h4>-->
                    <!--<h4>For now we accept order for more than 2 kg. <a href="#contact">Please call or e-mail us</a>  and order your lettuce as per your requirement.</h4>-->
                    <div class="contact-botton text-left wow zoomIn">	<a href="#contact">Contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- prices area end -->
<!-- portfolio area start -->
<section id="gallery" class="farm-portfolio-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="farm-section-title">
                    <h2 class="section-title">Photo Gallery</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="farm-project-nav">
                <ul>
                    <li class="active" data-filter="*">all</li>
                    @foreach($gallery_class as $gallery)
                        <li data-filter=".{{ $gallery->class }}">{{ $gallery->category }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!-- Product section start -->
        <div class="farm-project-active">
            @foreach($galleries as $gallery)
                <div class="farm-single-project {{ $gallery->class }}">
                    <div class="project-img">
                        <img src="{{ asset('/storage/gallery_photo/'.$gallery->photo) }}" alt="">
                        <div class="project-weight">
                            <h4>{{ $gallery->description }}</h4>
                        </div>
                    </div>
                    <h4>{{ $gallery->name }}</h4>
                </div>
            @endforeach
        </div>
    </div>
</section><!-- portfolio area end -->
<!-- testimonial top area start -->
<section id="testimonials" class="farm-client-says-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bloc">&#x200B;&#x200C;<span>&#x201C;</span>
                </div>
                <div class="single-client-btn">	<a href="#" class="client-btn">Our Services</a>
                </div>
            </div>
        </div>
        <div class="row blocquate-slick">
            <div class="col-12 col-md-11 text-right">
                <div class="single-client">
                    <h2>System Construction</h2>
                    <h3>We can build system as per your requirement
                        Just call or e-mail us and give us your requirement</h3>
                    <h2>Consultancy</h2>
                    <h3>We also provide consultancy for your farm
                        For details call us or e-mail us</h3>
                </div>
            </div>
            <div class="col-12 col-md-11 text-right">
                <div class="single-client">
                    <h2>Training</h2>
                    <h3>We provide training on following:</h3>

                    <h4>•	Soilless vertical farming
                        •	System design
                        •	Controlled Environment Agriculture
                        •	Controlled Environment Greenhouse Farming
                        •	Farm Management through IoT.
                    </h4>
                </div>
            </div>
        </div>
    </div>
</section><!-- testimonial top area end -->
<!-- sponsor area start -->
<div id="sponsor" class="farm-sponsor-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div> <h2 class="content-title">Valued Clients</h2>
                </div>
                <div class="sponsor-slider-active">
                    @foreach($clients as $client)
                        <div class="farm-single-sponsor">
                            <a href="#" title="{{ $client->name }}"><img src="{{ asset('/storage/client_photo/'.$client->photo) }}" alt=""></a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div><!-- sponsor area end -->
<!-- Blog area start -->
<section id="bloger" class="farm_blog">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="col-md-6">
                    <h2 class="content-title">Blog</h2>
                </div>
            </div>
        </div>
        <div class="row blocquate-slick">
            @foreach($blogs as $blog)
                <div class="col-6 col-md-12 text-right">
                    <div class="single-client">
                        <div class="col-sm-12">
                            <div class="farm-about-img wow zoomIn">
                                <img class="blog_img" src="{{ asset('/storage/blog_photo/'.$blog->photo) }}"  alt="" width="500" height="300">
                            </div>
                        </div>
                        <div class="container">
                            <div class="col-6 col-md-12 text-rignt">
                                <div class="ex3">
                                    <div class="col-6 col-md-12 text-right">
                                        <h1 class="text-center font-weight-bold"><u>{{ $blog->headline }}</u></h1><br></div>
                                    <div class="col-6 col-md-12 text-left">
                                        <h3><pre style="white-space: initial;color:white;font-size: 70%;text-align: left; overflow-x: auto; white-space: pre-wrap;white-space: -moz-pre-wrap;white-space: -pre-wrap;white-space: -o-pre-wrap;font-family:Arial, Helvetica, sans-serif;word-wrap: break-word;">{{ $blog->details }}</pre></h3></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Blog area end -->
<!-- faq area start -->
<section id="faq" class="farm-faqs-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="farm-faqs-title">
                    <h2 class="content-title">Questions</h2>
                </div>
                <div class="farm-house-accourdion">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel">
                            <div class="card-header" role="tab" id="headingOne">
                                <h4 class="card-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Why should I buy FarmImagination’s product?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse show" role="tabpanel"
                                 aria-labelledby="headingOne">
                                <div class="card-body">
                                    <p>The season is 20 weeks long for the Downtown Windsor Farmer&#x2019;s Market, running May 28th to October 8th, Sat from 8am-1pm.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="card-header" role="tab" id="headingTwo">
                                <h4 class="card-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">What are the special feature of FarmImagination?</a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="headingTwo">
                                <div class="card-body">
                                    <p>The season is 20 weeks long for the Downtown Windsor Farmer&#x2019;s Market, running May 28th to October 8th, Sat from 8am-1pm.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="card-header" role="tab" id="headingThree">
                                <h4 class="card-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Why the FarmImagination’s products are costlier than other product?</a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="headingThree">
                                <div class="card-body">
                                    <p>The season is 20 weeks long for the Downtown Windsor Farmer&#x2019;s Market, running May 28th to October 8th, Sat from 8am-1pm.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="card-header" role="tab" id="headingFour">
                                <h4 class="card-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">Why FarmImagination’s farming technic is future farming option for Bangladesh?</a>
                                </h4>
                            </div>
                            <div id="collapsefour" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="headingFour">
                                <div class="card-body">
                                    <p>The season is 20 weeks long for the Downtown Windsor Farmer&#x2019;s Market, running May 28th to October 8th, Sat from 8am-1pm.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="card-header" role="tab" id="headingFive">
                                <h4 class="card-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="false" aria-controls="collapsefive">Why FarmImagination’s farming technic is environment friendly?</a>
                                </h4>
                            </div>
                            <div id="collapsefive" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="headingFive">
                                <div class="card-body">
                                    <p>The season is 20 weeks long for the Downtown Windsor Farmer&#x2019;s Market,
                                        running May 28th to October 8th, Sat from 8am-1pm.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="card-header" role="tab" id="headingSix">
                                <h4 class="card-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">Do you sell the growing system?</a>
                                </h4>
                            </div>
                            <div id="collapseSix" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="headingSix">
                                <div class="card-body">
                                    <p>The season is 20 weeks long for the Downtown Windsor Farmer&#x2019;s Market, running May 28th to October 8th, Sat from 8am-1pm.</p>
                                </div>
                            </div>
                        </div>                        <div class="panel">
                            <div class="card-header" role="tab" id="headingSeven">
                                <h4 class="card-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">Do you in-part training on Vertical Farming in controlled environment?</a>
                                </h4>
                            </div>
                            <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="headingSeven">
                                <div class="card-body">
                                    <p>The season is 20 weeks long for the Downtown Windsor Farmer&#x2019;s Market, running May 28th to October 8th, Sat from 8am-1pm.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="tometo-man wow zoomIn">
                    <img src="{{ asset('templet/img/question/faq-right1.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section><!-- faq area end -->
<!-- contact area start -->
<section id="contact" class="farm-contact-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="farm-section-title">
                    <h2 class="section-title">Contact Details</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <form id="contact-form" method="post" action="{{ route('contact.store') }}">
                    @csrf
                    <div class="farm-contact-form">
                        <!-- IF MAIL SENT SUCCESSFULLY -->
                        <div id="succMessage" class="text-success"></div>
                        <!-- IF MAIL SENDING UNSUCCESSFULL
                        -->
                        <div class="error">E-mail must be valid and message must be longer than 1 character.</div>
                        <div class="single-inputc">
                            <label for="lname">Name</label>
                            <input type="text" id="name" name="name" placeholder="Name*" required="required">
                        </div>
                        <div class="single-inputc">
                            <label for="lname">Email</label>
                            <input type="email" id="email_address" name="email_address" placeholder="Email*"
                                   required="required">
                        </div>
                        <div class="single-inputc">
                            <label for="lname">Phone Number</label>
                            <input type="text" id="phone_number" name="phone_number" placeholder="Phone">
                        </div>
                        <div class="porpose">
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                            <label for="lname">Purpose of massage</label>
                            <select class="porpose-select"
                                    id="contact_reason" name="contact_reason" required>
                                <option value="">Purpose*</option>
                                <option value="General Query">General Query</option>
                                <option value="Product">Product</option>
                                <option value="Service">Service</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="text-area">
                            <label for="lname">Leave your massage</label>
                            <textarea id="message" name="message" placeholder="Message ..."></textarea>
                        </div>
                        <div class="single-submit">
                            <input onClick="getResponse()" type="submit" name="submits" id="submits" value="Contact Us">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="single-contact">
                    <div class="contact-icon">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <div class="contact-content">
                        <h3>Our Location</h3>
                        <p><a class="hyp"  href="https://www.google.com/maps/place/33,+7+Milk+Vita+Rd,+%E0%A6%A2%E0%A6%BE%E0%A6%95%E0%A6%BE+1216/@23.8156624,90.3638598,17z/data=!3m1!4b1!4m5!3m4!1s0x3755c128a5ed2a63:0x6881882eb2eb3aac!8m2!3d23.8194493!4d90.361137" target="_blank">House-33, Milk Vita Road, Section-7, Pallabi, Mirpur, Dhaka-1216.</a></p>
                    </div>
                </div>
                <div class="single-contact">
                    <div class="contact-icon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="contact-content">
                        <h3>Phone &amp; What's app</h3>
                        <p><a class="hyp"  href="https://web.whatsapp.com" target="_blank">(+880) 1841-990251</a></p>
                    </div>
                </div>
                <div class="single-contact">
                    <div class="contact-icon">
                        <i class="fa fa-envelope-o"></i>
                    </div>
                    <div class="contact-content">
                        <h3>Our Email</h3>
                        <p> <a class="hyp" href="mailto:info@farmimagination.com" target="_blank">info@farmimagination.com</a> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- app area end -->
<!-- footer area start -->
<footer class="copyright-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <p>&copy; FarmImagination 2021. All rights reserved. <span class="fa fa-heart"></span>  Design and developed by <a href="https://www.facebook.com/mindplanar/" target="https://www.facebook.com/mindplanar/">Mind Planar</a> </p>
            </div>
        </div>
    </div>
</footer><!-- footer area end -->
<!-- scrolltotop start -->
<div>
    <a href="#" class="scrollToTop text-center" >
        <i class="scroll-fa fa fa-angle-up" aria-hidden="true"></i>
    </a>
</div><!-- scrolltotop end -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    function getResponse()
    {
        var _token = $('input[name="_token"]').val();
        var name = $("#name").val();
        var email = $("#email_address").val();
        var phone = $("#phone_number").val();
        var reason = $("#contact_reason").val();
        var message = $("#message").val();
        if(name != "" && email != ""  && reason != "" && message != "")
        {
            $.ajax({
                type: "POST",
                url: "{{ route('contact.store') }}",
                data: {name: $("#name").val(), email: $("#email_address").val(), phone: $("#phone_number").val(), reason: $("#contact_reason").val(),message: $("#message").val(), _token:_token},
                success: function(data){
                    $("#succMessage").html(data);

                    $("#name").val("");
                    $("#email_address").val("");
                    $("#phone_number").val("");
                    $("#contact_reason").val("");
                    $("#message").val("");
                }
            });
        }
    }
</script>
<!-- jQuery min JS -->
<script src="{{ asset('templet/js/jquery.min.js') }}"></script>
<!-- jQuery Easing JS -->
<script src="{{ asset('templet/js/jquery.easing.1.3.js') }}"></script>
<!-- Bootstra JS -->
<script src="{{ asset('templet/js/bootstrap.min.js') }}"></script>
<!-- jQuery Nav JS -->
<script src="{{ asset('templet/js/jquery.nav.js') }}"></script>
<!-- jQuery Sticky JS -->
<script src="{{ asset('templet/js/jquery.sticky.js') }}"></script>
<!-- jQuery Isotop JS -->
<script src="{{ asset('templet/js/isotope.pkgd.min.js') }}"></script>
<!-- jQuery Slick JS -->
<script src="{{ asset('templet/slick/slick.min.js') }}"></script>
<!-- Parallax JS -->
<script src="{{ asset('templet/js/parallax.min.js') }}"></script>
<!-- WOW JS active -->
<script src="{{ asset('templet/js/wow-1.3.0.min.js') }}"></script>
<!-- jQuery active JS -->
<script src="{{ asset('templet/js/main.js') }}"></script>
</body>
</html>
<style>
    .hyp:link {
        color: rgb(255, 255, 255);
        background-color: transparent;
        text-decoration: none;
    }
    .hyp:visited {
        color: rgb(255, 255, 255);
        background-color: transparent;
        text-decoration: none;
    }
    .hyp:hover {
        color: #ff4301;
        background-color: transparent;
        text-decoration: none;
    }
    .hyp:active {
        color: #ff4301;
        background-color: transparent;
        text-decoration: underline;
    }
    .blog_img {
        border-radius: 8px;
    }

    div.ex3 {
        width: 500px;
        height: 350px;
        overflow: auto;
        padding: 10px;
    }



    /*About us galarry start*/
    .aboutp{
        padding: 100px 25px 25px 25px;
    }
    .dia{
        float: none;
        font-family:Arial;
        text-shadow: 2px 2px 5px black;
        padding-top: 40%;
        display: block;
    }
    @media only screen and (max-width:800px) {
        /* For tablets: */
        .dia {
            float: none;
            font-family:Arial;
            font-size:18px;
            text-shadow: 2px 2px 5px black;
            padding-top: 12%;
            display: block;
        }

    }
    @media only screen and (max-width:500px) {
        /* For mobile phones: */
        .dia{
            font-family:Arial;
            font-size:20px;
            text-shadow: 2px 2px 5px black;
            padding-top: 20%;
            display: block;
        }
    }

</style>
<script>
    // Get the modal
    var modalo = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modalo.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modalo.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modalo) {
            modalo.style.display = "none";
        }
    }


</script>
<!--Mind planar.-->
<!--Directed by Mostafizur Rahman kafy-->
<!--Design & Developed  by Enam Ahmed Suhash Leon , Woaraka Been Mahbub Nowfel (Woaraka). -->

