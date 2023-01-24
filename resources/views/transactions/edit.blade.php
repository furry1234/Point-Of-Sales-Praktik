@extends('transactions.layout')
@section('content')
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
<form action="{{ route('transactions.update',$transaction->id) }}" method="POST">
@csrf
@method('PUT')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>Item:</strong>
        <select name="item" class="form-control">
        <option value=""> Choose Item </option>
            @foreach ($item as $id)
            <option value ="{{ $id->name  }}">{{ $id->name }}</option>
            @endforeach
            </select>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Price:</strong>
        <select name="price" class="form-control">
            <option value=""> Choose Price </option>
                @foreach ($item as $id)
                <option value ="{{ $id->price  }}">{{ $id->price }}</option>
                @endforeach
                </select>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Total Item:</strong>
            <input type="number" name="total_item" value="{{ $transaction->total_item}}" class="form-control" placeholder="Total Item">
            </div>
            </div>
            {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Total Price:</strong>
                <input type="integer" name="total_price" value="{{ $transaction->total_price}}" class="form-control" placeholder="Total Price">
                </div>
                </div> --}}
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <strong>Payment :</strong>
                    <input type="number" name="payment" value="{{ $transaction->payment}}" class="form-control" placeholder="Payment">
                    </div>
                    </div>
            {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Change:</strong>
                    <input type="integer" name="change" value="{{ $transaction->change}}" class="form-control" placeholder="Change">
                    </div>
                    </div> --}}
                    {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                        <strong>Purchasing Date:</strong>
                            <input type="date" name="purchased_at" value="{{ $transaction->purchased_at}}" class="form-control" placeholder="Purchasing Date">
                            </div>
                            </div> --}}
            
    
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
    <div class="pull-right">
    <a class="btn btn-info" href="{{ route('transactions.index') }}"> Back</a>
    </div>
</form>
@endsection