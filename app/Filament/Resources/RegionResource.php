<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RegionResource\Pages;
use App\Filament\Resources\RegionResource\RelationManagers;
use App\Filament\Resources\RegionResource\RelationManagers\ProjectsRelationManager;
use App\Models\Department;
use App\Models\Region;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\Concerns\Translatable;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;



class RegionResource extends Resource
{
    use Translatable;   

    protected static ?string $model = Region::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?int $NavigationSort = 1;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                ->schema([
                        TextInput::make('title')->required(),
                        
                // department
                Select::make('department_id')->label(__('Department'))
                // ->options(Department::all()->pluck('title', 'id'))
                ->relationship('department', 'title')
                ->getOptionLabelFromRecordUsing(fn (Department $record) => "{$record->title}"),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
                TextColumn::make('department.title')->label(__('Department'))
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
            // ProjectsRelationManager::class,

        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRegions::route('/'),
            'create' => Pages\CreateRegion::route('/create'),
            'edit' => Pages\EditRegion::route('/{record}/edit'),
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
        return __('Region');
    }

    public static function getPluralLabel(): ?string
    {
        return __('Regions');
    }

    public static function getNavigationSort(): ?int
    {
        return 0;
    }
}
