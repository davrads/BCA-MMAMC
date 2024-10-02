<?php

namespace App\Filament\Resources\GlanceResource\Pages;

use App\Filament\Resources\GlanceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGlance extends EditRecord
{
    protected static string $resource = GlanceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
