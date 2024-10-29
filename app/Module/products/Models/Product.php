<?php

namespace App\Module\products\Models;

use App\Module\products\Models\Characteristic;
use App\Module\products\Models\Feedback;
use Database\Factories\ProductFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected static function newFactory()
    {
        return ProductFactory::new();
    }
    /**
     * @return BelongsToMany
     */
    public function characteristic()
    {
        return $this->belongsToMany(Characteristic::class);
    }

    public function feedback()
    {
        return $this->hasMany(Feedback::class);
    }
}
