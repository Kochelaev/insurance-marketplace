<?php

namespace App\Models;

use App\Models\Type;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



/// use function PHPSTORM_META\type; ??? 

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function types()
    {
        return $this->hasMany(Type::class, 'category_id', 'id');
    }

    public function products()
    {
        return $this->hasManyThrough(Product::class, Type::class);
    }

}
