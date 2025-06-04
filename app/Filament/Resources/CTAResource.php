<?php

namespace App\Filament\Resources;

use App\Models\CTA;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\CTAResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CTAResource\RelationManagers;

class CTAResource extends Resource
{
    protected static ?string $model = CTA::class;

    protected static ?string $navigationIcon = 'heroicon-o-hand-raised';
    protected static ?string $navigationLabel = 'Kelola CTA';
    public static ?string $label = 'CTA';
    protected static ?string $slug = 'cta';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                TextInput::make('judul_cta')
                    ->label('Judul CTA')
                    ->placeholder('Tulis judul CTA'),
                TextInput::make('deskripsi_cta')
                    ->label('Deskripsi CTA')
                    ->placeholder('Tulis deskripsi CTA'),
                // TextInput::make('whatsapp_cta'),
                FileUpload::make('gambar1_cta')
                    ->label('Gambar 1 CTA')
                    ->placeholder('Upload gambar CTA'),
                FileUpload::make('gambar2_cta')
                    ->label('Gambar 2 CTA')
                    ->placeholder('Upload gambar CTA'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('judul_cta')
                    ->label('Judul CTA'),
                TextColumn::make('deskripsi_cta')
                    ->label('Deskripsi CTA'),
                // TextColumn::make('whatsapp_cta'),
                ImageColumn::make('gambar1_cta')
                    ->label('Gambar 1 CTA'),
                ImageColumn::make('gambar2_cta')
                    ->label('Gambar 2 CTA'),
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
            'index' => Pages\ListCTAS::route('/'),
            'create' => Pages\CreateCTA::route('/create'),
            'edit' => Pages\EditCTA::route('/{record}/edit'),
        ];
    }
}
