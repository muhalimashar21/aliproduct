@extends('layouts.app')

@section('contentproductdetail')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product Detail</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('productdetails.index') }}" title="Go back"> <i
                        class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('productdetails.update', $product_detail_id->product_detail_id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Product Detail Prod Id:</strong>
                    <input type="number" name="product_detail_prod_id" value="{{ $product_detail_id->product_detail_prod_id }}" class="form-control" placeholder="product_detail_prod_id">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Product Detail Cust Id:</strong>
                    <input type="number" name="product_detail_cust_id" value="{{ $product_detail_id->product_detail_cust_id }}" class="form-control" placeholder="product_detail_cust_id">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Product Detail Price Distributor:</strong>
                    <input type="number" name="product_detail_price_distributor" class="form-control" placeholder="{{ $product_detail_id->product_detail_price_distributor }}"
                        value="{{ $product_detail_id->product_detail_price_distributor }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Product Detail Price Agentunggal:</strong>
                    <input type="number" name="product_detail_price_agentunggal" class="form-control" placeholder="{{ $product_detail_id->product_detail_price_agentunggal }}"
                        value="{{ $product_detail_id->product_detail_price_agentunggal }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Product Detail Price AgenRegular:</strong>
                    <input type="number" name="product_detail_price_agenregular" class="form-control" placeholder="{{ $product_detail_id->product_detail_price_agenregular }}"
                        value="{{ $product_detail_id->product_detail_price_agenregular }}">
                </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Product Detail Price Reseller:</strong>
                    <input type="number" name="product_detail_price_reseller" class="form-control" placeholder="{{ $product_detail_id->product_detail_price_reseller }}"
                        value="{{ $product_detail_id->product_detail_price_reseller }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Product Detail Price Enduser:</strong>
                    <input type="number" name="product_detail_price_end_user" class="form-control" placeholder="{{ $product_detail_id->product_detail_price_end_user }}"
                        value="{{ $product_detail_id->product_detail_price_end_user }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Product Detail Volume:</strong>
                    <input type="number" name="product_detail_volume" class="form-control" placeholder="{{ $product_detail_id->product_detail_volume }}"
                        value="{{ $product_detail_id->product_detail_volume }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Product Detail Available:</strong>
                    <input type="text" name="product_detail_available" class="form-control" placeholder="{{ $product_detail_id->product_detail_available }}"
                        value="{{ $product_detail_id->	product_detail_available }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
