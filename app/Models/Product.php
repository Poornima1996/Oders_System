<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Product extends Model
{
    use HasFactory;
 
    protected $fillable = ['user_id', 'customername', 'customername2', 'contact', 'email', 'address', 'gender', 'BOD', 'Street', 'city', 'status'];


}