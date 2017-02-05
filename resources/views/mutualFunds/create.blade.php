@extends('app')
@section('content')
    <h1>Create New Mutual Fund</h1>
    {!! Form::open(['url' => 'mutualFunds']) !!}

    <div class="form-group">
        {!! Form::select('customer_id', $customers) !!}
    </div>

    <div class="form-group">
        {!! Form::label('scheme', 'Scheme:') !!}
        {!! Form::text('scheme',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('nominee', 'Name of Nominee:') !!}
        {!! Form::text('nominee',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('relationship_with_nominee', 'Relationship with Nominee:') !!}
        {!! Form::text('relationship_with_nominee',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('balance_amount', 'Balance Amount:') !!}
        {!! Form::text('balance_amount',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('acquired_date', 'Acquired Date:') !!}
        {!! Form::text('acquired_date',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('investment_amount', 'Investment Amount:') !!}
        {!! Form::text('investment_amount',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('current_value', 'Current Value:') !!}
        {!! Form::text('current_value',null,['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop