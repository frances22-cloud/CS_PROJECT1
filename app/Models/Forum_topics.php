<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Forum_topics extends Model
{
    use HasFactory;
/**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_forum_topics';

    protected $primaryKey = 'topic_id';

    protected $fillable = [
        'name',
        'topic_title',
        'topic_message',
    ];
}
