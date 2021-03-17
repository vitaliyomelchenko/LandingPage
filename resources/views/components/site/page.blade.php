
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">
    <title>Unique</title>
    <link rel="icon" href="{{asset('favicon.png')}}" type="image/png">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/font-awesome.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet" type="text/css">

<!--[if lt IE 9]>
        <script src="{{asset('assets/js/respond-1.1.0.min.js')}}"></script>
        <script src="{{asset('assets/js/html5shiv.js')}}"></script>
        <script src="{{asset('assets/js/html5element.js')}}"></script>
        <![endif]-->

</head>
<body>
<br>
<br>
<br>
<br>

<div class="inner_wrapper">
    <div class="container">
        <h2>{{ $data['title'] }}</h2>
        <div class="inner_section">
            <div class="row">
                <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right"><img src="{{ asset('assets/img/')."/".$data['page']->img }}" class="img-circle delay-03s animated wow zoomIn" alt=""></div>
                <div class=" col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left">
                    <div class=" delay-01s animated fadeInDown wow animated">
                        <h3>{{ $data['page']->name }}</h3><br/>
                        <p>{!! $data['page']->text !!}</p>
                    </div>
                    <div class="work_bottom"> <span>Want to know more..</span> <a href="#contact" class="contact_btn">Contact Us</a> </div>
                    <a href="{{ route('home') }}"><button style="margin-top: 25px;" class="btn btn-light ">Home</button></a>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="{{asset('assets/js/jquery-1.11.0.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery-scrolltofixed.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.nav.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.isotope.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/wow.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/custom.js')}}"></script>
</body>
</html>










