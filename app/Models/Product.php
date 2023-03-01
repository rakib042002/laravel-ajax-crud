<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function PHPUnit\Framework\name;
use function PHPUnit\Runner\validate;

class Product extends Model
{
    use HasFactory;

    protected $fillable =[
      'name',
      'price'
    ];

    public static function createOrUpdate($request,$id=null)
    {
        $request->validate([
            'name'=>'required',
            'price'=>'required'
        ]);

        Product::updateOrCreate(['id'=>isset($request->id)?$request->id:$id],[
            'name'=>$request->name,
            'price'=>$request->price,
        ]);
    }
}
