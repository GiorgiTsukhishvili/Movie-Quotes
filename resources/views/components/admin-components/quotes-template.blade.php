<tr>
    <td class="py-4 pl-4 pr-3 text-sm sm:pl-6">

        <img src="{{ asset('storage/' . $quote->photo) }}" alt="Quote" class="rounded-full"
            style="width: 100px; height: 100px">
    </td>
    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
        <h1 class="text-xl">{{ $quote->quote }}</h1>
    </td>

    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
        <a href="{{ route('admin.quote-update', ['id' => $quote->id]) }}?lang={{ app()->getLocale() }}"
            class="text-indigo-600 text-xl hover:text-indigo-900">{{ __('static-text.edit') }}<span>
    </td>
    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
        <div x-data="{ open: false }" x-cloak>

            <div x-show="open" @click="open = false"
                class="fixed top-0 left-0 z-10 h-screen w-screen bg-gray-200 opacity-25">
            </div>
            <div x-show="open"
                class="fixed top-[25%] left-[30%] w-187.5 h-[300px] py-10 px-15 rounded-lx bg-gray-300 z-20 flex flex-col justify-center items-center">

                <h1 class="text-3xl mb-10">{{ __('static-text.remove-accept') }}</h1>

                <div class="flex gap-10">
                    <h1 @click="open = false" class="text-2xl text-blue-500">{{ __('static-text.go-back') }}</h1>
                    <form method="POST"
                        action="{{ route('quote.delete', ['id' => $quote->id]) }}?lang={{ app()->getLocale() }}">
                        @csrf
                        @method('delete')

                        <button class="text-red-600 text-2xl hover:text-red-900">{{ __('static-text.delete') }}<a>
                    </form>

                </div>
            </div>



            <button class="text-red-600 text-xl hover:text-red-900"
                @click="open = true">{{ __('static-text.delete') }}</button>
        </div>
    </td>
</tr>
