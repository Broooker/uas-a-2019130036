@extends('layouts.master')
@section('title', 'Edit')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <br>
            <div class="pull-left">
                <h2 align="center"><strong>Edit Author</strong></h2>
            </div>
            <br>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('menus.index') }}"> Back</a><br>
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

    <form action="{{ route('menus.update', $menu->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <label for="id">Id</label>
                <input type="text" class="form-control" name="id"
                        id="id" value="{{ old('id') ?? $menu->id }}" placeholder="Id">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama"
                        id="nama" value="{{ old('nama') ?? $menu->nama }}" placeholder="Nama">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="rekomendasi">Rekomendasi</label>
                    <input type="checkbox" class="form-check-input form-control" name="rekomendasi" id="rekomendasi"
                        value="1"
                        @if (old('rekomendasi') == null) @if ($menu->rekomendasi)
                            checked @endif
                    @else {{ old('rekomendasi') == 'true' ? 'checked' : '' }} @endif
                    placeholder="Rekomendasi">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" class="form-control" name="harga" id="harga"
                        value="{{ old('harga') ?? $menu->harga }}" min="0" placeholder="Harga">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
