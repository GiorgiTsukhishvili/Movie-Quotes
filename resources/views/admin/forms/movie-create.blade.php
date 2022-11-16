<x-layout>
    <x-slot name='content'>
        <div class="fixed flex flex-col gap-3.5 top-[473px] left-14">
            <x-buttons.language-button :lang="'en'" :route="route('admin.movie-create')" />
            <x-buttons.language-button :lang="'ka'" :route="route('admin.movie-create')" />
        </div>

        <x-admin-components.logout />

        <x-buttons.go-back :route="route('admin.movies')" />

        <form method="POST" action="{{ route('admin.movie-store') }}?lang={{ app()->getLocale() }}">

            @csrf

            <div class="min-h-screen flex flex-col justify-center items-center ">
                <div class="bg-white p-5 rounded-lg">
                    <h1 class="mt-5 text-4xl font-bold text-center">
                        {{ __('static-text.movie-form-header') }}</h1>

                    <div class="my-10">
                        <label for="geo-text"
                            class="block  mb-4 text-3xl font-medium text-gray-700">{{ __('static-text.movie-form-text-ge') }}</label>
                        <div class="mt-1">
                            <input type="text" name="geo-text" id="geo-text"
                                placeholder="{{ __('static-text.text') }}"
                                class="block w-187.5 h-20 text-3xl rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 ">
                            @error('geo-text')
                                <p class="text-red-500 mt-2 text-xl">{{ __('static-text.field-required') }}</p>
                            @enderror
                        </div>

                    </div>
                    <div>
                        <label for="eng-text"
                            class="block mb-4  text-3xl font-medium text-gray-700">{{ __('static-text.movie-form-text-en') }}</label>
                        <div class="mt-1">
                            <input type="text" name="eng-text" id="eng-text"
                                placeholder="{{ __('static-text.text') }}"
                                class="block w-187.5 h-20 text-3xl rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 ">
                            @error('eng-text')
                                <p class="text-red-500 mt-2 text-xl">{{ __('static-text.field-required') }}</p>
                            @enderror
                        </div>
                    </div>
                    <button
                        class="text-3xl mt-10 text-white py-4 px-5 bg-gray-400 rounded-lg">{{ __('static-text.movie-form-submit') }}</button>
                </div>
            </div>
        </form>

    </x-slot>
</x-layout>
