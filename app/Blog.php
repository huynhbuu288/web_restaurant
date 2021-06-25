<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public $timestamps = false; 
    protected $fillable = [
    	'blog_title',
        'blog_post',
        'blog_date',
        'blog_text',
        'blog_status',
       
    ];
    protected $primaryKey = 'blog_id';
 	protected $table = 'tbl_blog';
}
