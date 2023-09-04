<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PhaseResource\Pages;
use App\Filament\Resources\PhaseResource\RelationManagers;
use App\Models\Phase;
use App\Models\Project;
use App\Models\Unit;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Resources\Concerns\Translatable;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Closure;
use Filament\Forms\Components\DatePicker;

class PhaseResource extends Resource
{
    use Translatable;
    protected static ?string $model = Phase::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?int $NavigationSort = 1;

    public $project_id;

    public static function form(Form $form): Form
    {
        return $form

            ->schema([
                TextInput::make('name')->label(__('Phase Name'))->required(),
                TextInput::make('long')->label(__('Longitude'))->required(),
                TextInput::make('lat')->label(__('Latitude'))->required(),
                TextInput::make('achieve_percentage')->label(__('Achieve Percentage'))->required()->numeric(),
                // projects
                Select::make('project_id')->label(__('Project'))->required()
                // ->multiple()
                ->options(Project::all()->pluck('name', 'id'))
                ->relationship('project', 'name')
                ->getOptionLabelFromRecordUsing(fn (Project $record) => "{$record->name}")
                // ->afterStateUpdated(function (Closure $set, $state) {
                //     $set('units.project_id', $state);
                // })
                ,


                //=====================
                // Models of Projects
                //======================
                Section::make('units')->schema([
                    Repeater::make('units')
                    ->relationship('units')
                    ->schema([
                        TextInput::make('type')->required(),
                        TextInput::make('name')->required(),
                        TextInput::make('price')->required(),
                        TextInput::make('area')->required(),
                        TextInput::make('beds')->required(),
                        TextInput::make('long')->required(),
                        TextInput::make('lat')->required(),
                        TextInput::make('location_in_project')->required(),
                        TextInput::make('state')->required(),
                        DatePicker::make('delivery_date')->required(),
                        TextInput::make('construction_code')->required(),
                        TextInput::make('parking_code')->required(),
                        // projects
                        // TextInput::make('project_id')->label(__('project'))

                        // ->afterStateHydrated(function(TextInput $component, $state){
                        //     $component->state(function(Closure $get){
                        //         return $get('lat');
                        //         // return 'hello';
                        //     });
                        // }),
                        // Select::make('project_id')->label(__('Project'))
                        // // ->multiple()
                        // ->options(Project::all()->pluck('name', 'id'))
                        // ->relationship('project', 'name')
                        // ->getOptionLabelFromRecordUsing(fn (Project $record) => "{$record->name}"),
                    ])->columns(2)
                ])->collapsed()
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->label(__('id'))->sortable(),
                TextColumn::make('name')->label(__('name'))->sortable(),
                TextColumn::make('long')->label(__('Longitude')),
                TextColumn::make('lat')->label(__('Latitude')),
                TextColumn::make('project_id')->label(__('Project'))->formatStateUsing(function(Phase $record){
                    return $record->project->name;
                })
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
            'index' => Pages\ListPhases::route('/'),
            'create' => Pages\CreatePhase::route('/create'),
            'edit' => Pages\EditPhase::route('/{record}/edit'),
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
        return __('Phase');
    }

    public static function getPluralLabel(): ?string
    {
        return __('Phases');
    }

    public static function getNavigationSort(): ?int
    {
        return 0;
    }

}
