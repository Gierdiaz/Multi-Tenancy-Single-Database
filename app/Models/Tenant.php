<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Webpatser\Uuid\Uuid;

class Tenant extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    // Automação do Uuid com package webpatser
    public static function boot()
    {
        parent::boot();

        self::creating(function($model){
            $model->uuid = (string) Uuid::generate(4);
        });
    }

    public function users(): HasMany
    {
        return $this->hasMany(User::class, );
    }
}
