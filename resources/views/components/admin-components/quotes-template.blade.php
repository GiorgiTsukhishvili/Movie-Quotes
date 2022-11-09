<tr>
    <td class="py-4 pl-4 pr-3 text-sm sm:pl-6">

        <img src="{{ asset(is_null($quote->photo) ? 'images/placeholder.jpg' : $quote->photo) }}" alt="Quote"
            class="rounded-full" style="width: 100px; height: 100px">
    </td>
    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
        <h1 class="text-xl">{{ $quote->quote }}</h1>
    </td>

    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
        <a href="#"
            class="text-indigo-600 text-xl hover:text-indigo-900">{{ app()->getLocale() === 'en' ? 'Edit' : 'შესწორება' }}<span>
    </td>
    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
        <form method="POST" action="{{ route('quote.delete', ['id' => $quote->id]) }}">
            @csrf
            @method('delete')

            <button
                class="text-red-600 text-xl hover:text-red-900">{{ app()->getLocale() === 'en' ? 'Delete' : 'წაშლა' }}<a>
        </form>
    </td>
</tr>
