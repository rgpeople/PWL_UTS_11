@extends('pegawais.layout')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Pegawai
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your i
                    nput.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('pegawais.update', $Pegawai->Nip) }}" id="myForm">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="Nip">Nip</label>
                        <input type="text" name="Nip" class="form-control" id="Nip" value="{{ $Pegawai->Nip }}" ariadescribedby="Nip">
                    </div>
                    <div class="form-group">
                        <label for="Nama">Nama</label>
                        <input type="text" name="Nama" class="form-control" id="Nama" value="{{ $Pegawai->Nama }}" ariadescribedby="Nama">
                    </div>
                    <div class="form-group">
                        <label for="Alamat">Alamat</label>
                        <input type="Alamat" name="Alamat" class="form-control" id="Alamat" value="{{ $Pegawai->Alamat }}" ariadescribedby="Alamat">
                    </div>
                    <div class="form-group">
                        <label for="Jabatan">Jabatan</label>
                        <input type="Jabatan" name="Jabatan" class="form-control" id="Jabatan" value="{{ $Pegawai->Jabatan }}" ariadescribedby="Jabatan">
                    </div>
                    <div class="form-group">
                        <label for="Gaji_Pokok">Gaji_Pokok</label>

                        <input type="Gaji_Pokok" name="Gaji_Pokok" class="form-control" id="Gaji_Pokok" value="{{ $Pegawai->Gaji_Pokok }}" ariadescribedby="Gaji_Pokok">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection