@extends('admin.layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Продукты</h4>
                    <form action="{{route('admin.product.store')}}" class="forms-sample" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Аты</label>
                            <input type="text" class="form-control"  name="name" placeholder="Аты">
                        </div>
                        <div class="form-group">
                            <label>Цена</label>
                            <input type="number" class="form-control"  name="price" placeholder="Цена">
                        </div>
                        <div class="form-group">
                            <label for="group">Категория</label>
                            <select class="form-control custom-select" name="group_id">
                                <option disabled>Выбрать</option>
                                @foreach($categories as $group)
                                    <option value="{{$group->id}}">{{$group->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="text">Контент</label>
                            <textarea class="form-control" name="content" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="file">Сурет</label>
                            <input type="file" class="form-control" name="image">
                        </div>
                        <div class="form-group">
                            <label for="file">Видео</label>
                            <input type="file" class="form-control" name="video">
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Сақтау</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
