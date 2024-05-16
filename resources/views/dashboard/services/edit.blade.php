@extends('dashboard.base')

@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Service</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('services.update', $service->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label>Name</label>
                                <input class="form-control" type="text" placeholder="Name" name="name" required autofocus value="{{ $service->name }}" />
                            </div>
                            <div class="form-group row">
                                <label>Code</label>
                                <input class="form-control" type="text" placeholder="Code" name="code" required value="{{ $service->code }}" />
                            </div>
                            <div class="form-group row">
                                <label>Category</label>
                                <input class="form-control" type="text" placeholder="Category" name="category" required value="{{ $service->category }}" />
                            </div>
                            <div class="form-group row">
                                <label>Price</label>
                                <input class="form-control" type="text" placeholder="Price" name="price" required value="{{ $service->price }}" />
                            </div>
                            <button class="btn btn-success" type="submit">Edit</button>
                            <a href="{{ route('services.index') }}" class="btn btn-primary">Return</a>
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