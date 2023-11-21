@extends('layouts.app')
  
@section('title', 'Show Clients')
  
@section('contents')
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">First Name</label>
            <input type="text" name="customername" class="form-control" value="{{ $product->customername }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Last Name</label>
            <input type="text" name="customername2" class="form-control" value="{{ $product->customername2 }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="customername" class="form-control" value="{{ $product->customername }}  {{ $product->customername2 }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Contact No</label>
            <input type="text" name="contact" class="form-control" value="{{ $product->contact }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Email</label>
            <input type="text" name="email" class="form-control" value="{{ $product->email }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Date Of Birth</label>
            <input type="text" name="contact" class="form-control" value="{{ $product->BOD }}" readonly>
        </div>
    </div>
    <div class="row">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address" name="address" value="{{ $product->Street }} {{ $product->address }} {{ $product->city }}"readonly>
    </div>
@endsection