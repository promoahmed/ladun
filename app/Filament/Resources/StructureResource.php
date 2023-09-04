<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StructureResource\Pages;
use App\Filament\Resources\StructureResource\RelationManagers;
use App\Models\Structure;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Livewire\TemporaryUploadedFile;
use Filament\Tables\Columns\ImageColumn;
use Filament\Resources\Concerns\Translatable;

class StructureResource extends Resource
{
    use Translatable;
    protected static ?string $model = Structure::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                ->schema([
                        TextInput::make('name')->required(),
                        TextInput::make('position')->required(),
                        FileUpload::make('image')
                        ->hint('max image size 120px * 120px')
                        ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                            return (string) str($file->getClientOriginalName())->prepend('custom-prefix-');
                        }),
                        TextInput::make('qualification')->required(),




                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('position'),
                ImageColumn::make('image'),
                TextColumn::make('qualification'),
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
            'index' => Pages\ListStructures::route('/'),
            'create' => Pages\CreateStructure::route('/create'),
            'edit' => Pages\EditStructure::route('/{record}/edit'),
        ];
    }
    public static function getTranslatableLocales(): array
    {
        return ['en', 'ar'];
    }
    protected static function getNavigationGroup(): ?string
    {
        return __('About Ladun');
    }

    public static function getLabel(): ?string
    {
        return __('Company Strcture');
    }

    public static function getPluralLabel(): ?string
    {
        return __('Company Strcture');
    }

    public static function getNavigationSort(): ?int
    {
        return 0;
    }
}
