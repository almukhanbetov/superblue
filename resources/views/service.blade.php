@extends('layouts.app')
@section('content')
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 500px;">
            <h1 class="display-5">Наши Услуги</h1>
            <hr class="w-25 mx-auto text-primary" style="opacity: 1;">
        </div>

        <div class="row gy-4 gx-3">
            @foreach($groups as $group)
            <div class="col-lg-4 col-md-6 pt-5">
                <div class="service-item d-flex flex-column align-items-center justify-content-center text-center p-5 pt-0">
                    <div class="service-icon p-3">
                        <div><i class="fa fa-2x fa-layer-group"></i></div>
                    </div>
                    <h3 class="mt-5">Heidelberg</h3>
                    <a class="btn shadow-none" href="#" style="color: #e5048a; font-size: 30px; font-weight: bold;"><i class="bi bi-arrow-right ms-1"></i></a>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row gx-0">
            <div class="col-lg-6" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="{{asset('/landing/img/about-4.jpg')}}" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 my-lg-5 py-lg-5">
                <div class="about-end  p-5" style="background-color: #c8c8c8;">
                    <h1 class="display-5 mb-4" style="text-transform: uppercase; color: #0097d7;">{{$group->name}}</h1>
                    <p class="fw-bold" style="color: #000;">Комплекты1 для трансферных
                        цилиндров состоят из многоразовых
                        сеток Super Blue 2. Данная модель
                        доступна в двух форматах: для
                        Heidelberg и Komori на липучке и для
                        Generic на самоклеющейся ленте.</p>
                    <p class="fw-bold" style="color: #000;"> - Многоразовая и гибкая</p>
                    <p class="fw-bold" style="color: #000;"> - Полосы выравнивания</p>
                    <p class="fw-bold" style="color: #000;"> - Масло и водоотталкивающее</p>
                    <p class="fw-bold" style="color: #000;"> - Быстрая установка</p>

                    <a href="" class="btn btn-secondary rounded-pill py-md-3 px-md-5 mt-4">Связаться с нами</a>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="container-fluid  bg-call-to-action py-5" style="margin-top: 90px; background-color: #c8c8c8;">
    <div class="container py-5">
        <div class="row g-0 justify-content-start">
            <div class="col-lg-10">
                <h1 class="display-5 mb-4" style="color: #0097d7; text-transform: uppercase;">Glass Bead Technology</h1>
                <p class="fs-4 fw-bold " style="color: #000; z-index: 99;">Blue Glass & Super Smooth SEE Smooth</p>
                <ul class="bead">
                    <li>Покрытие состоит из микроскопических стеклянных шариков</li>
                    <li>Уникально разработанное покрытие</li>
                    <li>Износостойкое, не впитывает краску</li>
                    <li>Моющаяся</li>
                    <li>Такие шарики называются Blue Glass</li>
                    <li>Heidelberg одобрил технические характеристики
                        самостоятельных рубашек</li>
                </ul>
                <a href="" class="btn btn-secondary rounded-pill py-md-3 px-md-5 mt-4">Связаться с нами</a>
            </div>
        </div>
    </div>
</div>
@endsection
