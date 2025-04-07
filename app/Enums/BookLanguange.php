<?php


namespace App\Enums;

enum BookLanguange:string
{
    case ENGLISH = 'english';
    case INDONESIA = 'indonesia';
    case JAPAN = 'japan';

    public static function options():array
    {
        return collect(self::cases())->map(fn($item) => [
            'value' => $item->value,
            'label' => $item->name
        ])->values()->toArray();
    }
}