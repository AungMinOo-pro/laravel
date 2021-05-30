<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-12 col-md-6">
            <div class="card my-5">
                <div class="card-body">
                    <h3>Update Item</h3>
                    <hr>
                    @if(session('status'))
                        <p class="text-success font-weight-bold">{!! @session('status') !!}</p>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{route('form.update',$currentItem->id)}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Item Name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $currentItem->name }}">
                            @error('name')
                            <small class="text-danger font-weight-bolder">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Price ( MMK ) </label>
                                    <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{$currentItem->price}}">
                                    @error('price')
                                    <small class="text-danger font-weight-bold">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Stock ( MMK ) </label>
                                    <input type="number" class="form-control @error('stock') is-invalid @enderror" name="stock" value="{{ $currentItem->stock }}">
                                    @error('stock')
                                    <small class="text-danger font-weight-bold">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr>
                        <button class="btn btn-primary">Update Item</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @include("request_response.list")
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
