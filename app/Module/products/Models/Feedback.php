<?php

namespace App\Module\products\Models;

use App\Module\products\Models\Product;
use Database\Factories\FeedbackFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Feedback extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected static function newFactory()
    {
        return FeedbackFactory::new();
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
