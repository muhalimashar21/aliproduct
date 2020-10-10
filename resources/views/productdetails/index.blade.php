@extends('layouts.app')

@section('contentproductdetail')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Product Detail </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('productdetails.create') }}" title="Create a product detail"> <i class="fas fa-plus-circle"></i>
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
            <th>Product Detail Prod Id</th>
            <th>Product Detail Cust Id</th>
            <th>Product Detail Price Distributor</th>
            <th>Product Detail Price Agentunggal</th>
            <th>Product Detail Price Agenregular</th>
            <th>Product Detail Price Reseller</th>
            <th>Product Detail Price End User</th>
            <th>Product Detail Volume</th>
            <th>Product Detail Available</th>
            <th>Date Created</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($productdetails as $productdetail)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $productdetail->product_detail_prod_id }}</td>
                <td>{{ $productdetail->product_detail_cust_id }}</td>
                <td>{{ $productdetail->product_detail_price_distributor }}</td>
                <td>{{ $productdetail->product_detail_price_agentunggal }}</td>
                <td>{{ $productdetail->product_detail_price_agenregular }}</td>
                <td>{{ $productdetail->product_detail_price_reseller }}</td>
                <td>{{ $productdetail->product_detail_price_end_user }}</td>
                <td>{{ $productdetail->product_detail_volume }}</td>
                <td>{{ $productdetail->product_detail_available }}</td>
                <td>{{ date_format($productdetail->created_at, 'jS M Y') }}</td>
                <td>
                    <form action="{{ route('productdetails.destroy', $productdetail->product_detail_id) }}" method="POST">

                        <a href="{{ route('productdetails.show', $productdetail->product_detail_id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="/productdetails/{{$productdetail->product_detail_id}}/edit">
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

    {!! $productdetails->links() !!}

@endsection
