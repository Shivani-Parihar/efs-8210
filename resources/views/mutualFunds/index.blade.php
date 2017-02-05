@extends('layouts.app')

@section('content')
    <h1 style="text-align: center">Mutual Funds</h1>
    <a href="{{url('/mutualFunds/create')}}" class="btn btn-success">Create Mutual Fund</a>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>Cust No</th>
            <th>Cust Name</th>
            <th>Scheme</th>
            <th>Nominee</th>
            <th>Relationship with nominee</th>
            <th>Balance Amount</th>
            <th>Aquired Date</th>
            <th>Investment Amount</th>
            <th>Current Value</th>
            <th colspan="3">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($mutual_Funds as $mutual_Fund)
            <tr>
                <td>{{ $mutual_Fund->customer->cust_number }}</td>
                <td>{{ $mutual_Fund->customer->name }}</td>
                <td>{{ $mutual_Fund->scheme }}</td>
                <td>{{ $mutual_Fund->nominee }}</td>
                <td>{{ $mutual_Fund->relationship_with_nominee }}</td>
                <td>{{ $mutual_Fund->balance_amount }}</td>
                <td>{{ $mutual_Fund->acquired_date }}</td>
                <td>{{ $mutual_Fund->investment_amount }}</td>
                <td>{{ $mutual_Fund->current_value }}</td>
                <td><a href="{{url('mutualFunds',$mutual_Fund->id)}}" class="btn btn-primary">Read</a></td>
                <td><a href="{{route('mutualFunds.edit',$mutual_Fund->id)}}" class="btn btn-warning">Update</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['mutualFunds.destroy', $mutual_Fund->id]]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>
@endsection