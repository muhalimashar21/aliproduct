@extends('layouts.app')


@section('contentproductdetail')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> {{ $product->name }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('productdetails.index') }}" title="Go back"> <i
                        class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Detail Prod Id:</strong>
                {{ $product->product_detail_prod_id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Detail Cust Id:</strong>
                {{ $product->product_detail_cust_id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Detail Price Distributor:</strong>
                {{ $product->	product_detail_price_distributor }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Detail Price Agentunggal:</strong>
                {{ $product->product_detail_price_agentunggal }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Detail Price Agenregular:</strong>
                {{ $product->product_detail_price_agenregular }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Detail Price Reseller:</strong>
                {{ $product->product_detail_price_reseller }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Detail Price End User:</strong>
                {{ $product->product_detail_price_end_user }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Detail Volume:</strong>
                {{ $product->product_detail_volume }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Detail Available:</strong>
                {{ $product->product_detail_available }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date Created:</strong>
                {{ date_format($product->created_at, 'jS M Y') }}
            </div>
        </div>
    </div>
@endsection
