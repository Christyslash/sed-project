<?php

namespace App\Filament\Resources\ProjectNewResource\Pages;

use App\Filament\Resources\ProjectNewResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProjectNews extends ListRecords
{
    protected static string $resource = ProjectNewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
