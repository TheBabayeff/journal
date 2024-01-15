<?php

namespace App\Filament\Resources\ChairmenResource\Pages;

use App\Filament\Resources\ChairmenResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditChairmen extends EditRecord
{
    protected static string $resource = ChairmenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
