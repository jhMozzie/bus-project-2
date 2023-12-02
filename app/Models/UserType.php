<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    use HasFactory;
    public function user()
    {
        // $user = User::find($this->user_id);
        return $this->hasOne(User::class, 'user_type_id', 'id');

    }
}
