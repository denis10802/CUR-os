<?php

namespace App\Domain\Speaker\Models;

use App\Domain\Department\Models\Department;
use Database\Factories\SpeakerFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Domain\Speaker\Models\Speaker.
 *
 * @property int                             $id
 * @property string                          $first_name
 * @property string                          $last_name
 * @property string                          $surname
 * @property string                          $position
 * @property string                          $image_path
 * @property string                          $slug
 * @property int                             $department_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property Department                      $department
 *
 * @method static Builder|Speaker newModelQuery()
 * @method static Builder|Speaker newQuery()
 * @method static Builder|Speaker query()
 * @mixin  Builder
 */
class Speaker extends Model
{
    use HasFactory;

    protected static function newFactory(): SpeakerFactory
    {
        return SpeakerFactory::new();
    }

    public function department(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
}
