<?php
#task Laravel: working with data
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Data extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['age', 'profession'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // public function scopeName($query, $name)
    // {
    //     return $query->where('name', $name);
    // }

    public function scopeAdults($query)
{
    return $query->whereHas('user', function ($userQuery) {
        $userQuery->where('age', '>', 18);
    });
}
}


