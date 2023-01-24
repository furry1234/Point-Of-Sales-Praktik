@extends('items.layout')
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
<form action="{{ route('items.update',$item->id) }}" method="POST">
@csrf
@method('PUT')
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
    <strong>Name:</strong>
    <input type="text" name="name" value="{{ $item->name}}" class="form-control" placeholder="Name">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>Merk:</strong>
    <select name="merk" class="form-control">
    <option value=""> Choose Merk </option>
        @foreach ($merk as $id)
        <option value ="{{ $id->merk  }}">{{ $id->merk }}</option>
        @endforeach
        </select>
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
    <strong>Distributor:</strong>
    <select class="form-control" name="distributor" >
        <option value="">Choose Distributor</option>
    @foreach ($distributor as $id)
    <option value ="{{ $item->distributor }}">{{ $id->name }}</option>
    @endforeach
    </select>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>Price:</strong>
    <input type="number" name="price" value="{{ $item->buy_price }}" class="form-control" placeholder="Price">
    </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Buy Price:</strong>
        <input type="number" name="buy_price" value="{{ $item->buy_price }}" class="form-control" placeholder="Buy Price">
        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>Stock:</strong>
            <input type="number" min="0" name="stock" value="{{ $item->stock}}" class="form-control" placeholder="Stock">
            </div>
            </div>
             <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>Entry Date:</strong>
            <input type="date" name="tgl_masuk" value="{{ $item->tgl_masuk}}" class="form-control" placeholder="Entry Date">
            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Service:</strong>
                <input type="string" name="service" value="{{ $item->service}}" class="form-control" placeholder="Service">
                </div>
                </div>
    
    
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
    <div class="pull-right">
    <a class="btn btn-info" href="{{ route('items.index') }}"> Back</a>
    </div>
</div>

</form>
@endsection