<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class forum_comment extends Model
{
    use HasFactory;

    protected $table = 'tbl_forum_comments';
}
