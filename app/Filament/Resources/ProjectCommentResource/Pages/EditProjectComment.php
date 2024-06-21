<?php

namespace App\Filament\Resources\ProjectCommentResource\Pages;

use App\Filament\Resources\ProjectCommentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProjectComment extends EditRecord
{
    protected static string $resource = ProjectCommentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
