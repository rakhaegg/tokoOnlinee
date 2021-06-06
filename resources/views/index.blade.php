@extends('layouts.app')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2></h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('barang.create') }}"> Tambah Barang</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th width="20px" class="text-center">No</th>
            <th>Nama Barang</th>
            <th>Gambar</th>
            <th width="280px"class="text-center">Action</th>
        </tr>
        @foreach ($barang as $barangs)
            <tr>
                <td class="text-center">{{ ++$i }}</td>
                <td>{{ $barangs->namaBarang }}</td>
                <td><img src="/image/{{ $barangs->image }}" width="100px"></td>
                <td class="text-center">
                    <form action="{{ route('barang.destroy',$barangs->id) }}" method="POST">

                        <a class="btn btn-info btn-sm" href="{{ route('barang.show',$barangs->id) }}">Show</a>

                        <a class="btn btn-primary btn-sm" href="{{ route('barang.edit',$barangs->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $barang->links() !!}

@endsection
