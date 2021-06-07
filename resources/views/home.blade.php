@extends('layouts.app')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2></h2>
            </div>

        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        @foreach ($barang as $barangs)
        <tr>
            <td>{{ $barangs->namaBarang }}</td>
        </tr>
            <tr>
                <td><img src="/image/{{ $barangs->image }}" width="300px"></td>
            </tr>
        @endforeach
    </table>

    {!! $barang->links() !!}

@endsection
