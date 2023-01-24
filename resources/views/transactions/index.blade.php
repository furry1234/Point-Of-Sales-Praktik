@extends('transactions.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Transactions</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('transactions.create') }}"> Create New Transaction</a>
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
<th>Item</th>
<th>Price</th>
<th>Total Item</th>
<th>Total Price</th>
<th>Payment</th>
<th>Change</th>
<th>Purchasing Date</th>
<th width="280px">Action</th>
</tr>
@foreach ($transactions as $transaction)
<tr>
<td>{{ ++$i }}</td>
<td>{{ $transaction->item }}</td>
<td>{{ $transaction->price }}</td>
<td>{{ $transaction->total_item }}</td>
<td>{{ $transaction->total_price }}</td>
<td>{{ $transaction->payment }}</td>
<td>{{ $transaction->change }}</td>
<td>{{ $transaction->purchased_at }}</td>
<td>
<form action="{{ route('transactions.destroy',$transaction->id) }}" method="POST">
<a class="btn btn-info" href="{{ route('transactions.show',$transaction->id) }}">Show</a>
<a class="btn btn-primary" href="{{ route('transactions.edit',$transaction->id) }}">Edit</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger" onclick="return confirm ('Are you sure to delete {{ $transaction -> item}}?')">Delete</button>
</form>
</td>
</tr>
@endforeach
</table>
{!! $transactions->links() !!}
@endsection

