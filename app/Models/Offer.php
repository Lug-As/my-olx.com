<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Offer
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string|null $description
 * @property string|null $image
 * @property int $views
 * @property int $price
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $user_id
 * @property int $category_id
 * @property int $city_id
 * @property int $currency_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Attr[] $attrs
 * @property-read int|null $attrs_count
 * @property-read \App\Models\Category $category
 * @property-read \App\Models\City $city
 * @property-read \App\Models\Currency $currency
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Image[] $images
 * @property-read int|null $images_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Offer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Offer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Offer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereCurrencyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereViews($value)
 * @mixin \Eloquent
 */
class Offer extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }

    public function attrs()
    {
        return $this->belongsToMany(Attr::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
