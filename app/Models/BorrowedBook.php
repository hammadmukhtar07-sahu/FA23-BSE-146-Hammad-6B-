<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BorrowedBook extends Model
{

protected $fillable = [
'member_id',
'book_id',
'borrow_date',
'return_date',
'remarks'
];

}