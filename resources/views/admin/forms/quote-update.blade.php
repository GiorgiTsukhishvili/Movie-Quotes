<x-layout>
    <x-slot name='content'>
        <div class="fixed flex flex-col gap-3.5 top-[473px] left-14">
            <x-buttons.language-button :lang="'en'" :route="route('admin.quote-update', ['id' => $quote->id])" />
            <x-buttons.language-button :lang="'ka'" :route="route('admin.quote-update', ['id' => $quote->id])" />
        </div>

        <x-admin-components.logout />

        <x-buttons.go-back :route="route('admin.quotes', ['id' => $quote->movie->id])" />

        <form method="POST"
            action="{{ route('admin.quote-update', ['id' => $quote->id]) }}?lang={{ app()->getLocale() }}"
            enctype="multipart/form-data">

            @csrf
            @method('put')

            <div class="min-h-screen flex flex-col justify-center items-center ">
                <div class="bg-white p-5 rounded-lg">
                    <h1 class="mt-5 text-4xl font-bold text-center">
                        {{ __('static-text.quote-update-header') }}</h1>
                    <div class="my-10">
                        <label for="geo-text"
                            class="block  mb-4 text-3xl font-medium text-gray-700">{{ __('static-text.movie-form-text-ge') }}</label>
                        <div class="mt-1">
                            <input type="text" name="geo-text" id="geo-text"
                                placeholder="{{ __('static-text.movie-form-text-ge') }}" required
                                value="{{ $quote->getTranslation('quote', 'ka') }}"
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
                                placeholder="{{ __('static-text.movie-form-text-en') }}" required
                                value="{{ $quote->getTranslation('quote', 'en') }}"
                                class="block w-187.5 h-20 text-3xl rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 ">
                            @error('eng-text')
                                <p class="text-red-500 mt-2 text-xl">{{ __('static-text.field-required') }}</p>
                            @enderror
                        </div>
                    </div>


                    <div class="mt-1 pt-5  sm:mt-0" x-data="{ message: '' }" x-cloak>
                        <div
                            class="flex w-full justify-center rounded-md border-2 border-dashed border-gray-300 px-6 pt-5 pb-6">
                            <div class="space-y-1 h-36 text-center">
                                <x-svgs.photo-upload />
                                <div class="flex text-2xl text-gray-600">
                                    <label for="photo"
                                        class="relative cursor-pointer rounded-md bg-white font-medium text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:text-indigo-500">
                                        <span
                                            class="w-[750px] h-[185px] absolute left-[-350px] top-[-70px] flex justify-center items-center">{{ __('static-text.file-upload') }}</span>
                                        <input id="photo" name="photo" type="file" class="sr-only w-full"
                                            x-model="message" value="{{ $quote->photo }}" />

                                    </label>
                                </div>
                            </div>
                        </div>

                        <span x-show="message" class="mt-2 text-2xl">{{ __('static-text.file-uploaded') }}</span>


                        <img src="{{ asset('storage/' . $quote->photo) }}" alt="Quote"
                            class=" w-44 rounded-lx mt-5">

                        @error('file')
                            <p class="text-red-500 mt-2 text-xl">{{ __('static-text.field-required') }}</p>
                        @enderror
                    </div>
                    <button
                        class="text-3xl mt-10 text-white py-4 px-5 bg-gray-400 rounded-lg">{{ __('static-text.movie-form-submit') }}</button>
                </div>
            </div>
            </div>
            </div>
        </form>

    </x-slot>
</x-layout>
