@extends('layouts.default')

@section('css')
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-6">
                <div class="card">
                    <img src="{{asset('images/product01.jpg')}}" alt="" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text">
                            <br>
                            價格：元
                        </p>
                        <hr>
                        <button class="btn btn-success btn-sm float-right"><i class="fas fa-cart-plus mr-2"></i>加入</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection