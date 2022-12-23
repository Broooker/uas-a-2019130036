@extends('layouts.master')
@section('title', 'Show.Order')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <br>
            <div class="pull-left">
                <h2 align="center"><strong>Show Order</strong></h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('orders.index') }}"> Back</a><br>
            </div>
            <br>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group"><br>
                <strong>Id:</strong>
                {{ $order->id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status:</strong>
                <h5>
                    @if ($order->status == 'selesai')
                        <span class="badge badge-success">Pembayaran Selesai</span>
                    @else
                        <span class="badge badge-warning">Menunggu Pembayaran</span>
                    @endif
                </h5>
            </div>
        </div>
    </div>
@endsection
