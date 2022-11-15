<x-layout>
    <x-slot name='content'>
        <div class="absolute flex flex-col gap-3.5 top-[473px] left-14">

            <x-buttons.language-button :lang="'en'" :route="route('quote')" />
            <x-buttons.language-button :lang="'ka'" :route="route('quote')" />

        </div>

        @if (!is_null($quote))
            <div class="w-full h-full flex flex-col items-center">
                <img src="{{ asset('storage/' . $quote->photo) }}" alt="placeholder"
                    class="w-[700px] h-[386px] rounded-lx mt-[228px]">
                <h1 class="text-5xl mt-[65px] my-[114px] text-white leading-11 font-normal text-center">
                    "{{ $quote->quote }}"
                </h1>
                <a href="{{ route('movie', ['id' => $quote->movie_id]) }}"
                    class=" underline font-normal text-white leading-11 text-5xl text-center">
                    {{ $quote->movie->name }}
                </a>
            </div>
        @else
            <div class="w-full h-[100vh] flex flex-col items-center justify-center">
                <h1 class="text-3xl text-white">No Quote Yet</h1>
            </div>
        @endif
    </x-slot>
</x-layout>
