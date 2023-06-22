<?php

namespace App\Filament\Resources\MenuItemResource\Pages;

use App\Filament\Resources\MenuItemResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMenuItems extends ListRecords
{
    protected static string $resource = MenuItemResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
