<?php

namespace App\Filament\Resources\ExperiencesResource\Pages;

use App\Models\experiences;
use Filament\Pages\Actions;
use Illuminate\Support\Facades\Storage;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\ExperiencesResource;

class EditExperiences extends EditRecord
{
    protected static string $resource = ExperiencesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
                function(experiences $record){
                    if($record->thumbnail){
                        Storage::disk('public')->delete($record->thumbnail);
                    }
                }
            ),
        ];
    }
}
