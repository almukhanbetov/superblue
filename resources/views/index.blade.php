@extends('layouts.app')
@section('content')
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row gx-0 mb-3 mb-lg-0">
                <div class="col-lg-6 my-lg-5 py-lg-5">
                    <div class="about-start  p-5" style="background-color: #c8c8c8;">
                        <h1 class="display-5 mb-4" style="text-transform: uppercase; color: #0097d7;">Pri Super Blue</h1>
                        <p style="font-weight: bold; color: #000;  font-size: 20px;">Компания Printing Research, Inc. (PRI), расположенная в Далласе,
                            штат Техас, является производителем Super Blue,
                            самой успешной и первой в мире системы защиты от маркировки,
                            которую нельзя стирать, в полиграфической отрасли.
                            Более 350 000 установок систем Super Blue по всему миру подтверждают производительность и
                            надежность продукта.</p>
                        <a href="" class="btn btn-secondary rounded-pill py-md-3 px-md-5 mt-4">Связаться с нами</a>
                    </div>
                </div>
                <div class="col-lg-6" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute h-100" src="{{asset('/landing/img/about-1.jpg')}}" style="object-fit: cover;">
                    </div>
                </div>
            </div>
            <div class="row gx-0">
                <div class="col-lg-6" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute  w-100" src="{{asset('/landing/img/about-2.jpg')}}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 my-lg-5 py-lg-5">
                    <div class="about-end  p-5" style="background-color: #c8c8c8;">
                        <h1 class="display-5 mb-4" style="color: #0097d7; text-transform: uppercase;">Pri Titan?</h1>
                        <p style="color: #000; font-weight: bold; font-size: 20px;">TITAN для LONG-переворотных прессов и LS ДЛЯ переворотных прессов
                            прессы Легко очищаются с помощью пресс-мойки или MRC
                            Способен выдерживать температуру до 900 градусов по Фаренгейту.
                            Заменяет оригинальные и черные рубашки печатных цилиндров.
                            REFINED для КОРОТКИХ переворотных прессов</p>
                        <ul class="titan-ul">
                            <li><p>Корпуса печатных цилиндров TITAN & REFINED доступны для максимальной доводки.</p></li>
                            <li><p>Текстура поверхности откалибрована для достижения наилучшего качества печати.</p></li>
                            <li><p>Наше верхнее покрытие более прочное и долговечное, чем у конкурентов.</p></li>
                        </ul>
                        <a href="" class="btn btn-secondary rounded-pill py-md-3 px-md-5 mt-4">Связаться с нами</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h1 class="display-5">Используем следующие печатные оборудование</h1>
                <hr class="w-25 mx-auto text-primary" style="opacity: 1;">
            </div>
            <div class="row gy-4 gx-3">
                <div class="col-lg-4 col-md-6 pt-5">
                    <div class="service-item d-flex flex-column align-items-center justify-content-center text-center p-5 pt-0">
                        <div class="service-icon p-3">
                            <div><i class="fa fa-2x fa-layer-group"></i></div>
                        </div>
                        <h3 class="mt-5">Heidelberg</h3>
                        <a class="btn shadow-none" href="#" style="color: #e5048a; font-size: 30px; font-weight: bold;"><i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-5">
                    <div class="service-item d-flex flex-column align-items-center justify-content-center text-center p-5 pt-0">
                        <div class="service-icon p-3">
                            <div><i class="fa fa-2x fa-marker"></i></div>
                        </div>
                        <h3 class="mt-5">Ryobi</h3>
                        <a class="btn shadow-none" href="#"  style="color: #e5048a; font-size: 30px; font-weight: bold;"><i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-5">
                    <div class="service-item d-flex flex-column align-items-center justify-content-center text-center p-5 pt-0">
                        <div class="service-icon p-3">
                            <div><i class="fa fa-2x fa-brush"></i></div>
                        </div>
                        <h3 class="mt-5">KBA</h3>
                        <a class="btn shadow-none" href="#"  style="color: #e5048a; font-size: 30px; font-weight: bold;"><i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-5">
                    <div class="service-item d-flex flex-column align-items-center justify-content-center text-center p-5 pt-0">
                        <div class="service-icon p-3">
                            <div><i class="fa fa-2x fa-eraser"></i></div>
                        </div>
                        <h3 class="mt-5">Komori</h3>
                        <a class="btn shadow-none" href="#"  style="color: #e5048a; font-size: 30px; font-weight: bold;"><i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-5">
                    <div class="service-item d-flex flex-column align-items-center justify-content-center text-center p-5 pt-0">
                        <div class="service-icon p-3">
                            <div><i class="fa fa-2x fa-spray-can"></i></div>
                        </div>
                        <h3 class="mt-5">Мitsubishi</h3>
                        <a class="btn shadow-none" href="#"  style="color: #e5048a; font-size: 30px; font-weight: bold;"><i class="bi bi-arrow-right ms-1"></i></a>
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
                                    <input type="text" class="form-control bg-light border-0" placeholder="Ваше Имя" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control bg-light border-0" placeholder="Ваша почта" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-light border-0 py-3" rows="2" placeholder="Ввести"></textarea>
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
    <div class="container-fluid  bg-call-to-action-1 py-5" style="margin-top: 90px; background-color: #c8c8c8;">
        <div class="container py-5">
            <div class="row g-0 justify-content-start">
                <div class="col-lg-10">
                    <h1 class="display-5 mb-4" style="color: #0097d7; text-transform: uppercase;">super blue 2</h1>
                    <p class="fs-4 fw-bold " style="color: #000; z-index: 99;">Original w/Stripes</p>
                    <ul class="bead">
                        <li>Поддается растягиванию</li>
                        <li>Имеют полосы выравнивания</li>
                        <li>Можно обрезать по размеру (при необходимости)</li>
                        <li>Оригинальный продукт</li>
                    </ul>
                    <a href="" class="btn btn-secondary rounded-pill py-md-3 px-md-5 mt-4">Связаться с нами</a>
                </div>
            </div>
        </div>
    </div>
@endsection


