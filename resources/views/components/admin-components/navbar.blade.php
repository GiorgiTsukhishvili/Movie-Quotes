<div class="absolute top-10 left-[35%] flex gap-20">

    <a href="{{ route('admin.movies') }}?lang={{ app()->getLocale() }}"
        class="text-3xl py-2 px-4 bg-white rounded-lx">{{ __('static-text.all-movie') }}</a>

    <a href="{{ route('admin.all-quotes') }}?lang={{ app()->getLocale() }}"
        class="text-3xl py-2 px-4 bg-white rounded-lx">{{ __('static-text.all-quotes') }}</a>

</div>
