<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InvestorResource\Pages;
use App\Filament\Resources\InvestorResource\RelationManagers;
use App\Models\Investor;
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
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Resources\Concerns\Translatable;


class InvestorResource extends Resource
{
    use Translatable;
    protected static ?string $model = Investor::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                ->schema([
                    TextInput::make('title')->label(__('title'))->required(),

                    RichEditor::make('content')->label(__('content'))->required(),

                    SpatieMediaLibraryFileUpload::make('attachments')->hint('min image size 450px * 640px')->label(__('attachments'))->collection('attachments')
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

            SpatieMediaLibraryImageColumn::make('attachments')

            ->label(__('attachments'))->collection('attachments'),

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
            'index' => Pages\ListInvestors::route('/'),
            'create' => Pages\CreateInvestor::route('/create'),
            'edit' => Pages\EditInvestor::route('/{record}/edit'),
        ];
    }

    public static function getTranslatableLocales(): array
    {
        return ['en', 'ar'];
    }

    protected static function getNavigationGroup(): ?string
    {
        return __('Investor relations');
    }

    public static function getLabel(): ?string
    {
        return __('investor relations blog');
    }

    public static function getPluralLabel(): ?string
    {
        return __('investor relations blog');
    }





}
