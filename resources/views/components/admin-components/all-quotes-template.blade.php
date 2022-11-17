<tr class="flex items-center justify-between">
    <td class="py-4 pl-4 pr-3 text-sm sm:pl-6">

        <img src="{{ asset('storage/' . $quote->photo) }}" alt="Quote" class="rounded-full"
            style="width: 100px; height: 100px">
    </td>
    <td class="whitespace-nowrap  py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
        <h1 class="text-xl overflow-hidden overflow-ellipsis w-64">{{ $quote->quote }}</h1>
    </td>

    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6 flex ">
        <h1 class="text-xl font-bold mr-5">{{ __('static-text.movie') }}:</h1>

        <a href="{{ route('admin.quotes', ['id' => $quote->movie->id]) }}?lang={{ app()->getLocale() }}"
            class="overflow-hidden overflow-ellipsis w-32  text-indigo-600 text-xl hover:text-indigo-900">{{ $quote->movie->name }}<span>
    </td>

</tr>
