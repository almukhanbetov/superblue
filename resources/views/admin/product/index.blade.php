@extends('admin.layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Бағдарламалау тілдері</h4>
                    <p class="card-description">
                        @if(session('success'))
                            <div class="alert alert-success">
                                <h4>{{session('success')}}</h4>
                            </div>
                         @endif
                    </p>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>
                                    #ID
                                </th>
                                <th>
                                    Модель
                                </th>
                                <th>
                                    Категория
                                </th>
                                <th>
                                    Материал
                                </th>
                                <th>
                                    Наружный диаметр мм.
                                </th>
                                <th>
                                    Внутренний диаметр мм.
                                </th>
                                <th>
                                    Высота мм.
                                </th>

                                <th>
                                    Скобы
                                </th>
                                <th>
                                    Сильфон
                                </th>

                                <th>
                                    Фото
                                </th>
                                <th>
                                    Действия
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>
                                    {{$product->id}}
                                </td>
                                <td>
                                    {{$product->name}}
                                </td>
                                <td>
                                    {{$product->group->name}}
                                </td>
                                <td>
                                    {{$product->material}}
                                </td>
                                <td>
                                    {{$product->outside_diam}}
                                </td>
                                <td>
                                    {{$product->inside_diam}}
                                </td>
                                <td>
                                    {{$product->height}}
                                </td>
                                <td>
                                    {{$product->scoba}}
                                </td>
                                <td>
                                    {{$product->silfon}}
                                </td>

                                <td>
                                    <img src="{{asset('/frut/img/'.$product->image)}}" alt="">
                                </td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="{{route('admin.product.view', $product)}}">
                                        <i class="fas fa-folder">
                                        </i>
                                    </a>
                                    <a class="btn btn-info btn-sm" href="{{route('admin.product.edit', $product)}}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                    </a>
                                    <form action="{{route('admin.product.delete', $product)}}" method="post" style="display: contents">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" id="delete-btn">
                                            <i class="fas fa-trash-alt">
                                            </i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
