@extends('layouts.main')
@section('page.title', 'Мои посты')
@section('main.content')
    <x-title>
        {{ __('Мои посты') }}

        <x-slot name="right">
            <x-button-link href="{{route('user.posts.create')}}">
                {{__('Создать')}}
            </x-button-link>
        </x-slot>
    </x-title>
    @if(empty($posts))
        {{ __('Нет ни одного поста') }}
    @else
        <div class="row">
            @foreach($posts as $post)
                <div class="mb-3">
                    <h2 class="h6">
                        <a href="{{route('user.posts.show', $post->id)}}">{{$post->title}}</a>
                    </h2>
                    <div class="small text-muted">
                        {{ now()->format('d.m.Y. H.i.s') }}
                    </div>
                </div>
            @endforeach

        </div>
    @endif
@endsection

