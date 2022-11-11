<x-layout>
    <x-slot name='content'>
        <div class="fixed flex flex-col gap-3.5 top-[473px] left-14">
            <x-buttons.language-button :lang="'en'" :route="route('movie', ['id' => $movie->id])" />
            <x-buttons.language-button :lang="'ka'" :route="route('movie', ['id' => $movie->id])" />
        </div>

        <div class="w-187.5 m-auto">
            <div class="w-full h-full flex flex-col items-start">
                <h1 class="text-5xl mt-[79px] mb-[82px]  text-white leading-11 font-normal text-center ">
                    {{ $movie->name }}
                </h1>
                @foreach ($movie->quotes as $quote)
                    <x-movie.movie-quote :quote="$quote->quote" :photo="$quote->photo" />
                @endforeach
            </div>
        </div>
    </x-slot>
</x-layout>
