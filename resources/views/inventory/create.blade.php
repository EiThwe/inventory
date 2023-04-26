@extends("layouts.master")
@section('title')
Create Item
@endsection

@section('content')
<h4 class="my-3">Create Item</h4>
<form action="{{route("item.store")}}" method="post">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Item Name</label>
        <input type="text" name="name" id="" class="form-control">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Item Price</label>
        <input type="number" name="price" id="" class="form-control">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Stock</label>
        <input type="number" name="stock" id="" class="form-control">
    </div>
    <button class="btn btn-primary">Save Item</button>
</form>
@endsection
