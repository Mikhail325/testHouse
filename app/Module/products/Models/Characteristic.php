<?php

namespace App\Module\products\Models;

use App\Module\products\Models\Product;
use Database\Factories\CharacteristicFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Characteristic extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $hidden = ["created_at", "updated_at", "deleted_at"];

    protected static function newFactory()
    {
        return CharacteristicFactory::new();
    }
    /**
     * @return BelongsToMany
     */
    public function products()
    {
        return $this->belongsToMany(Product::class, 'characteristic_product','characteristic_id', 'product_id');
    }
}
