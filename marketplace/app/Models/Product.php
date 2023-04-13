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

    protected $fillable = [
        'id',
        'title',
        'content',
        'owner_id',
        'type_id',
        'description',
        'base_price',
        'coefficients',
    ];

    public function company()
    {
        return $this->belongsTo(User::class, 'owner_id', 'id');
    }

    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id', 'id');
    }

    public function category()
    {
        // return $this->hasOneThrough(
        //     Category::class,
        //     Type::class,
        //     // 'category_id',
        //     // 'type_id',
        //     // 'id',
        //     // 'id'
        // );
        //что то тут идет не так...         
    }

    public function getCategory()
    {
        return Category::find($this->type->category_id)->category;
    }
}
