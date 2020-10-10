<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Image
 *
 * @property int $id
 * @property string $path
 * @property int $offer_id
 * @property-read \App\Models\Offer $offer
 * @method static \Illuminate\Database\Eloquent\Builder|Image newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Image newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Image query()
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereOfferId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image wherePath($value)
 * @mixin \Eloquent
 */
class Image extends Model
{
    public function offer()
    {
        return $this->belongsTo(Offer::class);
    }
}
