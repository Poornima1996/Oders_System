<?php
namespace App\Http\Controllers;  
use Illuminate\Http\Request;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::orderBy('id', 'DESC')
        ->where('user_id', Auth::id())
        ->get();
        return view('products.index', compact('product'));
    }

   
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
       $request->validate([
        'user_id' => 'required|integer',
        'customername' => 'required|string',
        'customername2' => 'required|string',
        'contact' => 'required|integer',
        'email' => 'required|string',
        'address' => 'required|string',
        'gender' => 'required|string',
        'BOD' => 'required|date',
        'Street' => 'required|integer',
        'city' => 'required|string',
        'status' => 'required|integer',
      

       
    ]);
    $product = Product::create([
        'user_id' => $request->input('user_id'),
        'customername' => $request->input('customername'),
        'customername2' => $request->input('customername2'),
        'contact' => $request->input('contact'),
        'email' => $request->input('email'),
        'address' => $request->input('address'),
        'gender' => $request->input('gender'),
        'BOD' => $request->input('BOD'),
        'Street' => $request->input('Street'),
        'city' => $request->input('city'),
        'status' => $request->input('status'),

        ]);
        return redirect()->route('products')->with('success', 'Record added successfully');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
  
        return view('products.show', compact('product'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
  
        return view('products.edit', compact('product'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);
  
        $product->update($request->all());
  
        return redirect()->route('products')->with('success', 'Record updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
{
    $product = Product::findOrFail($id);
  
    // Get the current date and time
    $now = Carbon::now();
    
    // Calculate the date and time one day ago
    $oneDayAgo = $now->subDay();
  
    // Check if the product was created within the last day
    if ($product->created_at > $oneDayAgo) {
        $product->delete();
        return redirect()->route('products')->with('success', 'Record deleted successfully.');
    } else {
        return redirect()->route('products')->with('error', 'Cannot delete record created more than one day ago.');
    }
}
}