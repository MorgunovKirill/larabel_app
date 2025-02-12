<x-card>
    <x-card-header>
        <x-card-title>
            {{__('Вход')}}
        </x-card-title>
        <x-slot name="right">
            <a href="{{route('register')}}">
                {{ __('Регистрация') }}
            </a>
        </x-slot>
    </x-card-header>

    <x-card-body>
        <x-form action="{{route('login.store')}}" method="POST">
            <x-form-item>
                <x-label for="email" required>
                    {{__('Email')}}
                </x-label>
                <x-input id="email" type="email" name="email" autofocus/>
            </x-form-item>
            <x-form-item class="mb-3">
                <x-label for="password">
                    {{__('Password')}}
                </x-label>
                <x-input type="password" id="password" name="password" />
            </x-form-item>
            <x-form-item class="mb-3">
                <x-checkbox name="remember">
                    {{ __('Запомнить меня') }}
                </x-checkbox>
            </x-form-item>
            <x-button type="submit">
                {{__('Войти')}}
            </x-button>
        </x-form>
    </x-card-body>
</x-card>
