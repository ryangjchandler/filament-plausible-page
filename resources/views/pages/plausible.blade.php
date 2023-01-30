<x-filament::page class="bg-gray-50">
    <script>
        document.querySelector('.filament-body').classList.add('filament-plausible-page');
    </script>

    <iframe plausible-embed src="{{ config('filament-plausible-page.url') }}" scrolling="no" frameborder="0" loading="lazy" style="width: 1px; min-width: 100%; height: 1600px;"></iframe>
    <script async src="https://plausible.io/js/embed.host.js"></script>
</x-filament::page>
