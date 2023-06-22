<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\RelationManagers\CategoriesRelationManager;
use Closure;
use App\Models\Job;
use Filament\Forms;
use Filament\Tables;
use Illuminate\Support\Str;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\JobResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\JobResource\RelationManagers;
use League\CommonMark\Normalizer\SlugNormalizer;

class JobResource extends Resource
{
    protected static ?string $model = Job::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    protected static ?string $navigationGroup = 'Data Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->reactive()
                    ->afterStateUpdated(function (Closure $set, $state) {
                        $set('slug', Str::slug($state));  //Autopopulates in slug textbox

                        //! Job Code manipulation

                        $jobname = explode(' ', trim($state));
                        $firstword = array_shift($jobname);
                        $secondword = array_pop($jobname);
                        $set('job_code', Str::substr($firstword, 0, 3) . Str::substr($secondword, 0, 3));
                    })
                    ->autofocus()
                    ->required(),
                Forms\Components\Toggle::make('is_featured')
                    ->required(),
                Forms\Components\TextInput::make('slug')
                    ->disabled()
                    ->required(),
                Forms\Components\TextInput::make('job_code')
                    ->required()
                    ->dehydrateStateUsing(fn ($state) => Str::lower($state)),
                Forms\Components\TextInput::make('price')
                    ->required(),
                Forms\Components\FileUpload::make('image'),
                Forms\Components\MarkdownEditor::make('details'),
                Forms\Components\MarkdownEditor::make('description'),
                Forms\Components\CheckboxList::make('categories')
                    ->relationship('categories', 'name'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
                Tables\Columns\IconColumn::make('is_featured')->sortable()->boolean(),
                Tables\Columns\TextColumn::make('slug'),
                Tables\Columns\TextColumn::make('price')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('m-D-y')
                    ->sortable(),
                Tables\Columns\TextColumn::make('updated_at')->dateTime('m-D-y'),
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
            CategoriesRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListJobs::route('/'),
            'create' => Pages\CreateJob::route('/create'),
            'edit' => Pages\EditJob::route('/{record}/edit'),
        ];
    }
}
