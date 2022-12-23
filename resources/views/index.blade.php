@extends('layouts.master')
@section('title', 'Home')
@push('css_after')
<style>
</style>
@endpush
@section('content')

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('success') }}
        </div>
    @endif

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <br>
            <div class="pull-center">
                <h2 align="center"><strong>WELCOME TO YOUR HOME PAGE</strong></h2>
            </div>
        </div>
    </div><br>

    <div class="row">
        <div class="col-md-5 mb-3">
            <div class="table-responsive">
                <div class="table-wrapper"><br>
                    <div class="text-center">
                        <a class="btn btn-primary" href="{{ route('menus.index') }}" role="button">Menu List</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-2 mb-3">
        </div>
        <div class="col-md-5 mb-3">
            <div class="table-responsive">
                <div class="table-wrapper"><br>
                            <div class="text-center">
                                <a class="btn btn-primary" href="{{ route('orders.index') }}" role="button">Order List</a>
                            </div>
                </div>
            </div>
        </div>
    </div>


@endsection
