@extends('pegawais.layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail Pegawai
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Nip: </b>{{$Pegawai->Nip}}</li>
                    <li class="list-group-item"><b>Nama: </b>{{$Pegawai->Nama}}</li>
                    <li class="list-group-item"><b>Alamat: </b>{{$Pegawai->Alamat}}</li>
                    <li class="list-group-item"><b>Jabatan: </b>{{$Pegawai->Jabatan}}</li>
                    <li class="list-group-item"><b>Gaji_Pokok: </b>{{$Pegawai->Gaji_Pokok}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt3" href="{{ route('pegawais.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection