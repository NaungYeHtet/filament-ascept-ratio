<?php

namespace App\Filament\Pages;

use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Pages\Page;
use Filament\Forms\Components\Actions;
use Filament\Forms\Components\Actions\Action;
use Illuminate\Contracts\View\View;

class UnexceptedBehavier extends Page implements HasForms
{
    use InteractsWithForms;

    protected static string $view = 'filament.pages.unexpected-behavier';

    protected static bool $shouldRegisterNavigation = false;

    public ?array $tags = [];

    protected function getFormSchema(): array
    {
        return [
            Actions::make([
                Action::make('preview')
                    ->icon('heroicon-o-eye')
                    ->color('gray')
                    ->modalContent(function (): View {
    
                        return view('preview.index');
                    })
                    ->modalSubmitAction(false)
                    ->modalCancelAction(false)
                    ->slideOver(),
            ])->columnSpanFull()
        ];
    }
}
