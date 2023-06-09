@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}<br>
                    <table class="table table-responsive">
                        <tr><th>Name</th><th>:</th><td>{{ $user->name}}</td></tr>
                        <tr><th>Email</th><th>:</th><td>{{ $user->email}}</td></tr>
                        <tr><th>Created At</th><th>:</th><td>{{ $user->created_at}}</td></tr>
                    </table>
                    <a href="{{ route('pegawais.index') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
