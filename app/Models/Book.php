<?php

namespace App\Models;

use App\Enums\BookLanguange;
use App\Enums\BookStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Book extends Model
{
    protected $fillable = [
        'book_code',
        'title',
        'slug',
        'author',
        'publication_year',
        'isbn',
        'languange',
        'synopsis',
        'number_of_pages',
        'status',
        'cover',
        'category_id',
        'publisher_id'
    ];

    protected function casts(): array
    {
        return [
            'languange' => BookLanguange::class,
            'status' => BookStatus::class
        ];
    }

    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function stock():HasOne
    {
        return $this->hasOne(Stock::class);
    }

    public function loans():HasMany
    {
        return $this->hasMany(Loan::class);
    }

    public function publisher():BelongsTo
    {
        return $this->belongsTo(Publisher::class);
    }

   
}
