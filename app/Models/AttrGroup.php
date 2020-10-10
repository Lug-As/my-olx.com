<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\AttrGroup
 *
 * @property int $id
 * @property string $title
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Attr[] $attrs
 * @property-read int|null $attrs_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Category[] $categories
 * @property-read int|null $categories_count
 * @method static \Illuminate\Database\Eloquent\Builder|AttrGroup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AttrGroup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AttrGroup query()
 * @method static \Illuminate\Database\Eloquent\Builder|AttrGroup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AttrGroup whereTitle($value)
 * @mixin \Eloquent
 */
class AttrGroup extends Model
{
    public function attrs()
    {
        return $this->hasMany(Attr::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
