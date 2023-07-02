<?php

namespace App\Filament\Resources\MyNamespace\Models\PostResource\Pages;

use App\Filament\Resources\MyNamespace\Models\PostResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePost extends CreateRecord
{
    protected static string $resource = PostResource::class;
}
