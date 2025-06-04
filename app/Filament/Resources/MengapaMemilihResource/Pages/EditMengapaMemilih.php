<?php

namespace App\Filament\Resources\MengapaMemilihResource\Pages;

use App\Filament\Resources\MengapaMemilihResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMengapaMemilih extends EditRecord
{
    protected static string $resource = MengapaMemilihResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
