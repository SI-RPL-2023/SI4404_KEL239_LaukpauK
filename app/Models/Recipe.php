<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'id_user',
        'judul',
        'slug',
        'kategori',
        'gambar_resep',
        'isi_resep'	
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
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
