<?php

namespace App\Models\Categories;

use Illuminate\Database\Eloquent\Model;

class MainCategory extends Model
{
    const UPDATED_AT = null;
    const CREATED_AT = null;
    protected $fillable = [
        'main_category',

    ];

    public function sub_categories()
    {
        // １対多(１側)
        return $this->hasMany(SubCategory::class);
        // リレーションの定義
    }
}
