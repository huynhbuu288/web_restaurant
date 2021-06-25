<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog_single extends Model
{
    public $timestamps = false; 
    protected $fillable = [
        'blog_single_image',
    	// 'blog_single_date',
        'blog_single_title',
        'blog_single_name',
        // 'blog_single_time',
        'blog_single_text',
        'blog_single_status',
       
    ];
    protected $primaryKey = 'blog_single_id';
 	protected $table = 'tbl_blog_single';
}
