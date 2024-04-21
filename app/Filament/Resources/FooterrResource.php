<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FooterrResource\Pages;
use App\Filament\Resources\FooterrResource\RelationManagers;
use App\Models\Footerr;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FooterrResource extends Resource
{
    protected static ?string $model = Footerr::class;

    protected static ?string $navigationIcon = 'heroicon-o-globe';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('label'),
                Tables\Columns\TextColumn::make('value')->limit(40),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()->form(function (Footerr $record){
                    switch($record->type){
                        case 'text':
                            return [Forms\Components\TextInput::make('value')->label
                            ($record->label)];
                            break;
                    }
                }),
                // Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                // Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageFooterrs::route('/'),
        ];
    }    
}
