<div class="fixed top-10 right-10 text-center">

    <h1 class="text-3xl mb-5 text-white">{{ __('static-text.hello') }} {{ auth()->user()->name }} </h1>

    <a href="{{ route('admin.logout') }}"
        class=" bg-white  text-3xl rounded-lg py-2 px-5 cursor-pointer">{{ __('static-text.logout') }}</a>


</div>
