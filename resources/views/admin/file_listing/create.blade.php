<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload File</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-9">
                            <h3>Upload File - <strong>{{ Auth::user()->name }}</strong> </h3>
                        </div>
                        <div class="col-md-3 text-right">
                            <a href="{{ route('index') }}" class="btn btn-outline-secondary">Back To Homepage</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="/store" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if(session('errors'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="form-group">
                            <label for="name"><strong>Judul File</strong></label>
                            <input type="text" name="title" class="form-control" placeholder="Judul File">
                        </div>
                        <div class="form-group">
                            <label for="name"><strong>Jenis File</strong></label>
                            <input type="text" name="type" class="form-control" placeholder="Jenis File">
                        </div>
                        <div class="form-group">
                            <label for="file"><strong>File </strong></label>
                            <input type="file" name="file" class="form-control" placeholder="">
                        </div>
                        <div class="text-center">
                            <button class="btn btn-outline-primary"> Upload File </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</body>
</html>
