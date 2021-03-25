@extends('_layouts.home')

@section('content')
<div class="container">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-4 py-4 sm:block text-right">
            @auth
                <a href="{{ route('index') }}" class="btn btn-sm btn-outline-primary">Dashboard</a>
                <a href="{{ route('logout') }}" class="btn btn-sm btn-outline-danger">Logout</a>
            @else
                <a href="{{ route('login') }}" class="btn btn-sm btn-outline-primary">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-sm btn-outline-info">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="mx-auto">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-9">
                        <h3>Daftar File</h3>
                    </div>
                </div>
            </div>
            <div class="card-body">
                    <table class="table table-bordered shadow-sm">
                        <tr class="text-center">
                            <th>Judul File</th>
                            <th>Jenis File</th>
                        </tr>
                        @foreach ($fileList as $list)
                        <tr class="text-center">
                            <td><h3>{{ $list->title}}</h3></td>
                            <td><h4> {{$list->type}} </h4></td>
                        </tr>
                        @endforeach
                    </table>
            </div>
        </div>
    </div>
</div>
@endsection
