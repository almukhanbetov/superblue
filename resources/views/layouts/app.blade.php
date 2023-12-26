<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>ООО "Мехатроник"</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <link href="{{asset('/landing/img/favicon.ico')}}" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{asset('/landing/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('/landing/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/landing/css/style.css')}}" rel="stylesheet">
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
<div class="container-fluid gray  py-5 bg-hero img-cont w-100" style="margin-bottom: 90px;"  >
    <div class="container py-5 ">
        <div class="row justify-content-start">
            <div class="col-lg-8 text-center text-lg-start ">
                <h1 class="display-1 p-2" style="color: var(--light); text-transform: uppercase; text-shadow: 0 3px 8px #000; ">Мехатроник</h1>
                <p class="fs-4 text-light mb-4 p-2 fw-bold" style="text-shadow: 0 3px 5px #000; text-transform: uppercase;">Является официальным дилером PRI Super Blue Technology</p>
                <div class="pt-2">
                    <a href="" class="btn btn-secondary rounded-pill py-md-3 px-md-5 mx-2">Связаться  с нами</a>
                    <a href="" class="btn btn-success rounded-pill py-md-3 px-md-5 mx-2">Сделать заявку</a>
                </div>
            </div>
            <div class="col-lg-4 cont-video">
                <video width="500" height="300" controls autoplay loop>
                    <source src="{{asset('/landing/video/1.mp4')}}" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
</div>

@yield('content')

<div class="container-fluid bg-dark bg-footer text-light py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-violet">ООО "Мехатроник"</h4>
                <hr class="w-25 text-secondary mb-4" style="opacity: 1;">
                <p class="mb-4">Является официальным дилером PRI Super Blue Technology</p>
                <p class="mb-2"><i class="fa fa-map-marked-alt text-violet  me-3"></i>Россия</p>
                <p class="mb-2"><i class="fa fa-envelope text-violet me-3"></i>Mechatronic22@mail.ru</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-violet me-3"></i>+7 963 610 80 30</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-violet me-3"></i>+7 963 620 80 30</p>                </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-primary">ИП Мустафина</h4>
                <hr class="w-25 text-secondary mb-4" style="opacity: 1;">
                <p class="mb-4">Является официальным дилером PRI Super Blue Technology</p>
                <p class="mb-2"><i class="fa fa-map-marked-alt text-primary me-3"></i>Казахстан</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i>info.mtspart@gmail.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary me-3"></i>+7 707 138 73 50</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary me-3"></i>+7 707 182 94 92</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-primary">Быстрые ссылки</h4>
                <hr class="w-25 text-secondary mb-4" style="opacity: 1;">
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Главная</a>
                    <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>О нас</a>
                    <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Наши услуги</a>
                    <a class="text-light" href="#"><i class="fa fa-angle-right me-2"></i>Контакты</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-primary">Связаться с нами</h4>
                <hr class="w-25 text-secondary mb-4" style="opacity: 1;">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control p-3 border-0" placeholder="Your Email">
                        <button class="btn btn-gray">Отправить</button>
                    </div>
                </form>
                <h6 class="text-primary mt-4 mb-3">Социальные сети</h6>
                <div class="d-flex">
                    <a class="btn btn-lg gray btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-whatsapp"></i></a>
                    <a class="btn btn-lg gray btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg gray btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-telegram"></i></a>
                    <a class="btn btn-lg gray btn-lg-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid gray text-dark py-4">
    <div class="container">
        <div class="row g-0">
            <div class="col-md-6 text-center text-md-start">
                <p class="mb-md-0" style="color: #000;">Copyright &copy; <a class="fw-bold" href="#" style="color: #000" >Complex Services</a>. All Rights Reserved.</p>
            </div>
            <div class="col-md-6 text-center text-md-end">
            </div>
        </div>
    </div>
</div>
<a href="#" class="btn btn-lg btn-secondary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/landing/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('/landing/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('/landing/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('/landing/js/main.js')}}"></script>
</body>
</html>
