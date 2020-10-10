<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Attr
 *
 * @property int $id
 * @property string $title
 * @property int $attr_group_id
 * @property-read \App\Models\AttrGroup $attr_group
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Offer[] $offers
 * @property-read int|null $offers_count
 * @method static \Illuminate\Database\Eloquent\Builder|Attr newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Attr newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Attr query()
 * @method static \Illuminate\Database\Eloquent\Builder|Attr whereAttrGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attr whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attr whereTitle($value)
 * @mixin \Eloquent
 */
class Attr extends Model
{
    public function offers()
    {
        return $this->belongsToMany(Offer::class);
    }

    public function attr_group()
    {
        return $this->belongsTo(AttrGroup::class);
    }
}
