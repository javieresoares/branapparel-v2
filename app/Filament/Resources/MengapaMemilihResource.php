<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\MengapaMemilih;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\MengapaMemilihResource\Pages;
use App\Filament\Resources\MengapaMemilihResource\RelationManagers;

class MengapaMemilihResource extends Resource
{
    protected static ?string $model = MengapaMemilih::class;

    protected static ?string $navigationIcon = 'heroicon-o-check-badge';
    protected static ?string $navigationLabel = 'Kelola Mengapa Memilih Kami';
    public static ?string $label = 'Mengapa Memilih Kami';
    protected static ?string $slug = 'mengapa-memilih-kami';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                TextInput::make('ikon_mengapamemilih')
                    ->label('Ikon Mengapa Memilih Kami')
                    ->placeholder('Tulis style ikon fontawesome'),
                TextInput::make('judul_mengapamemilih')
                    ->label('Poin Mengapa Memilih Kami')
                    ->placeholder('Tulis poin mengapa memilih kami'),
                TextInput::make('teks_mengapamemilih')
                    ->label('Deskripsi Mengapa Memilih Kami')
                    ->placeholder('Tulis deskripsi singkat mengapa memilih kami'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('ikon_mengapamemilih')
                    ->label('Ikon Mengapa Memilih Kami'),
                TextColumn::make('judul_mengapamemilih')
                    ->label('Poin Mengapa Memilih Kami'),
                TextColumn::make('teks_mengapamemilih')
                    ->label('Deskripsi Mengapa Memilih Kami'),
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
            'index' => Pages\ListMengapaMemilihs::route('/'),
            'create' => Pages\CreateMengapaMemilih::route('/create'),
            'edit' => Pages\EditMengapaMemilih::route('/{record}/edit'),
        ];
    }
}
