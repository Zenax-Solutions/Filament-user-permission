<?php

namespace App\Filament\Resources\UserResource\Pages;

use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;
use App\Filament\Resources\UserResource;

class ViewUser extends ViewRecord
{
    protected static string $resource = UserResource::class;

    public function getHeaderActions(): array
    {
        return [EditAction::make()];
    }
}
