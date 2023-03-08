<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">

    <link rel="icon" type="image/png" href="{{ url('images/tabIcon.png') }}" />

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Baltic Apprenticeships
        Top Trumps - Animals
    </title>

    <!-- CSS & JS Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    @isset($head)
        {{ $head }}
    @endisset

</head>

<body x-data="{ showModal: false, createAccount: false }" x-bind="$store.global.documentBody"
    class="@isset($isSidebarOpen) {{ $isSidebarOpen === 'true' ? 'is-sidebar-open' : '' }} @endisset @isset($isHeaderBlur) {{ $isHeaderBlur === 'true' ? 'is-header-blur' : '' }} @endisset @isset($hasMinSidebar) {{ $hasMinSidebar === 'true' ? 'has-min-sidebar' : '' }} @endisset">

    <!-- App preloader-->
    <x-app-preloader></x-app-preloader>

    <nav style="border-bottom: 0px;" class="header print:hidden">

        <!-- App Header  -->
        <div class="header-container relative flex w-full bg-white dark:bg-navy-750 print:hidden">
            <!-- Header Items -->
            <div class="flex w-full items-center justify-between">
               
                <!-- Nav Buttons -->
                <div class="content-center">
                    <ul class="flex text-black dark:text-white text-xl ">
                        <li class="mr-6">
                            {{-- <a href="{{route('home')}}">Home</a> --}}
                            <a href="{{route('home')}}" class="relative inline-flex items-center justify-start inline-block px-5 py-1 overflow-hidden font-bold rounded-full group">
                                <span class="w-20 h-20 rotate-45 translate-x-12 -translate-y-2 absolute left-0 top-0 bg-white opacity-[3%]"></span>
                                <span class="absolute top-0 left-0 w-48 h-48 -mt-1 transition-all duration-500 ease-in-out rotate-45 -translate-x-56 -translate-y-24 bg-white opacity-100 group-hover:-translate-x-8"></span>
                                <span class="relative w-full text-left text-white transition-colors duration-200 ease-in-out group-hover:text-gray-900">home</span>
                                <span class="absolute inset-0 border-2 border-white rounded-full"></span>
                            </a>
                        </li>
                        <li class="mr-6">
                            <a href="{{route('aboutus')}}" class="relative inline-flex items-center justify-start inline-block px-5 py-1 overflow-hidden font-bold rounded-full group">
                                <span class="w-20 h-20 rotate-45 translate-x-12 -translate-y-2 absolute left-0 top-0 bg-white opacity-[3%]"></span>
                                <span class="absolute top-0 left-0 w-48 h-48 -mt-1 transition-all duration-500 ease-in-out rotate-45 -translate-x-56 -translate-y-24 bg-white opacity-100 group-hover:-translate-x-8"></span>
                                <span class="relative w-full text-left text-white transition-colors duration-200 ease-in-out group-hover:text-gray-900">About Us</span>
                                <span class="absolute inset-0 border-2 border-white rounded-full"></span>
                            </a>
                            {{-- <a href="{{route('aboutus')}}">About Us</a> --}}
                        </li>
                        <li class="mr-6">
                            <a href="{{route('howTo')}}" class="relative inline-flex items-center justify-start inline-block px-5 py-1 overflow-hidden font-bold rounded-full group">
                                <span class="w-20 h-20 rotate-45 translate-x-12 -translate-y-2 absolute left-0 top-0 bg-white opacity-[3%]"></span>
                                <span class="absolute top-0 left-0 w-48 h-48 -mt-1 transition-all duration-500 ease-in-out rotate-45 -translate-x-56 -translate-y-24 bg-white opacity-100 group-hover:-translate-x-8"></span>
                                <span class="relative w-full text-left text-white transition-colors duration-200 ease-in-out group-hover:text-gray-900">How To</span>
                                <span class="absolute inset-0 border-2 border-white rounded-full"></span>
                            </a>
                            {{-- <a href="{{route('howTo')}}">How To</a> --}}
                        </li>
                        <li class="mr-6">
                            <a href="{{route('suggestions')}}" class="relative inline-flex items-center justify-start inline-block px-5 py-1 overflow-hidden font-bold rounded-full group">
                                <span class="w-20 h-20 rotate-45 translate-x-12 -translate-y-2 absolute left-0 top-0 bg-white opacity-[3%]"></span>
                                <span class="absolute top-0 left-0 w-48 h-48 -mt-1 transition-all duration-500 ease-in-out rotate-45 -translate-x-56 -translate-y-24 bg-white opacity-100 group-hover:-translate-x-8"></span>
                                <span class="relative w-full text-left text-white transition-colors duration-200 ease-in-out group-hover:text-gray-900">Suggestions</span>
                                <span class="absolute inset-0 border-2 border-white rounded-full"></span>
                            </a>
                            {{-- <a href="{{route('suggestions')}}">Suggestions</a> --}}
                        </li>
                        <li class="mr-6">
                            <a href="{{route('topTrumps')}}" class="relative inline-flex items-center justify-start inline-block px-5 py-1 overflow-hidden font-bold rounded-full group">
                                <span class="w-20 h-20 rotate-45 translate-x-12 -translate-y-2 absolute left-0 top-0 bg-white opacity-[3%]"></span>
                                <span class="absolute top-0 left-0 w-48 h-48 -mt-1 transition-all duration-500 ease-in-out rotate-45 -translate-x-56 -translate-y-24 bg-white opacity-100 group-hover:-translate-x-8"></span>
                                <span class="relative w-full text-left text-white transition-colors duration-200 ease-in-out group-hover:text-gray-900">Top Trumps</span>
                                <span class="absolute inset-0 border-2 border-white rounded-full"></span>
                            </a>
                            {{-- <a href="{{route('topTrumps')}}">TopTrumps</a> --}}
                        </li>
                    </ul>
                </div>

                <!-- Right: Header buttons -->
                <div class="-mr-1.5 flex items-center space-x-2">
                    <!-- Dark Mode Toggle -->
                    <button @click="$store.global.isDarkModeEnabled = !$store.global.isDarkModeEnabled"
                        class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                        <svg x-show="$store.global.isDarkModeEnabled"
                            x-transition:enter="transition-transform duration-200 ease-out absolute origin-top"
                            x-transition:enter-start="scale-75" x-transition:enter-end="scale-100 static"
                            class="h-6 w-6 text-amber-400" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M11.75 3.412a.818.818 0 01-.07.917 6.332 6.332 0 00-1.4 3.971c0 3.564 2.98 6.494 6.706 6.494a6.86 6.86 0 002.856-.617.818.818 0 011.1 1.047C19.593 18.614 16.218 21 12.283 21 7.18 21 3 16.973 3 11.956c0-4.563 3.46-8.31 7.925-8.948a.818.818 0 01.826.404z">
                            </path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" x-show="!$store.global.isDarkModeEnabled"
                            x-transition:enter="transition-transform duration-200 ease-out absolute origin-top"
                            x-transition:enter-start="scale-75" x-transition:enter-end="scale-100 static"
                            class="h-6 w-6 text-amber-400" viewBox="0 0 20 20" fill="currentColor"
                            style="display: none;">
                            <path fill-rule="evenodd"
                                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <!-- Monochrome Mode Toggle -->
                    <button @click="$store.global.isMonochromeModeEnabled = !$store.global.isMonochromeModeEnabled"
                        class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                        <i
                            class="fa-solid fa-palette bg-gradient-to-r from-sky-400 to-blue-600 bg-clip-text text-lg font-semibold text-transparent"></i>
                    </button>
                    @if (is_null($user))
                        <button @click="showModal = true" class="btn bg-blue-500 text-white hover:bg-success">Sign
                            In</button>
                    @else
                        <button @click="$store.global.isRightSidebarExpanded = true"
                            class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <div class="flex animate-pulse flex-wrap -space-x-2">
                                <div class="avatar h-8 w-8">
                                    <div
                                        class="is-initial rounded-full bg-slate-200 text-xs+ uppercase hover:bg-orange-500
                                 text-white ring ring-white dark:bg-navy-500 dark:ring-navy-700 dark:hover:bg-primary">
                                        <i class="fa fa-user"></i>
                                    </div>
                                </div>
                        </button>
                    @endif

                </div>
            </div>
        </div>

    </nav>

    <div x-show="$store.global.isRightSidebarExpanded"
        @keydown.window.escape="$store.global.isRightSidebarExpanded = false">
        <div class="fixed inset-0 z-[150] bg-slate-900/60 transition-opacity duration-200"
            @click="$store.global.isRightSidebarExpanded = false" x-show="$store.global.isRightSidebarExpanded"
            x-transition:enter="ease-out" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="ease-in" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
        </div>
        <div class="fixed right-0 top-0 z-[151] h-full w-full sm:w-80">
            <div x-data="{ activeTab: 'tabHome' }"
                class="relative flex h-full w-full transform-gpu flex-col bg-white transition-transform duration-200 dark:bg-navy-750"
                x-show="$store.global.isRightSidebarExpanded" x-transition:enter="ease-out"
                x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                x-transition:leave="ease-in" x-transition:leave-start="translate-x-0"
                x-transition:leave-end="translate-x-full">
                <div class="flex items-center justify-between py-2 px-4">
                    <p x-show="activeTab === 'tabHome'" class="flex shrink-0 items-center space-x-1.5">
                        <span class="text-l mt-1">Welcome, {{ isset($user) ? $user->name : 'Guest' }}</span>
                    </p>

                    <button @click="$store.global.isRightSidebarExpanded=false"
                        class="btn -mr-1 h-6 w-6 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <div x-show="activeTab === 'tabHome'" x-transition:enter="transition-all duration-500 easy-in-out"
                    x-transition:enter-start="opacity-0 [transform:translate3d(0,1rem,0)]"
                    x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]"
                    class="is-scrollbar-hidden overflow-y-auto overscroll-contain pt-1">
                    <div class="">
                        <div class="mt-3 flex items-center justify-center">
                            <button
                                class="btn w-[300px] rounded-full bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                                Account Settings
                            </button>
                        </div>
                        <div class="mt-3 flex items-center justify-center">
                            <button
                                class="btn w-[300px] rounded-full bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                                Download Top Trumps
                            </button>
                        </div>
                        <div class="mt-3 flex items-center justify-center">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <button
                                    class="btn w-[300px] rounded-full bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                                    Log Out
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <main class="main-content w-full px-0 md:px-1 lg:px-[var(--margin-x)] pb-8 mx-4">
        @yield('content')

        <div>

            <template x-teleport="#x-teleport-target">

                <div class="fixed inset-0 z-[100] flex flex-col items-center justify-center overflow-hidden px-4 py-6 sm:px-5"
                    x-show="showModal" role="dialog" @keydown.window.escape="showModal = false">
                    <div class="absolute inset-0 bg-slate-900/60 transition-opacity duration-300"
                        @click="showModal = false" x-show="showModal" x-transition:enter="ease-out"
                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                        x-transition:leave="ease-in" x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"></div>
                    {{-- <template x-if="createAccount == false"> --}}
                    <div class="relative w-full max-w-lg origin-top rounded-lg bg-white transition-all duration-300 dark:bg-navy-700"
                        x-show="showModal" x-transition:enter="easy-out"
                        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="easy-in" x-transition:leave-start="opacity-100 scale-100"
                        x-transition:leave-end="opacity-0 scale-95">

                        {{-- Sign In --}}
                        <div x-show="!createAccount"
                            class="flex justify-between rounded-t-lg bg-slate-200 px-4 py-3 dark:bg-navy-800 sm:px-5">
                            <h3 class="text-base font-medium text-slate-700 dark:text-navy-100">
                                Sign In
                            </h3>
                            <button @click="showModal = !showModal"
                                class="btn -mr-1.5 h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12">
                                    </path>
                                </svg>
                            </button>
                        </div>

                        {{-- Create Account --}}
                        <div x-show="createAccount"
                            class="flex justify-between rounded-t-lg bg-slate-200 px-4 py-3 dark:bg-navy-800 sm:px-5">
                            <h3 class="text-base font-medium text-slate-700 dark:text-navy-100">
                                Create Account
                            </h3>
                            <button @click="showModal = !showModal"
                                class="btn -mr-1.5 h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12">
                                    </path>
                                </svg>
                            </button>
                        </div>

                        {{-- Sign In --}}
                        <div x-show="!createAccount" class="px-4 py-4 sm:px-5">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="mt-4 space-y-4">
                                    <label class="block">
                                        <span>Email</span>
                                        <input name="email"
                                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="email" type="email" />
                                    </label>
                                    <label class="block">
                                        <span>Password</span>
                                        <input name="password"
                                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="password" type="password" />
                                    </label>
                                    <label class="block">
                                        <a @click="createAccount = true" class="hover:text-blue-500">Create
                                            Account</a>
                                    </label>
                                    <div class="space-x-2 text-right">
                                        <a @click="showModal = false"
                                            class="btn min-w-[7rem] rounded-full border border-slate-300 font-medium text-slate-800 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-50 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90">
                                            Cancel
                                        </a>
                                        <button @click="showModal = false" type="submit"
                                            class="btn min-w-[7rem] rounded-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                                            Sign In
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        {{-- Create Account --}}
                        <div x-show="createAccount" class="px-4 py-4 sm:px-5">
                            <form method="POST" action="{{ route('user.create') }}">
                                @csrf
                                <div class="mt-4 space-y-4">
                                    <label class="block">
                                        <span>First Name</span>
                                        <input name="firstName" required
                                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="First Name" type="text" />
                                    </label>
                                    <label class="block">
                                        <span>Last Name</span>
                                        <input name="lastName" required
                                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="Last Name" type="text" />
                                    </label>
                                    <label class="block">
                                        <span>Email</span>
                                        <input name="email" required
                                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="email" type="email" />
                                    </label>
                                    <label class="block">
                                        <span>Password</span>
                                        <input name="password" required
                                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="Password" type="password" />
                                    </label>
                                    <label class="block">
                                        <span>Retype Password</span>
                                        <input name="passwordRetype" required
                                            class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="Password" type="password" />
                                    </label>
                                    <label class="block">
                                        <a @click="createAccount = false" class="hover:text-blue-500">Got an account?
                                            Sign in</a>
                                    </label>
                                    <div class="space-x-2 text-right">
                                        <a @click="showModal = false"
                                            class="btn min-w-[7rem] rounded-full border border-slate-300 font-medium text-slate-800 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-50 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90">
                                            Cancel
                                        </a>

                                        <button x-show="createAccount" @click="showModal = false" type="submit"
                                            class="btn min-w-[7rem] rounded-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                                            Create Account
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </template>
        </div>
    </main>

    <footer
      class="bg-gray-400 mt-[300px] text-center text-neutral-600 dark:bg-neutral-600 dark:text-neutral-200 lg:text-left">
     <div
      class="flex items-center justify-center border-b-2 border-neutral-200 p-6 dark:border-neutral-500 lg:justify-between">
      <div class="mr-12 hidden lg:block">
        <span>Get connected with us on social networks:</span>
      </div>
      <div class="flex justify-center">
        <a href="#!" class="mr-6 text-neutral-600 dark:text-neutral-200">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-4 w-4"
            fill="currentColor"
            viewBox="0 0 24 24">
            <path
              d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
          </svg>
        </a>
        <a href="#!" class="mr-6 text-neutral-600 dark:text-neutral-200">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-4 w-4"
            fill="currentColor"
            viewBox="0 0 24 24">
            <path
              d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
          </svg>
        </a>
        <a href="#!" class="mr-6 text-neutral-600 dark:text-neutral-200">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5"
            fill="currentColor"
            viewBox="0 0 24 24">
            <path
              d="M7 11v2.4h3.97c-.16 1.029-1.2 3.02-3.97 3.02-2.39 0-4.34-1.979-4.34-4.42 0-2.44 1.95-4.42 4.34-4.42 1.36 0 2.27.58 2.79 1.08l1.9-1.83c-1.22-1.14-2.8-1.83-4.69-1.83-3.87 0-7 3.13-7 7s3.13 7 7 7c4.04 0 6.721-2.84 6.721-6.84 0-.46-.051-.81-.111-1.16h-6.61zm0 0 17 2h-3v3h-2v-3h-3v-2h3v-3h2v3h3v2z"
              fill-rule="evenodd"
              clip-rule="evenodd" />
          </svg>
        </a>
        <a href="#!" class="mr-6 text-neutral-600 dark:text-neutral-200">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-4 w-4"
            fill="currentColor"
            viewBox="0 0 24 24">
            <path
              d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
          </svg>
        </a>
        <a href="#!" class="mr-6 text-neutral-600 dark:text-neutral-200">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-4 w-4"
            fill="currentColor"
            viewBox="0 0 24 24">
            <path
              d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
          </svg>
        </a>
        <a href="#!" class="text-neutral-600 dark:text-neutral-200">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-4 w-4"
            fill="currentColor"
            viewBox="0 0 24 24">
            <path
              d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
          </svg>
        </a>
      </div>
     </div>
        <div class="mx-6 py-10 text-center md:text-left">
      <div class="grid-1 grid gap-8 md:grid-cols-2 lg:grid-cols-4">
        <div class="">
          <h6
            class="mb-4 flex items-center justify-center font-semibold uppercase md:justify-start">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="currentColor"
              class="mr-3 h-4 w-4">
              <path
                d="M12.378 1.602a.75.75 0 00-.756 0L3 6.632l9 5.25 9-5.25-8.622-5.03zM21.75 7.93l-9 5.25v9l8.628-5.032a.75.75 0 00.372-.648V7.93zM11.25 22.18v-9l-9-5.25v8.57a.75.75 0 00.372.648l8.628 5.033z" />
            </svg>
            Course 4 - Web Development and HCI
          </h6>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus mollitia laboriosam ipsa, possimus sint dolorum voluptatum pariatur nemo, provident dolore veritatis? Eos minus, quasi nihil vitae animi corporis quod! Quisquam?
          </p>
        </div>
        <div class="">
          
        </div>
        <div class="">
          <h6
            class="mb-4 flex justify-center font-semibold uppercase md:justify-start">
            Useful links
          </h6>
          <p class="mb-4">
            <a href="#!" class="text-neutral-600 dark:text-neutral-200"
              >Home</a
            >
          </p>
          <p class="mb-4">
            <a href="#!" class="text-neutral-600 dark:text-neutral-200"
              >About Us</a
            >
          </p>
          <p class="mb-4">
            <a href="#!" class="text-neutral-600 dark:text-neutral-200"
              >How To</a
            >
          </p>
          <p>
            <a href="#!" class="text-neutral-600 dark:text-neutral-200"
              >Top Trumps</a
            >
          </p>
        </div>
        <div>
          <h6
            class="mb-4 flex justify-center font-semibold uppercase md:justify-start">
            Contact
          </h6>
          <p class="mb-4 flex items-center justify-center md:justify-start">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="currentColor"
              class="mr-3 h-5 w-5">
              <path
                d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
              <path
                d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
            </svg>
            London, UK
          </p>
          <p class="mb-4 flex items-center justify-center md:justify-start">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="currentColor"
              class="mr-3 h-5 w-5">
              <path
                d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
              <path
                d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
            </svg>
            info@toptrump.com
          </p>
          <p class="mb-4 flex items-center justify-center md:justify-start">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="currentColor"
              class="mr-3 h-5 w-5">
              <path
                fill-rule="evenodd"
                d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z"
                clip-rule="evenodd" />
            </svg>
            + 01 234 567 88
          </p>
          <p class="flex items-center justify-center md:justify-start">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="currentColor"
              class="mr-3 h-5 w-5">
              <path
                fill-rule="evenodd"
                d="M7.875 1.5C6.839 1.5 6 2.34 6 3.375v2.99c-.426.053-.851.11-1.274.174-1.454.218-2.476 1.483-2.476 2.917v6.294a3 3 0 003 3h.27l-.155 1.705A1.875 1.875 0 007.232 22.5h9.536a1.875 1.875 0 001.867-2.045l-.155-1.705h.27a3 3 0 003-3V9.456c0-1.434-1.022-2.7-2.476-2.917A48.716 48.716 0 0018 6.366V3.375c0-1.036-.84-1.875-1.875-1.875h-8.25zM16.5 6.205v-2.83A.375.375 0 0016.125 3h-8.25a.375.375 0 00-.375.375v2.83a49.353 49.353 0 019 0zm-.217 8.265c.178.018.317.16.333.337l.526 5.784a.375.375 0 01-.374.409H7.232a.375.375 0 01-.374-.409l.526-5.784a.373.373 0 01.333-.337 41.741 41.741 0 018.566 0zm.967-3.97a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H18a.75.75 0 01-.75-.75V10.5zM15 9.75a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V10.5a.75.75 0 00-.75-.75H15z"
                clip-rule="evenodd" />
            </svg>
            + 01 11 11 11 11
          </p>
        </div>
      </div>
        </div>
  </footer>

    <!-- Page Wrapper -->
    {{-- <div id="root" class="max-h-[400px] flex grow bg-slate-50 dark:bg-navy-900" x-cloak>



    </div> --}}

    <div id="x-teleport-target"></div>
    <script>
        window.addEventListener("DOMContentLoaded", () => Alpine.start());
    </script>

   

    @isset($script)
        {{ $script }}
    @endisset

</body>

</html>
