<section>
    @if (@session('status') )
        <div class="mt-1 text-sm text-red-600 dark:text-red-400">
            {{ session('status') }}
        </div>
    @endif
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Avatar') }}
        </h2>
        @if ($user->avatar)
            <img width="70" height="70" class="rounded-full pb-1" src="{{ "/storage/$user->avatar" }}" alt="user avatar">
            <form method="post" action="{{ route('profile.avatar.delete') }}">
                @csrf
                @method('patch')
                <button class="inline-flex items-center px-2 py-1 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">Remove</button>
            </form>
        @else
            <img width="70" height="70" class="rounded-full" src="{{ "/storage/avatars/avatar.png" }}" alt="user avatar">
        @endif
        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your profile avatar.") }}
        </p>
    </header>



    <form method="post" action="{{ route('profile.avatar') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="avatar" :value="__('Avatar')" />
            <x-text-input id="avatar" name="avatar" type="file" class="mt-1 block w-full" :value="old('avatar', $user->avatar)" required autofocus autocomplete="avatar" />
            <x-input-error class="mt-2" :messages="$errors->get('avatar')" />
        </div>



        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
