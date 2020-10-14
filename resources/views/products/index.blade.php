@extends('layouts.app')

@section('contentproduct')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Product </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}" title="Create a product"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Product Name</th>
            <th>Product Description</th>
            <th width="1%">Product Image</th>
            <th>Product Point</th>
            <th>Date Created</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $product->product_name }}</td>
                <td> {!! $product->product_description !!}</td>
                <td><img width="150px" src="{{ url('/storage/'.$product->product_image) }}"></td>
                <!-- <td>{{ $product->product_image }}</td> -->
                <td>{{ $product->product_point }}</td>
                <td>{{ date_format($product->created_at, 'jS M Y') }}</td>
                <td>
                    <form action="{{ route('products.destroy', $product->product_id) }}" method="POST">
                        
                        <a href="{{ route('products.show', $product->product_id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>
                        <a href={{url("/products")."/".$product->product_id."/edit"}}>
                            <i class="fas fa-edit  fa-lg"></i>

                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    
    {!! $products->links() !!}


@endsection
