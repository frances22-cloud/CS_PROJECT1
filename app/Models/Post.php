<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_posts';

    protected $primaryKey = 'post_id';

    protected $fillable = [
        'likes',
        'dislikes',
    ];

}
