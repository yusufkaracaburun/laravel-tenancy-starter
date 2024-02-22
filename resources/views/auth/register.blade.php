<form method="POST" action="/register">
    @csrf

    <!-- Company Name -->
    <div>
        <label for="company" >{{__('Company')}}</label>
        <input id="company" class="block mt-1 w-full" type="text" name="company" :value="old('company')" required
                      autofocus />
    </div>

    <!-- Domain -->
    <div class="mt-2">
        <div class="flex items-baseline">
            <label for="domain" >{{__('Domain')}}</label>
            <input id="domain" class="block mt-1 w-full" type="text" name="domain" :value="old('domain')"
                          required />
            .{{ config ('tenancy.central_domains')[0]}}
        </div>
    </div>

    <!-- Name -->
    <div class="mt-2">
        <label for="name" >{{__('Name')}}</label>
        <input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                      required />
    </div>

    <!-- Email Address -->
    <div class="mt-4">
        <label for="email" >{{__('Email')}}</label>
        <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                      required />
    </div>

    <!-- Password -->
    <div class="mt-4">
        <label for="password" >{{__('Password')}}</label>
        <input id="password" class="block mt-1 w-full" type="password" name="password" required
                      autocomplete="new-password" />
    </div>

    <!-- Confirm Password -->
    <div class="mt-4">
        <label for="password_confirmation" >{{__('Confirm Password')}}</label>
        <input id="password_confirmation" class="block mt-1 w-full" type="password"
                      name="password_confirmation" required />
    </div>

    <div class="flex items-center justify-end mt-4">
        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
           href="{{ route('login') }}">
            {{ __('Already registered?') }}
        </a>

        <button class="ml-4">
            {{ __('Register') }}
        </button>
    </div>
</form>
