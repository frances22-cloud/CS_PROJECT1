<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_chats';

    protected $primaryKey = 'chat_id';

    protected $fillable = [
        'message',
        'created_at',
        'updated_at',
    ];

}
