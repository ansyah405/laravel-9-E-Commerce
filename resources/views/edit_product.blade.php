@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{__('Edit Product')}}</div>
                    <div class="card-body">
                        <form action="{{route('update_product', $product)}}" method="post" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" value="{{$product->name}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <input type="text" name="description" value="{{$product->description}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Price</label>
                            <input type="number" name="price" value="{{$product->price}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Stock</label>
                            <input type="number" name="stock" value="{{$product->stock}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="file" name="image"><br>
                            <button type="submit" class="btn btn-primary mt-3">Update</button>
                        </div>
                    </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
