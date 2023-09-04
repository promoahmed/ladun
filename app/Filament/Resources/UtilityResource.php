<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UtilityResource\Pages;
use App\Filament\Resources\UtilityResource\RelationManagers;
use App\Models\Utility;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Fieldset;
use Filament\Resources\Concerns\Translatable;
class UtilityResource extends Resource
{
    use Translatable;
    protected static ?string $model = Utility::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('add Utilities')
                ->schema([
                    TextInput::make('title')->label(__('Utility_title')),
                    SpatieMediaLibraryFileUpload::make('Utility_image')
                    ->hint('max image size 35px * 35px')
                    ->collection('utility'),
                ])
                ->columns(1)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label(__('id'))->sortable(),
                Tables\Columns\TextColumn::make('title')->label(__('Utility_title'))->limit('50')->sortable(),
                SpatieMediaLibraryImageColumn::make('Utility_image')->label(__('Utility_image'))->collection('utility'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListUtilities::route('/'),
            'create' => Pages\CreateUtility::route('/create'),
            'edit' => Pages\EditUtility::route('/{record}/edit'),
        ];
    }

    public static function getTranslatableLocales(): array
    {
        return ['en', 'ar'];
    }


    protected static function getNavigationGroup(): ?string
    {
        return __('Projects');
    }

    public static function getLabel(): ?string
    {
        return __('Utility');
    }

    public static function getPluralLabel(): ?string
    {
        return __('Utility');
    }
}
