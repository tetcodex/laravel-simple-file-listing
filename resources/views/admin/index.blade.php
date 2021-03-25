@extends('_layouts.admin')

@section('content')
<div class="container">
    <div class="col-md-12 mt-5">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-9">
                        <h3>Dashboard</h3>
                    </div>
                    <div class="col-md-3 text-right">
                        <a href="/" class="btn btn-outline-info">Homepage</a>
                        <a href="{{ route('logout') }}" class="btn btn-outline-danger">Logout</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h5>Selamat datang di halaman dashboard, <strong>{{ Auth::user()->name }}</strong></h5>

                    <table class="table table-bordered">
                        <tr class="text-center">
                            <th>Judul File</th>
                            <th>Jenis File</th>
                            <th>Direktori File</th>
                            <th>Action File</th>
                        </tr>
                        @foreach ($fileList as $list)
                        <tr class="text-center">
                            <td><h3>{{ $list->title}}</h3></td>
                            <td><h4> {{$list->type}} </h4></td>
                            <td><p> {{$list->file}} </p></td>
                            <td><a href="/uploads/file/{{$list->file}}" target="_blank" class="btn btn-outline-primary"> Download </a></td>
                        </tr>
                        @endforeach
                    </table>

                <a href="/create" class="btn btn-outline-success"> Upload File </a>
            </div>
        </div>
    </div>
</div>
@endsection
