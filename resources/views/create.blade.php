@extends('master')

@section('content')

@if($errors->any())

<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)

        <li>{{ $error }}</li>

        @endforeach
    </ul>
</div>

@endif

<div class="card">
    <div class="card-header">
        <span>Add Mobile</span>
        <a href="{{ route('mobiles.index') }}" class="btn btn-primary btn-sm float-end">Back to list</a>
    </div>
    <div class="card-body">
        <form method="post" action="{{ route('mobiles.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Mobile Name</label>
                <div class="col-sm-10">
                    <input type="text" name="mobile_name" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Model</label>
                <div class="col-sm-10">
                    <input type="text" name="model" class="form-control" />
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Maker</label>
                <div class="col-sm-10">
                    <select name="maker" class="form-control">
                        <option value="Apple">Apple</option>
                        <option value="Samsung">Samsung</option>
                    </select>
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Mobile Image</label>
                <div class="col-sm-10">
                    <input type="file" name="mobile_image" />
                </div>
            </div>
            <div class="text-center">
                <input type="submit" class="btn btn-primary" value="Add" />
            </div>
        </form>
    </div>
</div>

@endsection('content')