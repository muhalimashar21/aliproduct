@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                
                <h1> <img src="{{ ('logo.png') }}" width="100px" position="left" >Welcome Admin</h1>
                <br>
            <img src="{{ ('header.png') }}" width="1050px" height="450px" class="rounded float-left">
            </div>
        </div>
    </div>

    {!! $projects->links() !!}

@endsection
