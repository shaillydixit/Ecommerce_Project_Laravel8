<x-app-layout>
    <x-slot name="header">
        Hello {{Auth::user()->name}}
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            Hi Everyone!
        </div>
    </div>
</x-app-layout>