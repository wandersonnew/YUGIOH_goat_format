<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deck extends Model
{
    use HasFactory;
    // protected $table = 'deck';

    protected $fillable = [
        'name',
        'card_type',
        'card_sub_type',
        'attribute',
        'monster_type',
        'class',
        'level',
        'atk',
        'def',
        'card_text'
    ];
}
