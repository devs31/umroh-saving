<?php

namespace App\Filament\Resources\UmrohPackageResource\Pages;

use App\Filament\Resources\UmrohPackageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUmrohPackage extends EditRecord
{
    protected static string $resource = UmrohPackageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
