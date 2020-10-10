<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Rubric
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Category[] $categories
 * @property-read int|null $categories_count
 * @method static \Illuminate\Database\Eloquent\Builder|Rubric newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Rubric newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Rubric query()
 * @method static \Illuminate\Database\Eloquent\Builder|Rubric whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rubric whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rubric whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rubric whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rubric whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Rubric extends Model
{
    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
