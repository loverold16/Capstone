<?php

namespace App\Filament\Resources\ReviewsResource\Pages;

use App\Filament\Resources\ReviewsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditReviews extends EditRecord
{
    protected static string $resource = ReviewsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
