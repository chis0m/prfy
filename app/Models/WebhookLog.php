<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\AsCollection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\WebhookLog
 *
 * @property int $id
 * @property mixed $payload
 * @property string $vendor
 * @property string $webhook_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|WebhookLog query()
 * @method static \Illuminate\Database\Eloquent\Builder|WebhookLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WebhookLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WebhookLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WebhookLog whereVendor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WebhookLog wherePayload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WebhookLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WebhookLog whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WebhookLog whereWebhookId($value)
 * @mixin \Eloquent
 */
class WebhookLog extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded = [];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'data' => AsCollection::class,
    ];
}
