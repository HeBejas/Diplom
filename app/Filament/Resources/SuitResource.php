<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SuitResource\Pages;
use App\Filament\Resources\SuitResource\RelationManagers;
use App\Models\Suit;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Infolists\Components\TextEntry;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Infolists\Infolist;
class SuitResource extends Resource
{
    protected static ?string $model = Suit::class;
    protected static ?string $pluralModelLabel = 'Костюмы';
    protected static ?string $modelLabel = 'Костюм';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    TextInput::make('name')->required()->maxLength(255)->label('Название'),
                    TextInput::make('description')->required()->maxLength(255)->label('Описание'),
                    TextInput::make('price')->numeric()->required()->minLength(1)->maxLength(9)->minValue(1)->label('Цена'),
                    SpatieMediaLibraryFileUpload::make('image')->label('Изображение')->collection('suitsCollection'),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->label('ID')->sortable(),
                TextColumn::make('name')->limit(50)->label('Название')->sortable(),
                TextColumn::make('description')->limit(50)->label('Описание'),
                SpatieMediaLibraryImageColumn::make('image')->label('Изображение')->collection('suitsCollection'),
                TextColumn::make('price')->money('RUB')->label('Цена')->sortable(),

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
            'index' => Pages\ListSuits::route('/'),
            'create' => Pages\CreateSuit::route('/create'),
            'edit' => Pages\EditSuit::route('/{record}/edit'),
        ];
    }

}
