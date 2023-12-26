@extends('admin.layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Өңдеу</h4>
                    <form action="{{route('admin.subject.update', $subject)}}" class="forms-sample" method="post" enctype="multipart/form-data">
                        @csrf
                        @method("PATCH")
                        <div class="form-group">
                            <label>Аты</label>
                            <input type="text" class="form-control"  name="name" placeholder="Аты" value="{{$subject->name}}">
                        </div>
                        <div class="form-group">
                            <label>Баға</label>
                            <input type="number" class="form-control"  name="price" placeholder="Цена">
                        </div>
                        <div class="form-group">
                            <label for="group">Категория</label>
                            <select class="form-control custom-select" name="category_id">
                                <option disabled>Таңдау</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="text">Контент</label>
                            <textarea class="form-control" name="content" rows="3">{{$subject->content}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="file">Сурет</label>
                            <input type="file" class="form-control" name="image">
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Сақтау</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
