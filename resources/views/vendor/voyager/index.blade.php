@extends('voyager::master')

@section('content')
    <div class="page-content">
        @include('voyager::alerts')
        @include('voyager::dimmers')
        <div class="panel center">
            <div class="panel-content">
                {{ menu('test', 'bootstrap') }}
            </div>
        </div>
    </div>
@stop

@section('javascript')



@stop
