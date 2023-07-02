<?php

namespace App\Filament\Resources\MyNamespace\Models\PostResource\Pages;

use App\Filament\Resources\MyNamespace\Models\PostResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPosts extends ListRecords
{
    protected static string $resource = PostResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}