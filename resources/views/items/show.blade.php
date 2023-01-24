@extends('items.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2> Show Items</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('items.index') }}"> Back</a>
</div>
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Name:</strong>
{{ $item->name }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Merk:</strong>
{{ $item->merk }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Distributor:</strong>
{{ $item->distributor }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>Price:</strong>
    {{ $item->price }}
    </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>Buy Price:</strong>
        {{ $item->buy_price }}
        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>Stock:</strong>
            {{ $item->stock }}
            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Entry Date:</strong>
                {{ $item->tgl_masuk }}
                </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <strong>Service:</strong>
                    {{ $item->service }}
                    </div>
                    </div>
            
</div>
@endsection