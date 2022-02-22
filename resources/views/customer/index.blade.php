{{--  @extends('layout')  --}}
@extends('layout')


@section('title')
customer List
@endsection
@section('content')
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>crud</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('customer.create') }}"> Create New customer</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            {{--  <th>Email</th>  --}}
            <th>phone</th>
            {{--  <th>Address</th>  --}}
            <th width="280px">Action</th>
        </tr>
        @foreach ( $customer as $key => $value)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $value->name }}</td>
            {{--  <td>{{ $value->email}}</td>  --}}
            <td>{{ $value->phone }}</td>
            {{--  <td>{{ \Str::limit($value->Address, 100) }}</td>  --}}
            <td>
                <form action="{{ route('customer.destroy',$value->id) }}" method="POST">
                    {{--  <a class="btn btn-info" href="{{ route('customer.show',$value->id) }}">Show</a>  --}}
                    <a class="btn btn-primary" href="{{ route('customer.edit',$value->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {{--  {!! $data->links() !!}  --}}
@endsection

