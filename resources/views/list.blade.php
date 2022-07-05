@include('layouts.app')
<div class="container">
    <form action="{{ url('update-product/'.$product->id) }}" method="POST">
    @csrf
    @method('PUT')
        <div class="form-group mb-3">
            <label for="">Product Name</label>
            <input type="text" name="product_name" value="{{$product->product_name}}" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="product_category">Product Category</label>
            <input type="text" name="category" value="{{$product->category}}" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="">Product Status</label>
            <select class="form-select" name="status" required  value="{{$product->status}}"  aria-label="Default select example">
            <option value="0" @if ($product->status == 0) selected @endif>Active</option>
            <option value="1" @if ($product->status == 1) selected @endif>In-Active</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <button type="submit" class="btn btn-primary">Update Product</button>
        </div>
    </form>
</div>

