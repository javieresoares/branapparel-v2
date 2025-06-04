<?php

namespace App\Filament\Resources\CTAResource\Pages;

use App\Filament\Resources\CTAResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCTAS extends ListRecords
{
    protected static string $resource = CTAResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
