<?php

namespace App\Filament\Resources;

use Closure;
use Filament\Forms;
use Filament\Tables;
use App\Models\Category;
use Illuminate\Support\Str;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\CategoryResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CategoryResource\RelationManagers;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Data Management';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image'),
                Forms\Components\TextInput::make('name')
                    ->reactive()
                    ->afterStateUpdated(function (Closure $set, $state) {
                        $set('slug', Str::slug($state));  //Autopopulates in slug textbox

                        //!Category Manipulations
                        $categoryParts = explode(' ', trim($state));
                        $first_word = array_shift($categoryParts);
                        $second_word = array_pop($categoryParts);
                        $set(
                            'category_code',
                            Str::substr($first_word, 0, 3) . Str::substr($second_word, 0, 3)
                        );;
                    })
                    ->autofocus()
                    ->unique()
                    ->required(),
                Forms\Components\TextInput::make('slug')
                    ->disabled()
                    ->required(),
                Forms\Components\TextInput::make('category_code')
                    ->dehydrateStateUsing(fn ($state) => Str::lower($state))
                    ->helperText('Code will generated based from the first three characters')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('slug'),
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }
}
