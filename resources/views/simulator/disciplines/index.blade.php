@extends('simulator.layouts.app_simulator', ['breadcrumb' => false])

@section('content')

    <div class="container">
        @component('simulator.components.breadcrumb')
            @slot('title') Список дисциплин @endslot
            @slot('parent') Главная @endslot
            @slot('active') Дисциплины @endslot
        @endcomponent
        <hr>
        <a href="{{route('simulator.discipline.create')}}" class="btn btn-danger"><i class="far fa-plus-square"> Создать</i></a>
        <table class="table table-striped">
            <thead>
            <th>ID</th>
            <th>Название</th>
            <th>Видимость</th>
            <th>Опции</th>
            </thead>
            <tbody>
            @forelse ($disciplines as $discipline)
                <tr>
                    <td>{{$discipline->id}}</td>
                    <td>{{$discipline->title}}</td>
                    <td>{{$discipline->active}}</td>
                    <td><a href="{{route('simulator.discipline.edit', ['id'=>$discipline->id])}}">
                            <i class="fa fa-edit fa-1x text-warning"></i>
                        </a></td>
                </tr>
            @empty
                <td colspan="3" class="text-center"> <h2>Нет дисциплин</h2></td>
            @endforelse
            </tbody>
            <tfoot>
            <tr>
                <td colspan="3">
                    <ul class="pagination pull-right">
                        {{$disciplines->links()}}
                    </ul>
                </td>
            </tr>
            </tfoot>
        </table>
    </div>

@endsection