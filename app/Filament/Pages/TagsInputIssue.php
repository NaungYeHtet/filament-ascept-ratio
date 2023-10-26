<?php

namespace App\Filament\Pages;

use Filament\Forms\Components\TagsInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Pages\Page;

class TagsInputIssue extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    protected static string $view = 'filament.pages.tags-input-issue';

    public ?array $tags = [];

    public function mount(): void
    {
    }

    public function getCancelButtonUrlProperty()
    {
        return static::getUrl();
    }

    public function submit()
    {
    }

    protected function getFormSchema(): array
    {
        return [
            TagsInput::make('tags'),
        ];
    }
}
