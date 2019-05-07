@extends('simulator.layouts.app_simulator', ['breadcrumb' => false])

@section('content')
    <div class="container">
        @component('simulator.components.breadcrumb')
            @slot('title') Список тренажеров @endslot
            @slot('parent') Главная @endslot
            @slot('active') Тренажеры @endslot
        @endcomponent
        <hr>
        <form class="form-horizontal" action="{{route('simulator.category.store')}}" method="post">
            {{ csrf_field() }}
            @include('simulator.categories.partials.form')
        </form>
    </div>
@endsection