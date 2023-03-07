<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        "title",
        "time",
        "newsType",
        "miniText",
        "mainText",
        "imgCheck",
        "titleUrl",
        "mainImg",
    ];

    // protected $casts = [
    //     "mainImg" => FileUploadCast::class,
    // ];
}
