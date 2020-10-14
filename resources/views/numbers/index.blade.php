@extends('layouts.app')

@section('contentnumber')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Member </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('numbers.create') }}" title="Create a number"> <i class="fas fa-plus-circle"></i>
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
            <th>Number</th>
            <th>Number Available</th>
            <th>Date Created</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($numbers as $number)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $number->number }}</td>
                <td>{{ $number->number_available }}</td>
                <td>{{ date_format($number->created_at, 'jS M Y') }}</td>
                <td>
                    <form action="{{ route('numbers.destroy', $number->number_id) }}" method="POST">

                        <a href="{{ route('numbers.show', $number->number_id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href={{url("/numbers")."/".$number->number_id."/edit"}}>
                        <!-- <a href="/numbers/{{$number->number_id}}/edit"> -->
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

    {!! $numbers->links() !!}

@endsection
