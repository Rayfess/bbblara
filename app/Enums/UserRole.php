<?php

namespace App\Enums;

enum UserRole: string
{
    case SUPERADMIN = 'superadmin';
    case ADMIN = 'admin';
    case USER = 'user';

    // ui ux
    public function label(): string
    {
        return match ($this) {
            self::SUPERADMIN => 'Super Admin',
            self::ADMIN => 'Admin',
            self::USER => 'User',
        };
    }


    public static function options(): array
    {
        return collect(self::cases())->mapWithKeys(fn($case) => [
            $case->value => $case->label() 
            ])->toArray();
        }

    // validation or test
        public static function values() : array
        {
            return array_column(self::cases(), 'value');
        }
    }
    