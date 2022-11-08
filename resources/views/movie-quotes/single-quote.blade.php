<x-layout>
    <x-slot name='content'>
        <div class="w-full h-full flex flex-col items-center">
            <img src="{{ asset(is_null($quote->photo) ? 'images/placeholder.jpg' : $quote->photo) }}" alt="placeholder"
                class="w-[700px] h-[386px] rounded-lx mt-[228px]">
            <h1 class="text-5xl mt-[65px] my-[114px] text-white leading-11 font-normal text-center">
                "{{ $quote->quote }}"
            </h1>
            <a href="/movie/{{ $quote->movie_id }}"
                class=" underline font-normal text-white leading-11 text-5xl text-center">
                {{ $quote->movie->name }}
            </a>
        </div>
    </x-slot>
</x-layout>
