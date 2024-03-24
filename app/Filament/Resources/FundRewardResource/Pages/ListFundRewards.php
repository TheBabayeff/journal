<?php

namespace App\Filament\Resources\FundRewardResource\Pages;

use App\Filament\Resources\FundRewardResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFundRewards extends ListRecords
{
    protected static string $resource = FundRewardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
