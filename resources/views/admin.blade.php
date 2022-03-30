@extends('includes.app')
@section('admin')
  <div class="row ">
    <div class="col-md-5 offset-3 mt-5">
    <form action="/pp" method="post">
        @csrf
        <div class="form-group">
            <label for="email">Product Name:</label>
            <input type="text" class="form-control" placeholder="Enter product name" name="product_name" id="email">
        </div>
        <div class="form-group">
            <label for="pwd">Price:</label>
            <input type="number" class="form-control" placeholder="Enter price" name="price" id="pwd">
        </div>
        <div class="form-group">
            <label for="pwd">Stock:</label>
            <input type="number" class="form-control" placeholder="Enter stock" name="stock" id="pwd">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
  </div>


@endsection
