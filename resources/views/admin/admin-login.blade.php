<x-layout>
    <x-slot name='content'>
        <div class="fixed flex flex-col gap-3.5 top-[473px] left-14">
            <x-buttons.language-button :lang="'en'" :route="route('admin.login')" />
            <x-buttons.language-button :lang="'ka'" :route="route('admin.login')" />
        </div>

        <div class="min-h-screen flex justify-center items-center ">


            <div class=" bg-white w-187.5 py-8 px-4 shadow rounded-lg " style="height: 500px">
                <h1 class="text-4xl font-bold text-center mt-10">{{ __('static-text.login') }}</h1>

                <form class="space-y-6" action="#" method="POST">
                    <div class="my-10">
                        <label for="email"
                            class="block text-2xl font-medium text-gray-700">{{ __('static-text.email') }}</label>
                        <div class="mt-1">
                            <input id="email" name="email" type="email" autocomplete="email" required
                                class="block w-full appearance-none rounded-md h-20 text-3xl border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 ">
                        </div>
                    </div>

                    <div>
                        <label for="password"
                            class="block text-2xl font-medium text-gray-700">{{ __('static-text.password') }}</label>
                        <div class="mb-10">
                            <input id="password" name="password" type="password" required
                                class="block w-full appearance-none rounded-md border h-20 text-3xl border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 ">
                        </div>
                    </div>



                    <div>
                        <button type="submit"
                            class="mt-10 flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-2xl font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">{{ __('static-text.sign-in') }}</button>
                    </div>
                </form>



            </div>

        </div>

    </x-slot>
</x-layout>
