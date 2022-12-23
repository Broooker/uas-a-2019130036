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
                <h2 align="center"><strong>WELCOM</strong></h2>
            </div>
            <br>
            <div class="pull-left">
                <a class="btn btn-success" href="{{ route('menus.create') }}"> Add New Menu</a>
            </div>
            <br>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('main.index') }}"> Back</a><br>
            </div>
            <br>
        </div>
    </div><br>

    <div class="row">
        <div class="col-md-5 mb-3">
            <div class="table-responsive">
                <div class="table-wrapper"><br>
                    <table class="table table-striped table-hover table-bordered">
                        <thead class="thead-dark">
                            <tr>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>

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
                    <table class="table table-striped table-hover table-bordered">
                        <thead class="thead-dark">
                            <h5>Request Your Order Here</h5>
                        </thead>
                        <tbody class="pull-right">
                            <div class="text-center">
                                <a class="btn btn-primary" href="{{ route('orders.index') }}" role="button">Order List</a>
                            </div>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection
