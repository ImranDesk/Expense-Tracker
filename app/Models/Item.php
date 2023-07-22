<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Item extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'item_group_id',
        'price'
    ];

    public function item_group(): BelongsTo
    {
        return $this->belongsTo(ItemGroup::class);
    }

    public function expenditures(): HasMany
    {
        return $this->hasMany(Expenditure::class);
    }

   
}
