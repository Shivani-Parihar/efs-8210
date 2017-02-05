@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <a href="{{ action('CustomerController@index') }}" class="btn btn-success">Customers</a> |
                    <a href="{{ action('StockController@index') }}" class="btn btn-success">Stocks</a> |
                    <a href="{{ action('InvestmentController@index') }}" class="btn btn-success">Investments</a> |
                    <a href="{{ action('MutualFundController@index') }}" class="btn btn-success">Mutual Funds</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
