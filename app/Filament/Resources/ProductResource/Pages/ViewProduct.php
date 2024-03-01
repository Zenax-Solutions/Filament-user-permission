<?php

namespace App\Filament\Resources\ProductResource\Pages;

use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;
use App\Filament\Resources\ProductResource;

class ViewProduct extends ViewRecord
{
    protected static string $resource = ProductResource::class;

    public function getHeaderActions(): array
    {
        return [EditAction::make()];
    }
}
