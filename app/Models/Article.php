<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'user_id',
        'judul',
        'slug',
        'gambar_artikel',
        'isi_artikel'	
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul'
            ]
        ];
    }

    public function users() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
