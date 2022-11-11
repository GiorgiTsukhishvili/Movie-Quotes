<x-layout>
    <x-slot name='content'>
        <div class="fixed flex flex-col gap-3.5 top-[473px] left-14">
            <x-buttons.language-button :lang="'en'" :route="route('admin.movies')" />
            <x-buttons.language-button :lang="'ka'" :route="route('admin.movies')" />
        </div>

        <x-admin-components.logout />

        <div class="min-h-screen flex justify-center items-center ">
            <div class="px-4 sm:px-6 lg:px-8 pt-6 bg-white min-h-[800px] mt-10 rounded-lg w-[1200px]">
                <div class="sm:flex sm:items-center">
                    <div class="sm:flex-auto">
                        <h1 class="text-2xl font-semibold text-gray-900">
                            {{ __('static-text.movies') }}</h1>
                        <p class="mt-2 text-2xl text-gray-700">
                            {{ __('static-text.movie-list') }}</p>
                    </div>
                    <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                        <a href="{{ route('admin.movie-create') }}"
                            class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-2xl font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">{{ __('static-text.add-movie') }}</a>
                    </div>
                </div>
                <div class="mt-8 flex flex-col ">
                    <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                            <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-300">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col"
                                                class="py-3.5 pl-4 pr-3 text-left text-2xl font-semibold text-gray-900 sm:pl-6">
                                                {{ __('static-text.movie') }}</th>
                                            <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                                <span class="sr-only">{{ __('static-text.delete') }}</span>
                                            </th>
                                            <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                                <span class="sr-only">{{ __('static-text.edit') }}Edit</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 bg-white">

                                        @foreach ($movies as $movie)
                                            <x-admin-components.movie-template :name="$movie->name" :id="$movie->id" />
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <x-flash-message />
    </x-slot>
</x-layout>
