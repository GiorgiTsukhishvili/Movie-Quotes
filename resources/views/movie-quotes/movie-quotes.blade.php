<x-layout>
    <x-slot name='content'>

        @if (!is_null($movie))
            <div class="fixed flex flex-col gap-3.5 top-[473px] left-14">
                <x-buttons.language-button :lang="'en'" :route="route('movie', ['id' => $movie->id])" />
                <x-buttons.language-button :lang="'ka'" :route="route('movie', ['id' => $movie->id])" />
            </div>

            <div class="w-187.5 m-auto">
                <div class="w-full h-full flex flex-col items-start">

                    <h1 class="text-5xl break-words w-[650px] mt-[79px] mb-[82px]  text-white leading-11 font-normal ">
                        {{ $movie->name }}
                    </h1>

                    @foreach ($movie->quotes as $quote)
                        <x-movie.movie-quote :quote="$quote->quote" :photo="$quote->photo" />
                    @endforeach
                @else
                    <div class="w-full h-[100vh] flex flex-col items-center justify-center">
                        <h1 class="text-3xl text-white">No Movie Yet</h1>
                    </div>

        @endif
        </div>
        </div>
    </x-slot>
</x-layout>
