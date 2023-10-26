<?php

namespace App\Filament\Pages;

use Filament\Forms\Components\TagsInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Pages\Page;
use Illuminate\Database\Eloquent\Model;

class TagsInputIssue extends Page implements HasForms
{
    use InteractsWithForms;

    protected static string $view = 'filament.pages.tags-input-issue';

    public ?array $tags = [];

    protected function getFormSchema(): array
    {
        return [
            TagsInput::make('tags')
                ->helperText('Copy some texts and paste into the field.'),
        ];
    }
}
