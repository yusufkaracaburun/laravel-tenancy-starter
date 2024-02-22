<form method="POST" action="{{ route('login') }}">
    @csrf

    <!-- Email Address -->
    <div>
        <label for="email" >{{__('Email')}}</label>
        <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
    </div>

    <!-- Password -->
    <div class="mt-4">
        <label for="password" >{{__('Password')}}</label>
        <input id="password" class="block mt-1 w-full"
                      type="password"
                      name="password"
                      required autocomplete="current-password" />
    </div>

    <!-- Remember Me -->
    <div class="block mt-4">
        <label for="remember_me" class="inline-flex items-center">
            <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
            <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
        </label>
    </div>

    <div class="flex items-center justify-end mt-4">
        @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
        @endif

        <button class="ml-3">
            {{ __('Log in') }}
        </button>
    </div>
</form>
<h3>Tenant data</h3>
<div class="mt-4">
    <strong>{{__('company')}}</strong>
    <label class="block mt-1 w-full" for="">{{$tenant->company}}</label>
</div>
<div class="mt-4">
    <strong>{{__('domain')}}</strong>
    <label class="block mt-1 w-full" for="">{{$tenant->domain}}</label>
</div>
<div class="mt-4">
    <strong>{{__('id')}}</strong>
    <label class="block mt-1 w-full" for="">{{$tenant->id}}</label>
</div>
<div class="mt-4">
    <strong>{{__('name')}}</strong>
    <label class="block mt-1 w-full" for="">{{$tenant->name}}</label>
</div>
<div class="mt-4">
    <strong>{{__('email')}}</strong>
    <label class="block mt-1 w-full" for="">{{$tenant->email}}</label>
</div>
<div class="mt-4">
    <strong>{{__('domains')}}</strong>
    <label class="block mt-1 w-full" for="">{{$tenant->domains}}</label>
</div>

