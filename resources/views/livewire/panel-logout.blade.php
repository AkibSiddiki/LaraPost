<div class="flex items-center">
    <div class="flex items-center ml-3">
        <div class="flex items-center">
            <div class="px-4 py-3" role="none">
                <p class="text-sm text-end text-gray-900 dark:text-white" role="none">
                    {{$user->name}}
                </p>
                <p class="text-sm text-end font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                    {{$user->email}}
                </p>
            </div>
            <button type="button"
                class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                id="user-menu-button-2" aria-expanded="false" data-dropdown-toggle="dropdown-2">
                <span class="sr-only">Open user menu</span>
                <img class="w-8 h-8 rounded-full" src="https://hrm.emythmaker.com/media/profileImg/apu-1.jpg"
                    alt="user photo">
            </button>
        </div>

        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
            id="dropdown-2"
            style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(1193px, 61px);"
            data-popper-placement="bottom">
            <ul class="py-1" role="none">
                @if (auth()->user()->is_super_admin == 1)
                <li> <a href="{{route('user.create')}}"
                        class="block px-7 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                        role="menuitem">Create a New Panel User</a> </li>
                @endif
                <li> <a href="#"
                        class="block px-7 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                        role="menuitem">Edit Profile</a> </li>
                <li> <button type="button" wire:click="logout"
                        class="block px-7 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                        role="menuitem">Sign out</button> </li>
            </ul>
        </div>
    </div>
</div>