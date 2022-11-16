@props(['name', 'id'])



<tr>
    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-xl font-medium text-gray-900 sm:pl-6">
        <a href="{{ route('admin.quotes', ['id' => $id]) }}?lang={{ app()->getLocale() }}">{{ $name }}</a>
    </td>

    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-xl font-medium sm:pr-6">
        <a href="{{ route('admin.movie-update', ['id' => $id]) }}?lang={{ app()->getLocale() }}"
            class="text-indigo-600 hover:text-indigo-900">{{ __('static-text.edit') }}</a>
    </td>
    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-xl font-medium sm:pr-6">

        <div x-data="{ open: false }">

            <div x-show="open" @click="open = false"
                class="fixed top-0 left-0 z-10 h-screen w-screen bg-gray-200 opacity-25">
            </div>
            <div x-show="open"
                class="fixed top-[25%] left-[30%] w-187.5 h-[300px] py-10 px-15 rounded-lx bg-gray-300 z-20 flex flex-col justify-center items-center">

                <h1 class="text-3xl mb-10">{{ __('static-text.remove-accept') }}</h1>

                <div class="flex gap-10">
                    <h1 @click="open = false" class="text-2xl text-blue-500">{{ __('static-text.go-back') }}</h1>
                    <form method="POST" action="{{ route('movie.delete', ['id' => $id]) }}">
                        @csrf
                        @method('delete')

                        <button class="text-red-600 text-2xl hover:text-red-900">{{ __('static-text.delete') }}</button>
                    </form>
                </div>
            </div>



            <button class="text-red-600 text-xl hover:text-red-900"
                @click="open = true">{{ __('static-text.delete') }}</button>
        </div>
    </td>
</tr>
