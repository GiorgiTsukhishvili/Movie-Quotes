@if (session()->has('message'))
    <div class="fixed bottom-5 right-5 bg-gray-500 text-white text-2xl px-28 py-3 rounded-lg">
        <p class="w-56 py-2.5">
            {{ __(session('message')) }}
        </p>
    </div>
@endif
