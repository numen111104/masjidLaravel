<?php

namespace App\Filament\Resources\JadwalImamResource\Pages;

use App\Filament\Resources\JadwalImamResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJadwalImam extends EditRecord
{
    protected static string $resource = JadwalImamResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
