<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notes extends Model
{
    use HasFactory;
    protected $table = "notes";
    protected $fillable = ['user_id', 'title', 'description', 'remenber', 'icon', 'priority'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
