<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingResource\Pages;
use App\Filament\Resources\SettingResource\RelationManagers;
use App\Models\setting;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SettingResource extends Resource
{
    protected static ?string $model = setting::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('phone')->required(),
                TextInput::make('fax')->required(),
                TextInput::make('email')->required(),
                TextInput::make('convert')->label(__("convert")),
                TextInput::make('experience')->label(__("experience")),
                TextInput::make('project')->label(__("projects number")),
                TextInput::make('companies')->label(__("companies number")),
                TextInput::make('developed_buildings')->label(__("developed buildings")),
                TextInput::make('developing_buildings')->label(__("developing buildings")),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('phone')->label(__("phone")),
                TextColumn::make('fax')->label(__("fax")),
                TextColumn::make('email')->label(__("email")),
                TextColumn::make('convert')->label(__("convert")),
                TextColumn::make('experience')->label(__("experience")),
                TextColumn::make('project')->label(__("projects number")),
                TextColumn::make('companies')->label(__("companies number")),
                TextColumn::make('developed_buildings')->label(__("developed buildings")),
                TextColumn::make('developing_buildings')->label(__("developing buildings")),


            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
//                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListSettings::route('/'),
//            'create' => Pages\CreateSetting::route('/create'),
            'edit' => Pages\EditSetting::route('/{record}/edit'),
        ];
    }

    protected static function getNavigationGroup(): ?string
    {
        return __('Settings');
    }

    public static function getLabel(): ?string
    {
        return __('Settings');
    }

    public static function getPluralLabel(): ?string
    {
        return __('Settings');
    }

    public static function canCreate(): bool
    {
        return false;
    }

    protected static function getNavigationBadge(): ?string
    {
        return self::getModel()::count();
    }


}
