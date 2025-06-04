<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Gallery;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\GalleryResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\GalleryResource\RelationManagers;

class GalleryResource extends Resource
{
    protected static ?string $model = Gallery::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';
    protected static ?string $navigationLabel = 'Kelola Galeri';
    public static ?string $label = 'Galeri';
    protected static ?string $slug = 'galeri';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                TextInput::make('judul_galeri')
                    ->label('Judul Galeri')
                    ->placeholder('Tulis judul galeri'),
                TextInput::make('deskripsi_galeri')
                    ->label('Deskripsi Galeri')
                    ->placeholder('Tulis deskripsi singkat galeri'),
                FileUpload::make('gambar_galeri')
                    ->label('Gambar Galeri')
                    ->placeholder('Upload gambar galeri')
                // ->directory('galeri')
                // ->placeholder('Unggah gambar galeri'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('judul_galeri')
                    ->label('Judul Galeri'),
                TextColumn::make('deskripsi_galeri')
                    ->label('Deskripsi Galeri'),
                ImageColumn::make('gambar_galeri')
                    ->label('Gambar Galeri'),
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
            'index' => Pages\ListGalleries::route('/'),
            'create' => Pages\CreateGallery::route('/create'),
            'edit' => Pages\EditGallery::route('/{record}/edit'),
        ];
    }
}
