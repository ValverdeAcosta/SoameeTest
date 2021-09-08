<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Books extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'isbn',
        'authors_id'
    ];

    public function getAll() 
    {
        return DB::table('books')->get();
    }

    public function getThisBook($id) 
    {
        $thisBook = DB::table('books')
            ->where('id', $id)
            ->get();

        $hisAuthor = DB::table('authors')
            ->where('id',$thisBook[0]->author_id)
            ->get();

        return ["book" => $thisBook, "author" => $hisAuthor];
    }

    public function storeBook($request)
    {
        $this->name = $request->name;

        $this->isbn = $request->isbn;

        $authorId = DB::table('authors')
            ->where('first_name','LIKE', '%'+$request->author+'%')
            ->pluck('id');

        $this->author_id = $authorId;

        $this->save();
    }
}
