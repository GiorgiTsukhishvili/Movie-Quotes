<x-layout>
    <x-slot name='content'>

        <div class="fixed flex flex-col gap-3.5 top-[473px] left-14">
            <x-buttons.language-button :lang="'en'" :route="route('admin.quotes', ['id' => $movie->id])" />
            <x-buttons.language-button :lang="'ka'" :route="route('admin.quotes', ['id' => $movie->id])" />
        </div>

        <div class="min-h-screen flex justify-center items-center ">
            <div class="px-4 sm:px-6 lg:px-8 pt-6 bg-white mt-8 rounded-lg" style="width:1200px">
                <div class="sm:flex sm:items-center">
                    <div class="sm:flex-auto">
                        <h1 class="text-2xl font-semibold text-gray-900">
                            {{ app()->getLocale() === 'en' ? 'Quotes' : 'ციტატები' }}</h1>
                        <p class="mt-2 text-2x text-gray-700">
                            {{ app()->getLocale() === 'en' ? 'A list of all the Quotes' : 'ციტატების ჩამონათვალი' }}</p>
                    </div>
                    <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                        <button type="button"
                            class="inline-flex text-2xl items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">{{ app()->getLocale() === 'en' ? 'Add Quote' : 'დაამატე ციტატა' }}</button>
                    </div>
                </div>
                <div class="mt-8  flex flex-col">
                    <div class="my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:mx-8">
                        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                            <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-300">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col"
                                                class="py-3.5 pl-4 pr-3 text-left text-2xl font-semibold text-gray-900 sm:pl-6">
                                                {{ app()->getLocale() === 'en' ? 'Quote' : 'ციტატა' }}</th>
                                            <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                                <span
                                                    class="sr-only">{{ app()->getLocale() === 'en' ? 'Delete' : 'წაშლა' }}</span>
                                            </th>
                                            <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                                <span
                                                    class="sr-only">{{ app()->getLocale() === 'en' ? 'Edit' : 'შესწორება' }}Edit</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 bg-white">
                                        @foreach ($movie->quotes as $quote)
                                            <x-admin-components.quotes-template :quote="$quote" />
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <x-flash-message :en="'Quote was deleted'" :ka="'ციტატა წაიშალა'" />

    </x-slot>
</x-layout>
