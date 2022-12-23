@extends('layouts.master')
@section('title', 'Order')
@push('css_after')
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
                <h2 align="center"><strong>ORDER LIST</strong></h2>
            </div>
            <br>
            <div class="pull-left">
                <a class="btn btn-success" href="{{ route('orders.store') }}"> Add New Order</a>
            </div>
            <br>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('main.index') }}"> Back</a><br>
            </div>
            <br>
        </div>
    </div><br>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Id</th>
            <th>Satus</th>
            <th width="280px">Detail</th>
        </tr>
        <?php $i = 1; ?>
        @foreach ($orders as $order)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $order->id }}</td>
                @if (strcasecmp($order->status, 'selesai') == 0)
                    <td>Selesai</td>
                @else
                    <td>Menunggu Pembayaran</td>
                @endif
                <td>
                    <form action="{{ route('orders.destroy', $order->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('orders.show', $order->id) }}">Show</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {{-- {!! $orders->links() !!} --}}

@endsection
