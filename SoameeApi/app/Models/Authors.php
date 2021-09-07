<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Authors extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'first_name',
        'last_name'
    ];

    public function getAll() 
    {
        return DB::table('authors')->get();
    }

    public function getThisAuthor($id) 
    {
        return DB::table('authors')
            ->where('id', $id)
            ->get();
    }
}
