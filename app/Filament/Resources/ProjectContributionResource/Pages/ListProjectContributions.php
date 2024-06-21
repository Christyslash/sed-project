<?php

namespace App\Filament\Resources\ProjectContributionResource\Pages;

use App\Filament\Resources\ProjectContributionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProjectContributions extends ListRecords
{
    protected static string $resource = ProjectContributionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
