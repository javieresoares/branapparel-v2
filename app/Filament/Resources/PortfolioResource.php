<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Portfolio;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\PortfolioResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PortfolioResource\RelationManagers;

class PortfolioResource extends Resource
{
    protected static ?string $model = Portfolio::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Kelola Portfolio';
    public static ?string $label = 'Portfolio';
    protected static ?string $slug = 'portfolio';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                TextInput::make('nama_portfolio')
                    ->label('Nama Portfolio')
                    ->placeholder('Tulis nama portfolio'),
                TextInput::make('deskripsi_portfolio')
                    ->label('Deskripsi Portfolio')
                    ->placeholder('Tulis deskripsi portfolio'),
                TextInput::make('drive_portfolio')
                    ->label('Link Drive Portfolio')
                    ->placeholder('Tulis link drive portfolio'),
                FileUpload::make('gambar_portfolio')
                    ->label('Gambar Portfolio')
                    ->placeholder('Upload gambar portfolio'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('nama_portfolio')
                    ->label('Nama Portfolio')
                    ->searchable(),
                TextColumn::make('deskripsi_portfolio')
                    ->label('Deskripsi Portfolio'),
                TextColumn::make('drive_portfolio')
                    ->label('Link Drive Portfolio'),
                ImageColumn::make('gambar_portfolio')
                    ->label('Gambar Portfolio'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListPortfolios::route('/'),
            'create' => Pages\CreatePortfolio::route('/create'),
            'edit' => Pages\EditPortfolio::route('/{record}/edit'),
        ];
    }
}
