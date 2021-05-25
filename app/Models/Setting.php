<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    // protected $connection = 'mysql';
    // protected $table = 'settings';
    protected $fillable = ['id','hos_name','hos_url','hos_tel','hos_facebook','hos_youtube','slide_1_text','slide_2_text','slide_3_text','slide_1_more','slide_2_more','slide_3_more','slide_1_picture','slide_2_picture','slide_3_picture','pr_1','pr_2','pr_3','pr_status','slide_status','dm_status','created_at','updated_at'];
    // protected $primaryKey = 'lineid';
}
