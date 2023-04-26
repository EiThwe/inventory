@extends("layouts.master")
@section('title')
List Item
@endsection

@section('content')
<h4>Item List</h4>
<table class="table">
<thead>
    <tr>
        <td>#</td>
        <td>Name</td>
        <td>Price</td>
        <td>Stock</td>
        <td>Control</td>
    </tr>
</thead>
<tbody>
    @forelse ($items as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->price}}</td>
        <td>{{$item->stock}}</td>
        <td>
            <a href="{{route("item.show",$item->id)}}" class="btn btn-sm btn-outline-primary">Detail</a>
        </td>
    </tr>
    @empty
    <tr>
        <td colspan="5" class="text-center">
            There is no item <br>
            <a href="{{route("item.create")}}" class="btn btn-sm btn-primary">Create Item</a>
        </td>
    </tr>
    @endforelse
</tbody>
</table>
@endsection
