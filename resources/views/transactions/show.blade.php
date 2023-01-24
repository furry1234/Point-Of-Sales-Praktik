@extends('transactions.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2> Show Transaction</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('transactions.index') }}"> Back</a>
</div>
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Item:</strong>
{{ $transaction->item }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Price:</strong>
{{ $transaction->price }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>Total Item:</strong>
    {{ $transaction->total_item }}
    </div>
    </div><div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Total Price:</strong>
{{ $transaction->total_price }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>Payment:</strong>
    {{ $transaction->payment }}
    </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>Change:</strong>
        {{ $transaction->change }}
        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>Purchasing Date:</strong>
            {{ $transaction->purchased_at }}
            </div>
            </div>
</div>
@endsection