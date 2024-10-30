<?php

namespace App\Module\products\Models;

use Database\Factories\ProductFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $hidden = ["created_at", "updated_at", "deleted_at"];
    protected static function newFactory()
    {
        return ProductFactory::new();
    }
    /**
     * @return BelongsToMany
     */
    public function characteristic()
    {
        return $this->belongsToMany(Characteristic::class, 'characteristic_product', 'product_id', 'characteristic_id');
    }

    public function feedbacks()
    {
        return $this->hasMany(Feedback::class, 'id_product', 'id');
    }
}
