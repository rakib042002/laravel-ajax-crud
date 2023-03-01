<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
{{--    Bootstrap--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto" >
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h2>All Product</h2>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProduct">
                        Add Product
                    </button>
                </div>
                <div class="card-body">
                    <table class="table table-dark data-table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Product name</th>
                            <th scope="col">Product Price</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{$product->name}}</td>
                                <td>{{ $product->price }}</td>
                                <td>
                                    <a href=""
                                       type="button"
                                       class="btn btn-primary edit_btn"
                                       data-bs-toggle="modal"
                                       data-bs-target="#editProduct"
                                       data-id="{{ $product->id }}"
                                       data-name="{{ $product->name }}"
                                       data-price="{{ $product->price }}"
                                    >Edit</a>
                                    <a href=""
                                       type="button"
                                       class="btn btn-primary delete_btn"
                                       data-bs-toggle="modal"
                                       data-bs-target="#deleteModel"
                                       data-id="{{ $product->id }}"
                                    >Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</div>


@include('modal')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
@include('js')
{!! Toastr::message() !!}
</body>
</html>
