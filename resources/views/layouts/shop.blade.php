<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fruitables - Vegetable Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('/frut/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('/frut/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('/frut/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('/frut/css/style.css')}}" rel="stylesheet">
</head>

<body>
<nav class="navbar  navbar-expand-lg bg-dark navbar-dark shadow-sm px-5 py-3 py-lg-0">
    <a href="{{route('welcome')}}" class="navbar-brand p-0">
        <h1 class="m-0 text-uppercase text-primary "><i class="fa fa-cog me-3" style="color: #e5048a;"></i>Мехатроник</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0 pe-4 border-end border-5 ">
            <a href="{{route('welcome')}}" class="nav-item nav-link active">Главная</a>
            <a href="{{route('about')}}" class="nav-item nav-link">О нас</a>
            <a href="{{route('service')}}" class="nav-item nav-link">Услуги</a>
            <a href="{{route('shop')}}" class="nav-item nav-link">Магазин</a>
            <div class="nav-item dropdown">

            </div>
            <a href="{{route('contact')}}" class="nav-item nav-link">Контакты</a>
        </div>
        <div class="d-none border-end  border-gray border-3  border-center d-lg-flex align-items-center ps-4">

            <i class="fa fa-2x fa-mobile-alt text-secondary me-3"></i>
            <div class="pe-3">
                <h5 class="text-violet mb-1 text-center"><small>Мехатроник</small></h5>
                <h6 class="text-light m-0">+7 963 610 80 30</h6>
                <h6 class="text-light m-0">+7 963 620 80 30</h6>
            </div>

            <div class="pe-3">
                <ul class="russia">
                    <h5 class="text-violet mb-1 text-center"><small>Россия</small></h5>
                    <li><i class="fa fa-1x fa-envelope text-light me-3"> mechatronic22@mail.ru</i></li>
                </ul>
            </div>
        </div>
        <div class="d-none border-center d-lg-flex align-items-center ps-4">
            <i class="fa fa-2x fa-mobile-alt text-secondary me-3"></i>
            <div class="pe-3">
                <h5 class="text-primary mb-1"><small>ИП Мустафина</small></h5>
                <h6 class="text-light m-0">+7 707 138 73 50</h6>
                <h6 class="text-light m-0">+7 707 182 94 92</h6>
            </div>
            <ul class="russia">
                <h5 class="text-primary mb-1 text-center"><small>Казахстан</small></h5>
                <li><i class="fa fa-1x fa-envelope text-light me-3"> info.mtspart@gmail.com</i></li>
            </ul>
        </div>

    </div>
</nav>
@yield('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/frut/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('/frut/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('/frut/lib/lightbox/js/lightbox.min.js')}}"></script>
<script src="{{asset('/frut/lib/owlcarousel/owl.carousel.min.js')}}"></script>

<!-- Template Javascript -->
<script src="{{asset('/frut/js/main.js')}}"></script>
</body>

</html>

