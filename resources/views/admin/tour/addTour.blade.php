@extends('adminlte::page')
@section('tittle', 'Admin')
@section('content')
            <div class="agileits-top">
            <h1>{{ trans('tour.addTour') }}</h1>
                @include('shared/error')
                {!! Form::open(['method' => 'POST', 'url' => 'admincp/addTour', 'enctype' => 'multipart/form-data']) !!}
                    {!! Form::text(
                        'name',
                        old('name'),
                        [
                            'placeholder' => trans('tour.Name'),
                            'class' => 'text form-control',
                        ])
                    !!}
                    {!! Form::date(
                        'start_at',
                        old('start_at'),
                        [
                            'placeholder' => trans('rate.start_at'),
                            'class' => 'text w3lpass form-control',
                            'id' => 'start_at',
                            'style'=> 'width:96%'
                        ]) 
                    !!}
                        {!! Form::text(
                        'stay_date_number',
                        old('stay_date_number'),
                        [
                            'placeholder' => trans('tour.stay_date_number'),
                            'class' => 'text w3lpass form-control',
                        ])
                    !!}
                    {!! Form::text(
                        'price',
                        old('price'),
                        [
                            'placeholder' => trans('tour.price'),
                            'class' => 'text w3lpass form-control',
                        ])
                    !!}
                    {!! Form::select('rate_id', $rates, null, ['class'=>'']) !!}
                    {!! Form::textarea(
                        'description',
                        old('description'),
                        [
                            'placeholder' => trans('tour.description'),
                            'class' => 'text w3lpass form-control',
                        ])
                    !!}
                    <!-- chon file anh -->
                    <label for="imgInp" class="clone">
                        {!! Html::image('none.jpg', 'upload photo', array('class' => 'image_rounded imgId', 'id' => 'imgId', 'width' => '400px', 'height' => '280px' ))!!}
                    </label>
                    {!! Form::hidden('pathPhoto', null, array('class' => 'pathPhoto', 'id' => 'pathPhoto')) !!}
                    {!! Form::file('image_path', array('id' => 'imgInp', 'accept' => 'image/x-png, image/jpeg')) !!}
                    {!! Form::hidden('_token', csrf_token()) !!}
                    <!-- form chon file anh -->
                    {!! Form::text(
                        'slot',
                        old('slot'),
                        [
                            'placeholder' => trans('tour.slot'),
                            'class' => 'text w3lpass form-control',
                        ])
                    !!}
                    {!! Form::text(
                        'transport',
                        old('transport'),
                        [
                            'placeholder' => trans('tour.transport'),
                            'class' => 'text w3lpass form-control',
                        ])
                    !!}
                    {!! Form::text(
                        'priceKid',
                        old('priceKid'),
                        [
                            'placeholder' => trans('tour.priceKid'),
                            'class' => 'text w3lpass form-control',
                        ])
                    !!}
                    {!! Form::text(
                        'type',
                        old('type'),
                        [
                            'placeholder' => trans('tour.type'),
                            'class' => 'text w3lpass form-control',
                        ])
                    !!}
                    {!! Form::text(
                        'pricekidsup',
                        old('pricekidsup'),
                        [
                            'placeholder' => trans('tour.priceKid'),
                            'class' => 'text w3lpass form-control',
                        ])
                    !!}
                    {!! Form::submit(trans('rate.add')) !!}
                {!! Form::close() !!}
            </div>
@endsection
@section('js1')
    <script src="https://code.jquery.com/jquery-1.12.0.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="{{ asset('bower_components/myBootstrap-design/cssBookTour/js/uploadImage.js') }}"></script>
@endsection