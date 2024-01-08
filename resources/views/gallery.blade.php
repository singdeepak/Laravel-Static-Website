@extends('layout')

@section('content')
    <div class="container">
        <div class="row py-5 g-4">
            <div class="col-3"><img src="{{asset('static/images/one.jpg')}}" class="img-fluid"></div>
            <div class="col-3"><img src="{{asset('static/images/two.jpg')}}" class="img-fluid"></div>
            <div class="col-3"><img src="{{asset('static/images/three.jpg')}}" class="img-fluid"></div>
            <div class="col-3"><img src="{{asset('static/images/one.jpg')}}" class="img-fluid"></div>
            <div class="col-3"><img src="{{asset('static/images/two.jpg')}}" class="img-fluid"></div>
            <div class="col-3"><img src="{{asset('static/images/three.jpg')}}" class="img-fluid"></div>
            <div class="col-3"><img src="{{asset('static/images/one.jpg')}}" class="img-fluid"></div>
            <div class="col-3"><img src="{{asset('static/images/two.jpg')}}" class="img-fluid"></div>
        </div>

        <div class="row">
            <div class="col text-center">
                <button class="btn btn-primary">Load ...</button>
            </div>
        </div>
    </div>
@endsection