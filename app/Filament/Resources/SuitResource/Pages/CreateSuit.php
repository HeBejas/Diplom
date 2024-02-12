<?php

namespace App\Filament\Resources\SuitResource\Pages;

use App\Filament\Resources\SuitResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSuit extends CreateRecord
{
    protected static string $resource = SuitResource::class;
    protected static bool $canCreateAnother = false;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
