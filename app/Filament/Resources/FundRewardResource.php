<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FundRewardResource\Pages;
use App\Filament\Resources\FundRewardResource\RelationManagers;
use App\Models\FundReward;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class FundRewardResource extends Resource
{
    protected static ?string $model = FundReward::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
              Forms\Components\TextInput::make('title')
                  ->required()
                  ->live(onBlur: true)
                  ->afterStateUpdated(fn (string $operation, $state, Forms\Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null),

                Forms\Components\TextInput::make('slug')
                    ->disabled()
                    ->dehydrated()
                    ->required()
                    ->unique(FundReward::class, 'slug', ignoreRecord: true),
                Forms\Components\FileUpload::make('photo')
                    ->downloadable()
                    ->reorderable()
                    ->multiple()
                    ->directory('fundRewards-photos')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('video')
                    ->directory('fundRewards-video')
                    ->columnSpanFull(),
                Forms\Components\MarkdownEditor::make('content')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFundRewards::route('/'),
            'create' => Pages\CreateFundReward::route('/create'),
            'edit' => Pages\EditFundReward::route('/{record}/edit'),
        ];
    }
}
