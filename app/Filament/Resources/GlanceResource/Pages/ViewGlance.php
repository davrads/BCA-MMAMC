<?php

namespace App\Filament\Resources\GlanceResource\Pages;

use App\Filament\Resources\GlanceResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewGlance extends ViewRecord
{
    protected static string $resource = GlanceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
