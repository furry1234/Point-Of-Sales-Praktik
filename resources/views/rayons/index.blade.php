@extends('rayons.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Rayon Table</h2>
</div>
<div class="pull-right">
    <a class="btn btn-info" href="{{ route('products.index') }}"> Products</a>
    <a class="btn btn-info" href="{{ route('students.index') }}"> Students</a>
    <a class="btn btn-info" href="{{ route('rombels.index') }}"> Rombels</a>
<a class="btn btn-success" href="{{ route('rayons.create') }}"> Create New Rayon</a>
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
<th>Mentor</th>
<th>Phone</th>
<th>Adress</th>
<th width="280px">Action</th>
</tr>
@foreach ($rayons as $rayon)
<tr>
<td>{{ ++$i }}</td>
<td>{{ $rayon->name}}</td>
<td>{{ $rayon->mentor}}</td>
<td>{{ $rayon->phone}}</td>
<td>{{ $rayon->adress}}</td>
<td>
<form action="{{ route('rayons.destroy',$rayon->id) }}" method="POST">
<a class="btn btn-info" href="{{ route('rayons.show',$rayon->id) }}">Show</a>
<a class="btn btn-primary" href="{{ route('rayons.edit',$rayon->id) }}">Edit</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger" onclick="return confirm ('Are you sure to delete {{ $rayon -> name}}?')">Delete</button>
</form>
</td>
</tr>
@endforeach
</table>
{!! $rayons->links() !!}
@endsection