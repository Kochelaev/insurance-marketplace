<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Type;


class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function types()
    {
        return $this->hasMany(Type::class, 'category_id', 'id');
    }
}
