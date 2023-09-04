<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FinancialResource\Pages;
use App\Filament\Resources\FinancialResource\RelationManagers;
use App\Models\Financial;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Livewire\TemporaryUploadedFile;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Card;
use Filament\Resources\Concerns\Translatable;

class FinancialResource extends Resource
{
    use Translatable;
    protected static ?string $model = Financial::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
            ->schema([
                TextInput::make('title')->label(__('title')),
                DatePicker::make('financial_date'),
                FileUpload::make('financial_file')->acceptedFileTypes(['application/pdf'])
                ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                    return (string) str($file->getClientOriginalName())->prepend('custom-prefix-');
                })
            ])


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('financial_date')->dateTime(),
                Tables\Columns\TextColumn::make('title')->label(__('title'))->limit('50')->sortable(),
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
    public static function getTranslatableLocales(): array
    {
        return ['en', 'ar'];
    }
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFinancials::route('/'),
            'create' => Pages\CreateFinancial::route('/create'),
            'edit' => Pages\EditFinancial::route('/{record}/edit'),
        ];
    }



    protected static function getNavigationGroup(): ?string
    {
        return __('financials');
    }

    public static function getLabel(): ?string
    {
        return __('financial');
    }

    public static function getPluralLabel(): ?string
    {
        return __('financial');
    }

    public static function getNavigationSort(): ?int
    {
        return 0;
    }
}
