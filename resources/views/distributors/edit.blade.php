@extends('distributors.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
</div>
</div>
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
<form action="{{ route('distributors.update',$distributor->id) }}" method="POST">
@csrf
@method('PUT')
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Name:</strong>
<input type="string" name="name" value="{{ $distributor->name }}" class="form-control" placeholder="Distributor">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Phone:</strong>
<input type="number" min="0" max="9999999999999" name="phone" value="{{ $distributor->phone }}" class="form-control" placeholder="Phone">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Adress:</strong>
<input type="text" name="address" value="{{ $distributor->address }}" class="form-control" placeholder="Adress">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
    <div class="pull-right">
    <a class="btn btn-info" href="{{ route('distributors.index') }}"> Back</a>
    </div>
</div>

</form>
@endsection