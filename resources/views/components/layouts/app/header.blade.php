<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    @include('partials.head')
</head>
<body class="min-h-screen bg-white dark:bg-zinc-800">
<flux:header container class="border-b border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">
    <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left"/>

    <a href="{{ url('/') }}" class="ms-2 me-5 flex items-center space-x-2 rtl:space-x-reverse lg:ms-0">
        <x-app-logo/>
    </a>

    <flux:navbar class="-mb-px max-lg:hidden">
        <flux:navbar.item icon="layout-grid" :href="url('/user/welcome')" :current="request()->is('/user/welcome')"
                          wire:navigate>
            {{ __('Home') }}
        </flux:navbar.item>
    </flux:navbar>

    <flux:navbar class="-mb-px max-lg:hidden">
        <flux:navbar.item icon="layout-grid" :href="url('/user/about')" :current="request()->is('/user/about')"
                          wire:navigate>
            {{ __('About') }}
        </flux:navbar.item>
    </flux:navbar>
    <flux:navbar class="-mb-px max-lg:hidden">
        <flux:navbar.item icon="layout-grid" :href="url('/user/contact')" :current="request()->is('/user/contact')"
                          wire:navigate>
            {{ __('Contact') }}
        </flux:navbar.item>
    </flux:navbar>

    <flux:spacer/>

    <flux:navbar class="me-1.5 space-x-0.5 rtl:space-x-reverse py-0!">

        <flux:tooltip :content="__('Dashboard')" position="bottom">
            <flux:navbar.item
                class="h-10 max-lg:hidden [&>div>svg]:size-5"
                icon="home"
                href="{{route('dashboard')}}"
                target="_blank"
                :label="__('Dashboard')"
            />
        </flux:tooltip>

        <flux:tooltip :content="__('Login')" position="bottom">
            <flux:navbar.item
                class="h-10 max-lg:hidden [&>div>svg]:size-5"
                icon="book-open-text"
                href="{{route('login')}}"
                target="_blank"
                :label="__('Login')"
            />
        </flux:tooltip>
    </flux:navbar>
</flux:header>

<!-- Mobile Menu -->
<flux:sidebar stashable sticky
              class="lg:hidden border-e border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">
    <flux:sidebar.toggle class="lg:hidden" icon="x-mark"/>

    <a href="{{ url('/') }}" class="ms-1 flex items-center space-x-2 rtl:space-x-reverse">
        <x-app-logo/>
    </a>

    <flux:navlist variant="outline">
        <flux:navlist.group :heading="__('Navigation')">
            <flux:navlist.item icon="layout-grid" :href="url('/')" :current="request()->is('/')" wire:navigate>
                {{ __('Home') }}
            </flux:navlist.item>
        </flux:navlist.group>
    </flux:navlist>
    <flux:navlist variant="outline">
        <flux:navlist.group :heading="__('Navigation')">
            <flux:navlist.item icon="layout-grid" :href="url('/user/about')" :current="request()->is('/user/about')"
                               wire:navigate>
                {{ __('About') }}
            </flux:navlist.item>
        </flux:navlist.group>
    </flux:navlist>
    <flux:navlist variant="outline">
        <flux:navlist.group :heading="__('Navigation')">
            <flux:navlist.item icon="layout-grid" :href="url('/user/contact')" :current="request()->is('/user/contact')"
                               wire:navigate>
                {{ __('Contact') }}
            </flux:navlist.item>
        </flux:navlist.group>
    </flux:navlist>

    <flux:spacer/>

    <flux:navlist variant="outline">
        <flux:navlist.item icon="home" href="dashboard" target="_blank">
            {{ __('Dashboard') }}
        </flux:navlist.item>
        <flux:navlist.item icon="book-open-text" href="https://laravel.com/docs/starter-kits#livewire" target="_blank">
            {{ __('Login') }}
        </flux:navlist.item>
    </flux:navlist>
</flux:sidebar>

{{ $slot }}

@fluxScripts
</body>
</html>
