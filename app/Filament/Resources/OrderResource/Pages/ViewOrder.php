<?php

namespace App\Filament\Resources\OrderResource\Pages;

use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;
use App\Filament\Resources\OrderResource;

class ViewOrder extends ViewRecord
{
    protected static string $resource = OrderResource::class;

    public function getHeaderActions(): array
    {
        return [EditAction::make()];
    }
}
