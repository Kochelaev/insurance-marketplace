<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Type extends Model
{
    use HasFactory;
    use SoftDeletes;

    static public function fastMake(string $title, int $catId)
    {
        $type = new Type();
        $type->type = $title;
        $type->category_id = $catId;
        $type->save();
    }
}
