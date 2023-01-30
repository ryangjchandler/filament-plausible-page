<?php

namespace RyanChandler\FilamentPlausiblePage;

use Filament\PluginServiceProvider;
use RyanChandler\FilamentPlausiblePage\Pages\Plausible;
use Spatie\LaravelPackageTools\Package;

class FilamentPlausiblePageServiceProvider extends PluginServiceProvider
{
    public static string $name = 'filament-plausible-page';

    protected array $resources = [
        // CustomResource::class,
    ];

    protected array $pages = [
        Plausible::class,
    ];

    protected array $widgets = [
        // CustomWidget::class,
    ];

    protected array $styles = [
        'plugin-filament-plausible-page' => __DIR__.'/../resources/dist/filament-plausible-page.css',
    ];

    protected array $scripts = [
        // 'plugin-filament-plausible-page' => __DIR__.'/../resources/dist/filament-plausible-page.js',
    ];

    // protected array $beforeCoreScripts = [
    //     'plugin-filament-plausible-page' => __DIR__ . '/../resources/dist/filament-plausible-page.js',
    // ];

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasViews()
            ->hasConfigFile('filament-plausible-page');
    }
}
