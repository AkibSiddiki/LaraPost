<main>

    <div class="flex flex-col items-center justify-center p-2 mx-auto md:h-screen pt:mt-0 dark:bg-gray-900">
        <div class="w-full max-w-2xl sm:p-8 bg-white rounded-lg shadow dark:bg-gray-800">
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white">
                Create New Panel User
            </h2>
            <form class="mt-8 space-y-3" wire:submit="create">
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Name</label>
                    <input wire:model.live.debounce.500ms="name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Your Name">
                    <p style="min-height:20px" class="mt-2 text-blue-500/70 text-sm"> @error('name') {{ $message }}
                        @enderror</p>
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Email</label>
                    <input wire:model.live.debounce.500ms="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="your@email.com">
                    <p style="min-height:20px" class="mt-2 text-blue-500/70 text-sm"> @error('email') {{$message}}
                        @enderror</p>
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Password</label>
                    <input type="password" wire:model.live.debounce.500ms="password_confirmation" placeholder="••••••••"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <p style="min-height:20px" class="mt-2 text-blue-500/70 text-sm">
                        @error('password_confirmation'){{$message}}@enderror </p>
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Confirm Password</label>
                    <input type="password" wire:model.live.debounce.500ms="password" placeholder="••••••••"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <p style="min-height:20px" class="mt-2 text-blue-500/70 text-sm">
                        @error('password'){{$message}}@enderror </p>
                </div>
                <p class="my-1 p-2 text-blue-500/70 text-center" style="min-height:40px">{{$msg}}</span></p>
                <div class="text-end">
                    <button type="submit" class="bg-blue-600  py-2 px-4 rounded-lg text-white">Create</button>
                </div>
            </form>
        </div>
    </div>
</main>