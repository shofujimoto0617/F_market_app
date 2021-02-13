<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class IsActive extends Enum
{
    const Private =   0;
    const Public =   1;

    public static function getGenre($value): string {
        switch ($value) {
            case self::Private:
                return '無効';
                brake;
            case self::Public:
                return '有効';
                brake;
            default:
                return self::getKey($value);
        }
    }

    public static function getValue(string $key)
    {
        switch ($key) {
            case '無効':
                return 0;
            case '有効':
                return 1;
            default:
                return self::getValue($key);
        }
    }
}
