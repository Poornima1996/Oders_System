@extends('layouts.app')
@section('title')
@section('contents')

 <div class="d-flex align-items-center justify-content-between">
        <h3 class="mb-0"><b>List of Clients</b></h3>
        <a href="{{ route('products.create') }}" class="btn btn-primary">Add Clients</a>
    </div>
    
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
            <th class="th-sm">ID</th>
            <th class="th-sm">Image</th>
            <th class="th-sm">Name</th>
            <th class="th-sm">Contact No</th>
            <th class="th-sm">Email</th>
            <th class="th-sm">Status</th>
            <th class="th-sm">Actions</th>
            </tr>
        </thead>
        <tbody>+
            @if($product->count() > 0)
                @foreach($product as $rs)
                    <>
                        <td class="align-middle">{{ $rs->id }}</td>
                        <td class="align-middle"> <i class="fas fa-user"></i></td>
                        <td class="align-middle">{{ $rs->customername }} {{ $rs->customername }}</td>
                        <td class="align-middle">{{ $rs->contact }}</td>  
                        <td class="align-middle">{{ $rs->email }}</td> 
                <td class="align-middle">
                    @if($rs->status == 1)
                        <button class="btn btn-success btn-sm">Active</button>
                    @else
                        <button class="btn btn-danger btn-sm">Inactive</button>
                    @endif
                </td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('products.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('products.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('products.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Product not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection