<x-layout-app>
    <div class="container-xl">
        <div class="page-header">
            <h1>{{ __('boilerplate::ui.file')}} - {{ $filename }}</h1>
        </div>

        <pre class="p-2 border">{!! $content !!}</pre>

        <div id="end"></div>
    </div>
</x-layout-app>
