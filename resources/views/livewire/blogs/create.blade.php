<?php

use Livewire\Volt\Component;

new class extends Component {
    public string $message = '';
}; ?>

<div>
<x-app-layout>

<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <form wire:submit="store"> 
                    <textarea
                        wire:model="message"
                        placeholder="{{ __('What\'s on your mind?') }}"
                        class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                    ></textarea>

                    <x-input-error :messages="$errors->get('message')" class="mt-2" />
                    <x-primary-button class="mt-4">{{ __('Post it!') }}</x-primary-button>
                </form> 
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
</div>
