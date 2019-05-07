@extends('simulator.layouts.app_simulator', ['breadcrumb' => false])

@section('content')
    <div class="container">
        @component('simulator.components.breadcrumb')
            @slot('title') Список дисциплин @endslot
            @slot('parent') Главная @endslot
            @slot('active') Дисциплины @endslot
        @endcomponent
        <hr>
            <form class="form-horizontal" action="{{route('simulator.discipline.store')}}" method="post">
                {{ csrf_field() }}
                @include('simulator.disciplines.partials.form')
            </form>
    </div>
@endsection