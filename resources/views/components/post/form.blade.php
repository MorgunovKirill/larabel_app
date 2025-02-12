@props(['post' => null])

{{ session('message') }}

<x-form {{ $attributes }}>
    <x-form-item>
        <x-label for="title" required>{{__('Название поста')}}</x-label>
        <x-input id="title" name="title" autofocus></x-input>
{{--        @if($errors->has('title'))--}}
{{--            <div class="small text-danger pt-1">--}}
{{--                {{ $errors->first('title') }}--}}
{{--            </div>--}}
{{--        @endif--}}
        <x-error name="title" />
        <x-error name="account" />
    </x-form-item>
    <x-form-item>
        <x-label for="content" required>{{__('Содержание поста')}}</x-label>
        <x-trix name="content" value="{{$post->content ?? ''}}" />
        <x-error name="content" />
    </x-form-item>

    <x-form-item>
        <x-label for="published_at" required>{{__('Дата публикации')}}</x-label>
        <x-input id="published_at" name="published_at" placeholder="dd.mm.yyyy"/>
    </x-form-item>

    <x-form-item>
        <x-checkbox name="status">{{__('Опубликовано')}}</x-checkbox>
    </x-form-item>

    {{ $slot }}

</x-form>
