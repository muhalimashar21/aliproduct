@extends('layouts.app')

@section('contentproduct')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}" title="Go back"> <i
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

    <form action="{{ route('products.update', $product->product_id) }}" method="POST" enctype='multipart/form-data'>
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Product Name:</strong>
                    <input type="text" name="product_name" value="{{ $product->product_name }}" class="form-control" placeholder="Product Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Product Description:</strong>
                    <textarea class="form-control" style="height:50px" name="product_description"
                        placeholder="Product Description">{{ $product->product_description }}</textarea>
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Product Point:</strong>
                    <input type="number" name="product_point" class="form-control" placeholder="{{ $product->product_point }}"
                        value="{{ $product->product_point }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
<<<<<<< HEAD
            <img width="150px" src="{{ url('/storage/'.$product->product_image) }}">
=======
                <img width="150px" src="{{ url('/storage/'.$product->product_image) }}">
>>>>>>> fe32651ced1356c7bfeb7f7c295bb6db43bf8138
                <div class="form-group">
                    <strong>Product Image:</strong>
                    <input type="file" name="product_image">
                </div>
<<<<<<< HEAD
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
    <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
<script>
CKEDITOR.replace( 'product_description' );
</script>
    <!-- <form action="{{ route('products.update.image', $product->product_id) }}" method="POST">
    
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Update Image</button>
            </div>
    </form> -->
=======
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
>>>>>>> fe32651ced1356c7bfeb7f7c295bb6db43bf8138
@endsection
