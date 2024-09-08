<?php

namespace App\Filament\Resources\CopyResource\Pages;

use App\Filament\Resources\CopyResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;

class ListCopies extends ListRecords
{
    protected static string $resource = CopyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return [
            'all' => Tab::make('All'),
            'Purchased' => Tab::make('Purchased')
                ->modifyQueryUsing(fn ($query) => $query->whereStatus('purchased')->orWhere('status', 'available')),
        ];
    }
}
