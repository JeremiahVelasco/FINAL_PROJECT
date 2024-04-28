<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class AIReport extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';

    protected static ?string $navigationLabel = 'AI Report';

    protected static ?string $title = 'AI Report';

    protected ?string $subheading = 'Upload a csv, fine tune your report then generate.';

    protected static string $view = 'filament.pages.a-i-report';
}
