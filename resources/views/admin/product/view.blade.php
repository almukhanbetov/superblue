@extends('admin.layouts.admin')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{$subject->name}}</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
            {{--            <div class="card-header">--}}
            {{--                <h3 class="card-title">{{$subject->name}}</h3>--}}
            {{--            </div>--}}
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                        <div class="row">
                            <div class="col-12">
                                <div class="post">
                                    <div class="user-block">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="{{asset('storage/subject/'.$subject->video)}}" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    <p class="mt-3">
                                    <h4 href="#" class="link-black text-sm"></i>Видео сабақ</h4>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                        <h3 class="text-primary"><i class="fas fa-paint-brush"></i> {{$subject->title}}</h3>
                        <p class="text-muted">{{$subject->content}}</p>
                        <br>
                        <img class="img-circle img-bordered-sm" src="{{asset('storage/subject/'.$subject->image)}}" alt="user image" width="200" height="150">
                        <div class="text-muted mt-2">
                            <p class="text-sm">Мұғәлім аты:
                                <b class="d-block">Хасен Рауан</b>
                            </p>
                            <h5 class="text-muted">ТЕСТІЛЕУ
                                <b class="d-block mt-2"><a href="{{route('admin.test.index')}}" class="btn btn-primary ">ТЕСТ</a></b>
                            </h5>
                            <div class="text-muted mt-2">
                                <h5 class="text-muted">Зертханалық тапсырма
                                    <b class="d-block mt-2"><a href="{{route('admin.lesson.index')}}" class="btn btn-primary ">ӨТУ</a></b>
                                </h5>
                        </div>

                        <h5 class="mt-2 text-muted">Үй тапсырмасы:</h5>
                        <ul class="list-unstyled">
                                <form action="{{route('tekser.index')}}" enctype="multipart/form-data" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Студент аты" class="form-control">
                                        <label for="file"></label>
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-10">Сақтау</button>
                                </form>

                            <li>
                                <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-phone"></i> Скайп, Зум</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



