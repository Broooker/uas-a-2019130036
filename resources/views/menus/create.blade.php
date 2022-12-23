@extends('layouts.master')
@section('title', 'Create')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <br>
        <div class="pull-left">
            <h2 align="center"><strong>Add New Menu</strong></h2>
        </div>
        <br>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('menus.index') }}"> Back</a>
        </div>
        <br>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('menus.store') }}" method="POST">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Id:</strong>
                <input type="text" name="id" class="form-control" id="id" value="{{ old('id') }}"placeholder="Id">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama:</strong>
                <input type="text" name="nama" class="form-control" id="nama" value="{{ old('nama') }}" placeholder="Nama">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="rekomendasi">Rekomendasi</label>
                <input type="checkbox" class="form-check-input form-control" name="rekomendasi" id="rekomendasi" value="1" {{ old('rekomendasi') == 'true' ? 'checked' : '' }}>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" class="form-control" name="harga" id="harga" value="{{ old('harga') }}" min="0" placeholder="Harga">
                </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Add</button>
        </div>
    </div>

</form>
@endsection
