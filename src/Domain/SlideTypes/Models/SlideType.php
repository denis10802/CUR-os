<?php

declare(strict_types=1);

namespace App\Domain\SlideTypes\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * \App\Domain\SlideTypes\Models\SlideType.
 *
 * @property int                             $id
 * @property string                          $image_path
 * @property array                           $fields_map
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|SlideType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SlideType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SlideType query()
 * @mixin Builder
 */
final class SlideType extends Model
{
    /** @inheritdoc  */
    protected static $unguarded = true;

    /** @inheritdoc  */
    protected $casts = [
        'fields_map' => 'array',
    ];
}
