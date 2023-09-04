<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MediaCenterResource\Pages;
use App\Filament\Resources\MediaCenterResource\RelationManagers;
use App\Models\MediaCenter;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MediaCenterResource extends Resource
{
    use Translatable;
    protected static ?string $model = MediaCenter::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('title')->label(__('title'))->required(),
                        SpatieMediaLibraryFileUpload::make('Download image')->acceptedFileTypes(['application/pdf'])
                            ->label(__('pdf'))->collection('download_media_center'),
                        RichEditor::make('content')->label(__('content'))->required(),

                        SpatieMediaLibraryFileUpload::make('attachments')->label(__('attachments'))->collection('attachments')
                            ->hint('min image size 350px * 1520px')
                            ->multiple()
                            ->enableReordering()->required(),




                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->label(__('title')),

                TextColumn::make('content')->label(__('content'))->limit(50)->html(),



                TextColumn::make('created_at')->label(__('created_at'))->dateTime(),

                SpatieMediaLibraryImageColumn::make('cv')->label(__('attachments'))->collection('attachments'),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),

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
            'index' => Pages\ListMediaCenters::route('/'),
            'create' => Pages\CreateMediaCenter::route('/create'),
            'edit' => Pages\EditMediaCenter::route('/{record}/edit'),
        ];
    }



    public static function getTranslatableLocales(): array
    {
        return ['en', 'ar'];
    }

    protected static function getNavigationGroup(): ?string
    {
        return __('Media Center');
    }

    public static function getLabel(): ?string
    {
        return __('Media Center');
    }

    public static function getPluralLabel(): ?string
    {
        return __('Media Center');
    }
}
