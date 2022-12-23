@extends('layouts.master')
@section('title', 'Menu')
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
                <h2 align="center"><strong>MENU LIST</strong></h2>
            </div>
            <br>
            <div class="pull-left">
                <a class="btn btn-success" href="{{ route('menus.create') }}"> Add New Menu</a>
            </div>
            <br>
        </div>
    </div><br>
{{--
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif --}}

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Id</th>
            <th>Nama</th>
            <th>Rekomendasi</th>
            <th>Harga</th>
            <th width="280px">Pengaturan</th>
        </tr>
        <?php $i = 1; ?>
        @foreach ($menus as $menu)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $menu->id }}</td>
            <td><a href="{{ route('menus.show', $menu->id) }}">{{ $menu->nama }} </a></td>
            <td>{{ $menu->rekomendasi }}</td>
            <td>Rp.{{ $menu->harga }}</td>
            <td>
                <form action="{{ route('menus.destroy',$menu->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('menus.show',$menu->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('menus.edit',$menu->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $menus->links() !!}

@endsection
