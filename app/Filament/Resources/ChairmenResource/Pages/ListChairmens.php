<?php

namespace App\Filament\Resources\ChairmenResource\Pages;

use App\Filament\Resources\ChairmenResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListChairmens extends ListRecords
{
    protected static string $resource = ChairmenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
