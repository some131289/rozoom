@extends('simulator.layouts.app_simulator', ['breadcrumb' => false])


@section('content')
   <div class="container" id="cabinet">
        <div class="box-shadow">
            <ul class="nav nav-tabs box-shadow-header d-flex align-items-center mt-3" id="exampleTabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="activity-tab" data-toggle="tab" href="#create" role="tab"
                       aria-controls="create" aria-selected="false">Дисциплины</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="statistics-tab" data-toggle="tab" href="#all" role="tab"
                       aria-controls="all" aria-selected="false">Тренажеры</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="users_examples-tab" data-toggle="tab" href="#users_examples" role="tab"
                       aria-controls="users_examples" aria-selected="false">Задания</a>
                </li>
            </ul>
            <div class="tab-content mt-4" id="exampleTabs">
                <div class="tab-pane fade show active" id="create" role="tab" aria-labelledby="create">
                    {{--@include('simulator.disciplines.index')--}}
                    <p>Дисциплины</p>
                    <a href="{{route('simulator.discipline.index')}}" class="btn btn-block btn-outline-secondary">Дисциплины</a>
                    <a href="{{route('simulator.category.index')}}" class="btn btn-block btn-outline-secondary">Тренажеры</a>
                </div>
                <div class="tab-pane fade" id="all" role="tab" aria-labelledby="all">
                    <p>Тренажеры</p>
                    <a href="#" class="btn btn-block btn-outline-secondary">Создать тренажер</a>
                </div>
                <div class="tab-pane fade" id="users_examples" role="tab" aria-labelledby="users_examples">
                    <p>Задания</p>
                    <a href="#" class="btn btn-block btn-outline-secondary">Создать задание</a>
                </div>
            </div>
        </div>
    </div>

@endsection