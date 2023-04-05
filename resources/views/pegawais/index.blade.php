@extends('pegawais.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
        </div>
        <!-- Form Search Bar -->
        <form class="form-left my-4" method="get" action="{{ route('search') }}">
            <div class="form-group w-80 mb-3">
                <input type="text" name="search" class="form-control w-50 d-inline" id="search" placeholder="Search">
        </form>
        <!-- Form Search Bar End -->
        <div class="float-right my-2">
            <a class="btn btn-success" href="{{ route('pegawais.create') }}"> Input Pegawai</a>
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
        <th>Nip</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Jabatan</th>
        <th>Gaji_Pokok</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($pegawais as $Pegawai)
    <tr>

        <td>{{ $Pegawai->Nip }}</td>
        <td>{{ $Pegawai->Nama }}</td>
        <td>{{ $Pegawai->Alamat }}</td>
        <td>{{ $Pegawai->Jabatan }}</td>
        <td>{{ $Pegawai->Gaji_Pokok }}</td>
        <td>{{ $Pegawai->No_Handphone }}</td>
        <td>
            <form action="{{ route('pegawais.destroy',$Pegawai->Nip) }}" method="POST">

                <a class="btn btn-info" href="{{ route('pegawais.show',$Pegawai->Nip) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('pegawais.edit',$Pegawai->Nip) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
<div class="d-flex w-1 h-1">
    {!! $pegawais->links() !!}
</div>
@endsection