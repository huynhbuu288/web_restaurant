<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chef extends Model
{
    public $timestamps = false; 
    protected $fillable = [
    
        'chef_name',
        'chef_desc',
        'chef_image',
        'chef_fb',
        'chef_tiw',
        'chef_gg',
     
    ];
    protected $primaryKey = 'chef_id';
 	protected $table = 'tbl_chef';
}
