<?php

namespace App\Filament\Resources\FooterrResource\Pages;

use App\Filament\Resources\FooterrResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageFooterrs extends ManageRecords
{
    protected static string $resource = FooterrResource::class;

    protected function getActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
