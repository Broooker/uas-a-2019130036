@extends('layouts.master')
@section('title', 'Add New Order')
@section('content')
    <br>
    <h2 align="center">Add New Order</h2><br>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('orders.index') }}"> Back</a><br>
            </div>
            <br>
    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
        @method('POST')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id:</strong>
                    <input type="text" name="id" class="form-control" placeholder="Id">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama:</strong>
                    <select class="form-control @error('status') is-invalid @enderror" name="status" id="status">
                        <option value="none" disabled selected>Status</option>
                        <option value="nama" {{ old('nama') == 'nama' ? 'selected' : '' }}>Bebek Goreng Kecap</option>
                        <option value="nama" {{ old('nama') == 'nama' ? 'selected' : '' }}>Ayam Bakar</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Rekomendasi:</strong>
                    <input type="checkbox" class="form-check-input form-control" name="rekomendasi" id="rekomendasi"
                        value="1" {{ old('rekomendasi') == 'true' ? 'checked' : '' }}>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Status:</strong>
                    <select class="form-control @error('status') is-invalid @enderror" name="status" id="status">
                        <option value="none" disabled selected>Status</option>
                        <option value="selesai" {{ old('status') == 'selesai' ? 'selected' : '' }}>Selesai</option>
                        <option value="pembayaran" {{ old('status') == 'pembayaran' ? 'selected' : '' }}>Menunggu Pembayaran
                        </option>
                    </select>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Harga:</strong>
                        <input type="number" class="form-control" name="harga" id="harga" placeholder="Harga">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </div>
        </div>
    </form>
@endsection
