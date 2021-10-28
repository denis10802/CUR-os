<?php

namespace App\Domain\SlideTypes\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Domain\SlideTypes\Models\SlideTypes.
 *
 * @property int                             $id
 * @property string                          $image_path
 * @property array                           $field_maps_json
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|SlideTypes newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SlideTypes query()
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class SlideTypes extends Model
{
    protected $casts = [
        'field_maps_json' => 'array',
    ];
}
