<?php

namespace RyanChandler\FilamentPlausiblePage\Pages;

use Filament\Pages\Page;

class Plausible extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';

    protected static string $view = 'filament-plausible-page::pages.plausible';

    protected static ?string $slug = 'plausible';

    protected static ?string $navigationLabel = null;

    protected static ?string $navigationGroup = null;

    public static function navigationGroup(string $group)
    {
        static::$navigationGroup = $group;
    }

    public static function navigationLabel(string $label)
    {
        static::$navigationLabel = $label;
    }

    public static function navigationIcon(string $icon)
    {
        static::$navigationIcon = $icon;
    }

    public static function slug(string $slug)
    {
        static::$slug = $slug;
    }
}
