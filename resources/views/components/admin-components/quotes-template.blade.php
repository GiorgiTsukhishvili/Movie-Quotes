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
        <form method="POST" action="{{ route('quote.delete', ['id' => $quote->id]) }}?lang={{ app()->getLocale() }}">
            @csrf
            @method('delete')

            <button class="text-red-600 text-xl hover:text-red-900">{{ __('static-text.delete') }}<a>
        </form>
    </td>
</tr>
