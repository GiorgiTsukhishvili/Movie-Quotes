@props(['quote', 'photo'])

<div class="mb-[67px]">
    <img src="{{ asset( 'storage/' . $photo) }}" alt="placeholder"
        class="w-187.5 h-[386px] rounded-t-lx ">
    <h1 class="w-187.5 rounded-b-lx pt-9 pb-11 text-4xl px-[18px] bg-white text-black leading-10 font-normal">
        {{ $quote }}
    </h1>
</div>
