@props(['name', 'id'])

<tr>
    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-xl font-medium text-gray-900 sm:pl-6">
        <a href="{{ route('admin.quotes', ['id' => $id]) }}">{{ $name }}</a>
    </td>

    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-xl font-medium sm:pr-6">
        <a href="#" class="text-indigo-600 hover:text-indigo-900">{{ __('static-text.edit') }}<span>
    </td>
    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-xl font-medium sm:pr-6">
        <form method="POST" action="{{ route('movie.delete', ['id' => $id]) }}">
            @csrf
            @method('delete')

            <button class="text-red-600 text-xl hover:text-red-900">{{ __('static-text.delete') }}<a>
        </form>
    </td>
</tr>
