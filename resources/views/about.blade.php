@extends('layouts.app')
@section('content')
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row gx-0 mb-3 mb-lg-0">
                <div class="col-lg-6 my-lg-5 py-lg-5">
                    <div class="about-start  p-5" style="background-color: #c8c8c8;">
                        <h1 class="display-5 mb-4" style="color: #0097d7;">ООО "Мехатроник" является официальным дилером PRI Super Blue Technology</h1>
                        <p class="fw-bold" style="color: #000; font-size: 20px;">Микроскопические стеклянные шарики из анти-маркировочной рубашки
                            BLUE GLASS, разработанные с точными допусками, специально разработаны
                            для уменьшения контакта поверхности со свежим отпечатанным листом.
                            Однородная поверхность анти-маркировочной пленки BLUE GLASS
                            обеспечивает равномерную поддержку всей подложки. Рубашка обладает
                            удивительной гибкостью и будет сохранять адгезию валиков даже в самых
                            интенсивных условиях, а наше запатентованное покрытие более прочное и
                            долговечное, чем антимаркирующие пленки с силиконовым покрытием.</p>
                        <p class="fw-bold" style="color: #000; font-size: 20px;">Вариант малых и больших форматов</p>
                        <p class="fw-bold" style="color: #000; font-size: 20px;">Рубашки закреплены зажимом или двухсторонней лентой</p>
                        <a href="" class="btn btn-secondary rounded-pill py-md-3 px-md-5 mt-4">Связаться с нами</a>
                    </div>
                </div>
                <div class="col-lg-6" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{asset('/landing/img/about-1.jpg')}}" style="object-fit: cover;">
                    </div>
                </div>
            </div>
            <div class="row gx-0">
                <div class="col-lg-6" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{asset('/landing/img/about-3.jpg')}}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 my-lg-5 py-lg-5">
                    <div class="about-end  p-5" style="background-color: #c8c8c8;">
                        <h1 class="display-5 mb-4" style="color: #0097d7; text-transform: uppercase;">Net Technology Super Blue 2</h1>
                        <p class="fw-bold" style="color: #000; font-size: 20px;">Разработка Suher Blue 2 опирается на
                            основную идею о том, что когда краска
                            на листе бумаги вступает в контакт с
                            передаточным цилиндром, то краска
                            отталкивающие свойства позволяют
                            листу двигаться вместе с сеткой,
                            защищая его от любого отмарывания.
                            Suher Blue 2 работает на высоких
                            скоростях. Точно соответствует
                            конкретному формату и не требует
                            какой-либо обрезки. Изготавливаются
                            без дефектов, которые могут вызвать
                            неровную поверхность.</p>
                        <a href="" class="btn btn-secondary rounded-pill py-md-3 px-md-5 mt-4">Связаться с нами</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid  bg-quote py-5" style="margin: 90px 0; background-color: #c8c8c8;">
        <div class="container py-5">
            <div class="row g-0 justify-content-start">
                <div class="col-lg-6">
                    <div class="bg-white text-center p-5">
                        <h1 class="mb-4 fw-bold" style="color: #000; text-transform: uppercase;">Оставьте заявку</h1>
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Ваша Имя" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control bg-light border-0" placeholder="Ваша Фамилия" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-light border-0 py-3" rows="2" placeholder="Сообщение"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit" style=" text-transform: uppercase;">Отправить</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid  bg-call-to-action-2 py-5" style="margin-top: 90px; background-color: #c8c8c8;">
        <div class="container py-5">
            <div class="row g-0 justify-content-start">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-4" style="color: #0097d7;">SUPER BLUE 2</h1>
                    <p class="fs-4 fw-bold" style="color: #000; text-transform: uppercase;">StripeNet</p>
                    <ul class="bead">
                        <li>Без обрезки</li>
                        <li>Ровная и гладкая поверхность</li>
                        <li>Быстрая и простая установка</li>
                    </ul>
                    <a href="" class="btn btn-secondary rounded-pill py-md-3 px-md-5 mt-4">Связаться с нами</a>
                </div>
            </div>
        </div>
    </div>
@endsection
