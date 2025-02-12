<div class="border-bottom pb-3 mb-3">
    @isset($link)
        {{$link}}
    @endisset
    <div class="d-flex justify-content-between align-items-center">
        <h1 {{$attributes->class(['h2'])}}>
            {{ $slot }}
        </h1>
        @isset($right)
            {{$right}}
        @endisset
    </div>
</div>

<x-errors />
