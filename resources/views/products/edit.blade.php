@extends('layouts.app')
  
@section('title', 'UPDATE THE CLIENT')
  
@section('contents')

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
    <input type="hidden" name="user_id" value="{{ Auth::id() }}" />
    <div class="form-group">
    <label for="customername">First Name</label>
    <input type="text" class="form-control" id="customername" name="customername" placeholder="Enter First Name" value="{{ $product->customername }}" required>
    @error('customername') <span class="text-danger">{{$message}}</span> @enderror
    </div>

    <label for="customername2">Last Name</label>
    <input type="text" class="form-control" id="customername2" name="customername2" value="{{ $product->customername2 }}" placeholder="Enter Last Name" required>
    @error('customername2') <span class="text-danger">{{$message}}</span> @enderror
    </div>

    <div class="form-group">
    <label for="contact">Contact Number</label>
    <div>
    <input type="number" class="form-control" id="contact" name="contact" value="{{ $product->contact }}"  placeholder="contact"required>
    </div>
    <div class="form-group">
    <label for="email">Email</label>
    <div>
    <input type="email" class="form-control" id="email" name="email" value="{{ $product->email }}" placeholder="email"required>
    </div>
    <div class="form-group">
    <label for="Gender">Gender</label>
    <select class="form-control" id="gender"name="gender" value="{{ $product->gender }}" placeholder="gender"required>
      <option>Male</option>
      <option>Female</option>
    </select>
  </div>
  <div class="form-group">
    <label for="BOD">Birthday</label>
    <div>
    <input type="date" class="form-control" id="BOD" name="BOD" value="{{ $product->BOD }}" placeholder="BOD"required>
    </div>
    <div class="form-group">
    <label for="Street">Street No</label>
    <input type="number" class="form-control" id="Street" name="Street" value="{{ $product->Street }}" placeholder="Enter Street No"required>
    @error('address') <span class="text-danger">{{$message}}</span> @enderror
    </div>
    <div class="form-group">
    <label for="address">Street Address</label>
    <input type="text" class="form-control" id="address" name="address" value="{{ $product->address }}" placeholder="Enter Street address"required>
    @error('address') <span class="text-danger">{{$message}}</span> @enderror
    </div>
    <div class="form-group">
    <label for="city">City</label>
    <input type="text" class="form-control" id="city" name="city" value="{{ $product->city }}" placeholder="Enter city"required>
    @error('city') <span class="text-danger">{{$message}}</span> @enderror
    </div>
    <div class="form-group">
    <label for="status">Status</label>
    <select class="form-control" id="status" name="status" value="{{ $product->status }}" required>
        <option value="1">Active</option>
        <option value="0">Inactive</option>
    </select>
</div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection