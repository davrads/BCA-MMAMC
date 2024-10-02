<?php

namespace App\Filament\Resources\GlanceResource\Pages;

use App\Filament\Resources\GlanceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGlances extends ListRecords
{
    protected static string $resource = GlanceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
