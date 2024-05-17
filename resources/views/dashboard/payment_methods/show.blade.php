@extends('dashboard.base')

@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Payment_Method: {{ $payment_method->name }}</h4>
                    </div>
                    <div class="card-body">
                        <h4>Name</h4>
                        <p>{{ $payment_method->name }}</p>
                        <h4>Status</h4>
                        <p>{{ $payment_method->status }}</p>
                        <a href="{{ route('payment_methods.index') }}" class="btn btn-primary">Return</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('javascript')

@endsection