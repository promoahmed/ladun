<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DepartmentResource\Pages;
use App\Filament\Resources\DepartmentResource\RelationManagers\RegionsRelationManager;
use App\Models\Department;
use Filament\Forms;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Livewire\TemporaryUploadedFile;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;


class DepartmentResource extends Resource
{

    use Translatable;   
    protected static ?string $model = Department::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?int $NavigationSort = 1;


    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Fieldset::make('Add Department')->label(__('Add Department'))
            ->schema([
                TextInput::make('title')->label(__('Department title')),
                SpatieMediaLibraryFileUpload::make('Department image')
                ->hint('minimum image dimension 400px * 1520px for mid size')
                ->label(__('Department image'))
                ->collection('department'),
            ])
            ->columns(1)
        ]);

    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('id')->label(__('id'))->sortable(),
            Tables\Columns\TextColumn::make('title')->label(__('Department title'))->limit('50')->sortable(),
            SpatieMediaLibraryImageColumn::make('Department_image')->label(__('Department image'))->collection('department'),
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
            // RegionsRelationManager::class,
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDepartments::route('/'),
            'create' => Pages\CreateDepartment::route('/create'),
            'edit' => Pages\EditDepartment::route('/{record}/edit'),
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
        return __('Department');
    }

    public static function getPluralLabel(): ?string
    {
        return __('Departments');
    }

    public static function getNavigationSort(): ?int
    {
        return 0;
    }

}
