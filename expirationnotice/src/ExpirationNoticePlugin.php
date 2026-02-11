<?php

namespace JoanFo\ExpirationNotice;

use Filament\Contracts\Plugin;
use Filament\Panel;

class ExpirationNoticePlugin implements Plugin
{
    public function getId(): string
    {
        return 'expirationnotice';
    }

    public function register(Panel $panel): void
    {

    }

    public function boot(Panel $panel): void
    {
        
    }
}
