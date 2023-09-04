<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Department;
use App\Models\Project;
use App\Models\Region;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Closure;
use Doctrine\DBAL\Schema\Schema;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\MultiSelect;
use Illuminate\Support\Str;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\FileUpload;
use Livewire\TemporaryUploadedFile;
use Filament\Tables\Columns\IconColumn;
use Filament\Resources\Concerns\Translatable;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Repeater;

class ProjectResource extends Resource
{
    use Translatable;

    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-office-building';
    protected static ?int $NavigationSort = 1;


    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Fieldset::make('Add Project')

            ->schema([
                TextInput::make('name')->label(__('name'))->reactive()
                ->afterStateUpdated(function (Closure $set, $state) {
                    $set('slug', Str::slug($state));
                })->required(),

            TextInput::make('slug')->label(__('slug'))->required(),

            TextInput::make('phone')->label(__('phone'))
            ->tel()
            ->telRegex('/^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\.\/0-9]*$/')
            ->required(),

            TextInput::make('email')->label(__('email'))
            ->email(),

            TextInput::make('address')->label(__('address'))
            ->required(),

            SpatieMediaLibraryFileUpload::make('Main Image')
            ->hint('max image dimension 150px * 150px')
            ->label(__('Main Image'))->collection('projects'),
            SpatieMediaLibraryFileUpload::make('attachments')
            ->hint('min image dimension 400px * 707px')
            ->label(__('attachments'))
            ->multiple()
            ->enableReordering(),

            FileUpload::make('attachment')->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                return (string) str($file->getClientOriginalName())->prepend('custom-prefix-');
            }),

            TextInput::make('Land_area')->label(__('Land_area')),
            TextInput::make('building_area')->label(__('building_area'))
            ->numeric(),

            TextInput::make('units_number')->label(__('units_number'))
            ->numeric(),

            TextInput::make('models_number')->label(__('models_number'))
            ->numeric(),

                 TextInput::make('facilities')->label(__('facilities'))
            ->numeric(),

                 TextInput::make('commercial')->label(__('commercial'))
            ->numeric(),

                 TextInput::make('investment')->label(__('investment'))
            ->numeric(),

                 TextInput::make('government')->label(__('government'))
            ->numeric(),

                 TextInput::make('educational')->label(__('educational'))
            ->numeric(),

                 TextInput::make('trade')->label(__('trade'))
            ->numeric(),
                 TextInput::make('gardens')->label(__('gardens'))
            ->numeric(),
                 TextInput::make('mosque')->label(__('mosque'))->numeric() ,
              TextInput::make('video')->label(__('video'))   ,
                     TextInput::make('project_video')->label(__('project_video')),
            CheckboxList::make('utilities')->label(__('utilities'))
                ->relationship('utilities', 'title')->columns(3),

            RichEditor::make('content')->columnSpanFull()->label(__('content')),


            Toggle::make('is_published')->label(trans('is_published')),


            ])
            ->columns(3),

            //===========================
            // Department for peoject
            //=======================
            Fieldset::make('Assign Region')->label(__('Assign Region'))->columns(2)
            ->schema([

                // region
                Select::make('region_id')->label(__('Region'))
                ->options(Region::all()->pluck('title', 'id'))
                ->relationship('region', 'title')
                ->getOptionLabelFromRecordUsing(fn (Region $record) => "{$record->title}, {$record->department->title}"),

            ]),

            //===========================
            // Downloads field for peoject
            //=======================

            Section::make('Downloads')
            ->schema([
                TextInput::make('downloads_text')->label(__('content')),
                SpatieMediaLibraryFileUpload::make('Download image')
                    ->hint('max image dimension 150px * 150px')
                    ->label(__('Main Image'))->collection('download_image'),
                Repeater::make('members')
                ->relationship('downloads')
                ->schema([
                    TextInput::make('name')->required(),
                    FileUpload::make('project_attachment')->acceptedFileTypes(['application/pdf'])
                    ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                        return (string) str($file->getClientOriginalName())->prepend('custom-prefix-');
                    })->directory('Download-attachments')->required(),
                ])
                ->columns(2)

            ])
          ,


    //=====================
    // Models of Projects
    //======================
    Section::make('Models ')
    ->schema([
        Repeater::make('Models')
         ->relationship('project_models')
        ->schema([
            TextInput::make('title')->required(),
            TextInput::make('Land_area')->required(),
            TextInput::make('building_area')->required(),
            TextInput::make('units_number')->required(),
            TextInput::make('floors_number')->required(),



            CheckboxList::make('utilities')->label(__('utilities'))
            ->relationship('utilities', 'title'),
            SpatieMediaLibraryFileUpload::make('attachments')
                ->hint('min image dimension 400px * 707px')
                ->label(__('attachments'))
                ->multiple()
                ->enableReordering(),
        ])
        ->columns(2)


    ])
    ->collapsed(),


    //=====================
    // Locations for  Projects
    //======================


    Section::make('Locations')
    ->relationship('location')
    ->description('Description')
    ->schema([
        TextInput::make('city')->required(),
            TextInput::make('address')->required(),
        TextInput::make('Latitude')->required(),
        TextInput::make('Longitude')->required()
    ])

    ->collapsed(),




        ]);
}

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label(__('id'))->sortable(),
                Tables\Columns\TextColumn::make('name')->label(__('name'))->limit('50')->sortable(),
                Tables\Columns\TextColumn::make('slug')->label(__('slug'))->limit('50'),
                IconColumn::make('is_published')->label(trans('is_published'))->boolean(),
                SpatieMediaLibraryImageColumn::make('Main Image')->label(__('Main Image'))->collection('projects'),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
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
        return __('Project');
    }

    public static function getPluralLabel(): ?string
    {
        return __('Project');
    }

    protected static function getNavigationBadge(): ?string
    {
        return self::getModel()::count();
    }







}
