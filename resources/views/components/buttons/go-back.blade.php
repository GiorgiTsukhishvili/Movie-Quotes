@props(['route'])


<a href="{{ $route }}?lang={{ app()->getLocale() }}"
    class="text-3xl py-2 px-4 bg-white rounded-lx fixed top-16 left-10">{{ __('static-text.go-back') }}</a>
