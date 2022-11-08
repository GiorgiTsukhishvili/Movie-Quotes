@props(['lang', 'route'])

<a href="{{ $route }}?lang={{ $lang }}"
    class="{{ app()->getLocale() === $lang ? 'bg-white' : 'text-white' }} flex justify-center items-center hover:bg-white hover:text-black text-2xl leading-[27px] w-[58px] h-[58px] border-2 border-white rounded-full">{{ $lang }}</a>
