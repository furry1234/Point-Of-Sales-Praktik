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
<form action="{{ route('transactions.store') }}" method="POST">
@csrf
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>Item:</strong>
    <select name="item" id="barang" class="form-control">
    <option value=""> Choose Item </option>
        @foreach ($item as $id)
        <option data-id="{{ $id->price }}">{{ $id->name }}</option>
        @endforeach
    </select>
    </div>
    </div>
    {{-- <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Price:</strong> --}}
            {{-- <select name="price" class="form-control">
                    @foreach ($item as $id)
                    <option value ="{{ $id->price }}">{{ $id->price}}</option>
                    @endforeach
                    </select> --}}
                    {{-- <input type="text" nama="price" id="harga_barang" class="form-control">
                        </div>
            </div> --}}
    <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Total Item:</strong>
        <input type="number" name="total_item" id="total_item" class="form-control" placeholder="Total Item">
        </div>
        </div>
        {{-- <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>Total Price:</strong>
        <input type="number" name="total_price" class="form-control" placeholder="Total Price">
        </div>
        </div> --}}
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>Payment :</strong>
        <input type="number" name="payment" id="payment" class="form-control" placeholder="Payment">
        </div>
        </div>
        {{-- <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>Change:</strong>
            <input type="integer" name="change" class="form-control" placeholder="Change">
            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Purchasing Date:</strong>
                    <input type="date" name="purchased_at" class="form-control" placeholder="Purchasing Date">
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
</div>
</form>
@endsection

<script>
    $(document).ready(function(){
        $('#barang').on("change", function(){
            let barangs = $(this).find('option:selected').attr('data-id');
            let harga = $('#harga_barang').val(barangs);
            console.log(harga);
        });
    });

    
</script>
<script>
    $(document).ready(function(){
        $('#total_item').keyup(function(){
            let harga = $('#harga_barang').val();
            let jumlah = this.value;
            let total = parseInt(jumlah) * parseInt(harga);
            $('#payment').val(total);
        });
    });
</script>