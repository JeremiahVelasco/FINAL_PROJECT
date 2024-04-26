<?php

namespace App\Filament\Pages;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Pages\Page;

class Uploading extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.uploading';

    protected ?string $subheading = 'You can upload documents or images.';
    
}
