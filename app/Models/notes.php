<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Livewire\WithPagination;

class notes extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "notes";
    protected $fillable = ['user_id', 'title', 'description', 'remenber', 'icon', 'priority'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
