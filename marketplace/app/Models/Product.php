<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Search\Searchable;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Searchable;

    public function company()
    {
        return $this->belongsTo(User::class, 'owner_id', 'id');
    }
}
