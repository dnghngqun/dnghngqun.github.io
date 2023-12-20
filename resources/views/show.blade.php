@extends('master')

@section('content')

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6"><b>Mobile Details</b></div>
            <div class="col col-md-6">
                <a href="{{ route('mobiles.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Mobile Name</b></label>
            <div class="col-sm-10">
                {{ $mobiles->mobile_name }}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Model</b></label>
            <div class="col-sm-10">
                {{ $mobiles->model }}
            </div>
        </div>
        <div class="row mb-4">
            <label class="col-sm-2 col-label-form"><b>Maker</b></label>
            <div class="col-sm-10">
                {{ $mobiles->maker }}
            </div>
        </div>
        <div class="row mb-4">
            <label class="col-sm-2 col-label-form"><b>Student Image</b></label>
            <div class="col-sm-10">
                <img src="{{ asset('images/' .  $mobiles->mobile_image) }}" width="200" class="img-thumbnail" />
            </div>
        </div>
    </div>
</div>

@endsection('content')