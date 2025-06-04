<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Produk;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\SelectColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ProdukResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProdukResource\RelationManagers;

class ProdukResource extends Resource
{
    protected static ?string $model = Produk::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';
    protected static ?string $navigationLabel = 'Kelola Produk';
    public static ?string $label = 'Produk';
    protected static ?string $slug = 'produk';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                TextInput::make('nama_produk')
                    ->label('Nama Produk')
                    ->placeholder('Tulis nama produk'),
                TextInput::make('deskripsi_produk')
                    ->label('Deskripsi Produk')
                    ->placeholder('Tulis deskripsi produk'),
                Select::make('kategori_produk')
                    ->options([
                        'Apparel' => 'Apparel',
                        'Merchandise' => 'Merchandise',
                    ])
                    ->reactive()
                    ->label('Kategori Produk')
                    ->placeholder('Pilih kategori produk')
                    ->required(),
                Select::make('subkategori_produk')
                    ->options(function (callable $get) {
                        $kategori = $get('kategori_produk');
                        if ($kategori === 'Apparel') {
                            return [
                                'Kaos Sablon' => 'Kaos Sablon',
                                'Jersey' => 'Jersey',
                                'Kemeja' => 'Kemeja',
                                'Kaos Polo' => 'Kaos Polo',
                            ];
                        }
                        if ($kategori === 'Merchandise') {
                            return [
                                'Lanyard' => 'Lanyard',
                                'Id Card' => 'ID Card',
                                'Topi' => 'Topi',
                                'Totebag' => 'Totebag',
                                'Gantungan Kunci' => 'Gantungan Kunci',
                                'Pin' => 'Pin',
                            ];
                        }
                        return [];
                    })
                    ->required()
                    ->reactive()
                    ->label('Subkategori Produk')
                    ->placeholder('Pilih subkategori produk'),
                TextInput::make('harga_produk')
                    ->label('Harga Produk')
                    ->placeholder('Tulis harga produk'),
                FileUpload::make('gambar_produk')
                    ->label('Gambar Produk')
                    ->placeholder('Upload gambar produk'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('nama_produk')
                    ->label('Nama Produk')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('deskripsi_produk')
                    ->label('Deskripsi Produk'),
                TextColumn::make('kategori_produk')
                    ->label('Kategori Produk')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('subkategori_produk')
                    ->label('Subkategori Produk')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('harga_produk')
                    ->label('Harga Produk')
                    ->sortable(),
                ImageColumn::make('gambar_produk')
                    ->label('Gambar Produk'),
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
            'index' => Pages\ListProduks::route('/'),
            'create' => Pages\CreateProduk::route('/create'),
            'edit' => Pages\EditProduk::route('/{record}/edit'),
        ];
    }
}
