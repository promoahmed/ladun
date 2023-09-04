<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DownloadResource\Pages;
use App\Filament\Resources\DownloadResource\RelationManagers;
use App\Models\Download;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Facades\Filament;
use Filament\Tables\Columns\TextColumn;
use Filament\Resources\Concerns\Translatable;

class DownloadResource extends Resource
{
    use Translatable;
    protected static ?string $model = Download::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

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
                TextColumn::make('project_attachment')
                ->formatStateUsing(fn (string $state): string => __("project_attachments.{$state}"))
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
            'index' => Pages\ListDownloads::route('/'),
            'create' => Pages\CreateDownload::route('/create'),
            'edit' => Pages\EditDownload::route('/{record}/edit'),
        ];
    }

    public static function getTranslatableLocales(): array
    {
        return ['en', 'ar'];
    }

    protected static function getNavigationGroup(): ?string
    {

        // Filament::registerNavigationGroups([
        //     'Project',
        //     'Utility',
        //     'Download',
        // ]);
        return __('Projects');
    }


    public static function getLabel(): ?string
    {
        return __('Download');
    }

    public static function getPluralLabel(): ?string
    {
        return __('Download');
    }
    public static function getNavigationSort(): ?int
{
    return 3;
}
}
