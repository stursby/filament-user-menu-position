<div class="mt-auto flex items-center gap-2">
    <div>
        <x-filament-panels::user-menu />
    </div>
    <div class="text-sm">
        {{ auth()->user()->name }}
    </div>
</div>
