<?php

namespace App\Filament\Resources\BadgeColorPrimaryResource\Pages;

use App\Filament\Resources\BadgeColorPrimaryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBadgeColorPrimary extends EditRecord
{
    protected static string $resource = BadgeColorPrimaryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
