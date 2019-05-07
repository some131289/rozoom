@extends('simulator.layouts.app_simulator', ['breadcrumb' => false])

@section('content')

<div class="container">
    @component('simulator.components.breadcrumb')
        @slot('title') Список тренажеров @endslot
        @slot('parent') Главная @endslot
        @slot('active') Тренажеры @endslot
    @endcomponent
    <hr>
    <a href="{{route('simulator.category.create')}}" class="btn btn-danger"><i class="far fa-plus-square"> Создать</i></a>
    <table class="table table-striped">
        <thead>
            <th>ID</th>
            <th>Класс</th>
            <th>Дисциплина</th>
            <th>Название</th>
            <th>Автор</th>
            <th>Создано</th>
            <th>Видимость</th>
            <th>Опции</th>
        </thead>
        <tbody>
            @forelse ($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->class}}</td>
                    <td>{{$category->id}}</td>
                    <td>{{$category->title}}</td>
                    <td>{{$category->author}}</td>
                    <td>{{$category->created_at}}</td>
                    <td>{{$category->active}}</td>
                    <td><a href="{{route('simulator.category.edit', ['id'=>$category->id])}}">
                            <i class="fa fa-edit"></i>
                        </a></td>
                </tr>
            @empty
                <td colspan="3" class="text-center"> <h2>Нет тренажеров</h2></td>
            @endforelse
        </tbody>
        <tfoot>
        <tr>
            <td colspan="3">
                <ul class="pagination pull-right">
                    {{$categories->links()}}
                </ul>
            </td>
        </tr>
        </tfoot>
    </table>
</div>

@endsection