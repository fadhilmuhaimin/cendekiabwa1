<?php

namespace App\Enums;

enum ReturnBookCondition : string
{

    case GOOD = "Baik";

    case DAMAGED = "Rusak";

    case LOST = "Hilang";

    public static function option(): array
    {
        return collect(self::cases())->map(fn($item)=>[
            'value' => $item->value,
            'label' => $item->name
        ])->values()->toArray();
    }
}