<?php

namespace App\Filament\Resources\ProjectContributionResource\Pages;

use App\Filament\Resources\ProjectContributionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProjectContribution extends EditRecord
{
    protected static string $resource = ProjectContributionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
