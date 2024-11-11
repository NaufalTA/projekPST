<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Gallery extends Model
{
    use HasFactory, SoftDeletes;
    protected $table;
    protected $guarded = ['id'];
    protected $with = ['user'];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($article) {
            $article->slug = Str::slug($article->tittle); // Generate slug saat creating
        });

        static::updating(function ($article) {
            $article->slug = Str::slug($article->tittle); // Generate slug saat updating
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeSearch(Builder $query): void
    {
        $query->where('tittle', 'like', '%' . request('search') . '%')
                ->orWhere('uploaded_by', 'like', '%' . request('search') . '%');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
