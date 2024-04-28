<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReviewResource\Pages;
use App\Filament\Resources\ReviewResource\RelationManagers;
use App\Models\Product;
use App\Models\Review;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ReviewResource extends Resource
{
    protected static ?string $model = Review::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Product Reviews';

    protected static ?string $navigationGroup = 'Product Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('product_id')
                    ->label('Product ID'),
                TextInput::make('user_id')
                    ->label('User ID'),
                Textarea::make('review')
                    ->autosize()
                    ->readonly(),          
            ]);
    }

    public static function table(Table $table): Table
    {
        $user = User::where('id');

        return $table
            ->columns([
                TextColumn::make('product_id')
                    ->icon('heroicon-m-shopping-bag')
                    ->label('Product'),
                TextColumn::make('user_id')
                    ->icon('heroicon-m-user')
                    ->label('Review by')
                    ->searchable()
                    ->description(fn (Review $record): string => $record->review, position: 'above')
                    ->wrap(),
                TextColumn::make('created_at')
                    ->icon('heroicon-m-calendar-days')
                    ->dateTime()
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListReviews::route('/'),
            'create' => Pages\CreateReview::route('/create'),
            'edit' => Pages\EditReview::route('/{record}/edit'),
        ];
    }
}
