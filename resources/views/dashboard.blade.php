<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <livewire:daftar-kelas />
            </div>
        </div>
    </div>
</x-app-layout>
