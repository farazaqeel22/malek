<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            Add user Avatar
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
     
        </p>
    </header>
  




    <form method="post" action="{{route('profile.avatar')}}" class="mt-6 space-y-6" enctype="multipart/form-data">
@csrf

    @method('patch')

        <div>
            <x-input-label for="name" :value="__('avatar')" />
            <x-text-input id="avatar" name="avatar" type="file" class="mt-1 block w-full" :value="old('avatar', $user->image)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('avatar')" />

                  <img src="/storage/{{$user->image}}" alt="" width="100px" height="100px">
        </div>

        <br>
@if(session('message'))
<div class="text-red-500">
{{session('message')}}
</div>

@endif


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
