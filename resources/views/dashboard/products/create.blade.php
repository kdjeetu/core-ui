@extends('dashboard.base')

@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Product</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('products.store') }}">
                            @csrf
                            <div class="form-group row">
                                <label>Name</label>
                                <input class="form-control" type="text" placeholder="Name" name="name" required autofocus />
                            </div>
                            <div class="form-group row">
                                <label>Cost</label>
                                <input class="form-control" type="text" placeholder="Cost" name="Cost" required />
                            </div>
                            <div class="form-group row">
                                <label>Product Code</label>
                                <input class="form-control" type="text" placeholder="product_code" name="product_code" required />
                            </div>
                            <button class="btn btn-success" type="submit">Add</button>
                            <a href="{{ route('products.index') }}" class="btn btn-primary">Return</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('javascript')

@endsection