@extends('layouts.auth')

@section('page.title', 'Registration')

@section('auth.content')
    <x-card>
        <x-card-header>
            <x-card-title>
                {{__('Регистрация')}}
            </x-card-title>
            <x-slot name="right">
                <a href="{{route('login')}}">
                    {{ __('Логин') }}
                </a>
            </x-slot>
        </x-card-header>

        <x-card-body>
            <x-errors />
            <x-form action="{{ route('register.store') }}" method="POST">
                <x-form-item>
                    <x-label for="email" required>
                        {{__('Email')}}
                    </x-label>
                    <x-input id="email" type="email" name="email" autofocus/>
                </x-form-item>
                <x-form-item>
                    <x-label for="name" required>
                        {{__('Имя')}}
                    </x-label>
                    <x-input id="name" name="name" />
                </x-form-item>
                <x-form-item class="mb-3">
                    <x-label for="password">
                        {{__('Password')}}
                    </x-label>
                    <x-input type="password" id="password" name="password" />
                </x-form-item>
                <x-form-item class="mb-3">
                    <x-label for="password_confirmation">
                        {{__('Подверждение пароля')}}
                    </x-label>
                    <x-input type="password" id="password_confirmation" name="password_confirmation" />
                </x-form-item>
                <x-form-item class="mb-3">
                    <x-checkbox name="agreement">
                        {{ __('Я согласен на обработку персональных данных') }}
                    </x-checkbox>
                </x-form-item>
                <x-button type="submit">
                    {{__('Зарегистрироваться')}}
                </x-button>
            </x-form>
        </x-card-body>
    </x-card>
@endsection

