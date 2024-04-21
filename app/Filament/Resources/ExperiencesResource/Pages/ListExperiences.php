<?php

namespace App\Filament\Resources\ExperiencesResource\Pages;

use App\Filament\Resources\ExperiencesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListExperiences extends ListRecords
{
    protected static string $resource = ExperiencesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
