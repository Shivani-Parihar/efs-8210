@extends('app')
@section('content')
    <h1>MutualFund </h1>
    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Scheme </td>
                <td><?php echo ($mutual_Fund['scheme']); ?></td>
            </tr>
            <tr>
                <td>Name of Nominee </td>
                <td><?php echo ($mutual_Fund['nominee']); ?></td>
            </tr>
            <tr>
                <td>Relationship with Nominee </td>
                <td><?php echo ($mutual_Fund['relationship_with_nominee']); ?></td>
            </tr>
            <tr>
                <td>Balance Amount </td>
                <td><?php echo ($mutual_Fund['balance_amount']); ?></td>
            </tr>
            <tr>
                <td>Acquired Date </td>
                <td><?php echo ($mutual_Fund['acquired_date']); ?></td>
            </tr>
            <tr>
                <td>Investment Amount </td>
                <td><?php echo ($mutual_Fund['investment_amount']); ?></td>
            </tr>
            <tr>
                <td>Current Value </td>
                <td><?php echo ($mutual_Fund['current_value']); ?></td>
            </tr>
            </tbody>
        </table>
    </div>
@stop