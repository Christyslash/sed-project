<?php

namespace App\Filament\Resources\ProjectNewResource\Pages;

use App\Filament\Resources\ProjectNewResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProjectNew extends EditRecord
{
    protected static string $resource = ProjectNewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
