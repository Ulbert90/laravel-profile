<?php

namespace App\Filament\Resources\SectionResource\Pages;

use App\Filament\Resources\SectionResource;
use App\Models\Section; // Corrected the class name to start with an uppercase letter
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Storage;

class EditSection extends EditRecord
{
    protected static string $resource = SectionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
                function (Section $record) { // Corrected the class name to start with an uppercase letter
                    if ($record->thumbnail) {
                        Storage::disk('public')->delete($record->thumbnail);
                    }
                }
            )
        ];
    }
}
