<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
/**
 * @OA\Schema(
 *     schema="Stylist",
 *     title="Stylist",
 *     description="Модель выбора стилиста",
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="image_url", type="string", example="https://example.com/stylist.jpg"),
 *     @OA\Property(property="products", type="array", @OA\Items(ref="#/components/schemas/Product")),
 * )
 */
class Stylist extends Model
{
    protected $fillable = ['image_url', 'title'];

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'stylist_products');
    }
}
