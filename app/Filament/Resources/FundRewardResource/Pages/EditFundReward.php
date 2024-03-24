<?php

namespace App\Filament\Resources\FundRewardResource\Pages;

use App\Filament\Resources\FundRewardResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFundReward extends EditRecord
{
    protected static string $resource = FundRewardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
