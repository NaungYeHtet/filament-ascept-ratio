<?php

namespace App\Filament\Resources\BadgeColorPrimaryResource\Pages;

use App\Filament\Resources\BadgeColorPrimaryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBadgeColorPrimaries extends ListRecords
{
    protected static string $resource = BadgeColorPrimaryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
