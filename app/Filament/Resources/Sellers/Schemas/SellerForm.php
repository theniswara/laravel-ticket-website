<?php

namespace App\Filament\Resources\Sellers\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SellerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('telephone')
                    ->tel()
                    ->required(),
                TextInput::make('location')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                TextInput::make('photo')
                    ->required(),
            ]);
    }
}
