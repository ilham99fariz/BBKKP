<!-- Tambahkan ini di bagian <head> layout Anda -->
<style>
    [x-cloak] {
        display: none !important;
    }
</style>

<!-- Navigation -->
<nav class="bg-white shadow-lg sticky top-0 z-50" x-data="navbarData()">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex-shrink-0 flex items-center">
                    <img class="h-8 w-auto sm:h-10" src="{{ asset('images/logobalai.png') }}" alt="Logo">
                    <!-- <span class="ml-2 text-xl font-bold text-gray-900">BALAI BESAR</span> -->
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center space-x-1">
                <!-- Dynamic Menu Items from Database -->
                @foreach($navbarMenus as $menu)
                    @if($menu->children->isNotEmpty())
                        <!-- Dropdown Menu -->
                        <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                            <a href="{{ $menu->full_url }}"
                                class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200 flex items-center">
                                {{ $menu->display_title ?? $menu->title }}
                                <svg class="ml-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                            <!-- Invisible bridge to prevent cursor gap -->
                            <div class="absolute top-full left-0 right-0 h-4" @mouseenter="open = true"
                                @mouseleave="open = false"></div>
                            <div x-show="open" x-cloak
                                class="absolute top-full left-0 pt-4 w-64 bg-white shadow-xl rounded-lg py-2 z-50"
                                @mouseenter="open = true" @mouseleave="open = false">
                                @foreach($menu->children as $child)
                                    <a href="{{ $child->full_url }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">
                                        {{ $child->display_title ?? $child->title }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @else
                        <!-- Direct Link -->
                        <a href="{{ $menu->full_url }}"
                            class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200"
                            @if($menu->open_new_tab) target="_blank" rel="noopener noreferrer" @endif>
                            {{ $menu->display_title ?? $menu->title }}
                        </a>
                    @endif
                @endforeach

                <!-- Language Switcher -->
                <div class="relative ml-2" x-data="{ open: false }" @mouseenter="open = true"
                    @mouseleave="open = false">
                    <button type="button"
                        class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200 flex items-center">
                        <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129" />
                        </svg>
                        {{ strtoupper(app()->getLocale()) }}
                        <svg class="ml-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div x-show="open" x-cloak x-transition
                        class="absolute right-0 mt-2 w-40 bg-white shadow-xl rounded-lg py-2 z-50"
                        @mouseenter="open = true" @mouseleave="open = false">
                        <a href="{{ route('language.switch', 'id') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 {{ app()->getLocale() == 'id' ? 'bg-blue-50 text-blue-600' : '' }}">
                            🇮🇩 Bahasa Indonesia
                        </a>
                        <a href="{{ route('language.switch', 'en') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 {{ app()->getLocale() == 'en' ? 'bg-blue-50 text-blue-600' : '' }}">
                            🇬🇧 English
                        </a>
                    </div>
                </div>
            </div>

            <!-- Mobile menu button -->
            <div class="flex items-center lg:hidden">
                <button @click="mobileOpen = !mobileOpen" type="button"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:text-blue-600 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500"
                    aria-controls="mobile-menu" :aria-expanded="mobileOpen.toString()">
                    <span class="sr-only">Buka menu</span>
                    <!-- Icon Hamburger -->
                    <svg x-show="!mobileOpen" class="block h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!-- Icon Close -->
                    <svg x-show="mobileOpen" x-cloak class="block h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile overlay -->
    <div x-show="mobileOpen" x-cloak @click="mobileOpen = false"
        class="fixed inset-0 bg-black bg-opacity-50 z-40 lg:hidden" x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
        x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0">
    </div>

    <!-- Mobile Navigation Drawer (Right Side) -->
    <div x-show="mobileOpen" x-cloak id="mobile-menu"
        class="fixed inset-y-0 right-0 z-50 w-80 bg-white shadow-2xl lg:hidden overflow-y-auto"
        x-transition:enter="transform transition ease-in-out duration-300" x-transition:enter-start="translate-x-full"
        x-transition:enter-end="translate-x-0" x-transition:leave="transform transition ease-in-out duration-300"
        x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full">

        <!-- Drawer header -->
        <div class="flex items-center justify-between px-4 py-4 border-b border-gray-200 bg-blue-50">
            <span class="text-lg font-semibold text-gray-900">Menu Navigasi</span>
            <button @click="mobileOpen = false" type="button"
                class="p-2 rounded-md text-gray-700 hover:text-blue-600 hover:bg-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                <span class="sr-only">Tutup menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Mobile Menu Items -->
        <div class="px-4 py-4 space-y-1">
            <!-- Dynamic Mobile Menu -->
            @foreach($navbarMenus as $menu)
                @if($menu->children->isNotEmpty())
                    <!-- Mobile Dropdown -->
                    <div class="space-y-1">
                        <button @click="toggleMenu('{{ 'menu_' . $menu->id }}')" type="button"
                            class="w-full flex items-center justify-between px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-600">
                            <span>{{ $menu->display_title ?? $menu->title }}</span>
                            <svg class="h-5 w-5 transition-transform duration-200"
                                :class="openMenus['{{ 'menu_' . $menu->id }}'] ? 'rotate-180' : ''" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div x-show="openMenus['{{ 'menu_' . $menu->id }}']" x-cloak class="pl-4 mt-1 space-y-1">
                            @foreach($menu->children as $child)
                                <a href="{{ $child->full_url }}"
                                    class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-md"
                                    @if($child->open_new_tab) target="_blank" rel="noopener noreferrer" @endif>
                                    {{ $child->display_title ?? $child->title }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                @else
                    <!-- Mobile Direct Link -->
                    <a href="{{ $menu->full_url }}"
                        class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-600"
                        @if($menu->open_new_tab) target="_blank" rel="noopener noreferrer" @endif>
                        {{ $menu->display_title ?? $menu->title }}
                    </a>
                @endif
            @endforeach
            <div class="mt-4 border-t border-gray-200 pt-4">
                <div class="px-3 mb-2 text-xs font-semibold text-gray-500 uppercase tracking-wider">
                    {{ __('common.language') }}
                </div>
                <a href="{{ route('language.switch', 'id') }}"
                    class="block px-3 py-2 rounded-md text-base font-medium {{ app()->getLocale() == 'id' ? 'bg-blue-50 text-blue-600' : 'text-gray-700 hover:bg-blue-50 hover:text-blue-600' }}">
                    🇮🇩 Bahasa Indonesia
                </a>
                <a href="{{ route('language.switch', 'en') }}"
                    class="block px-3 py-2 rounded-md text-base font-medium {{ app()->getLocale() == 'en' ? 'bg-blue-50 text-blue-600' : 'text-gray-700 hover:bg-blue-50 hover:text-blue-600' }}">
                    🇬🇧 English
                </a>
            </div>

            <!-- Mobile Admin Login (Uncomment if needed) -->
            <!-- @guest
                                                                <a href="{{ route('login') }}"
                                                                    class="block px-3 py-2 rounded-md text-base font-medium text-white bg-green-600 hover:bg-green-700 text-center mt-2">
                                                                    Login Admin
                                                                </a>
            @endguest -->

            <!-- @auth
                                                                <a href="{{ route('admin.dashboard') }}"
                                                                    class="block px-3 py-2 rounded-md text-base font-medium text-white bg-green-600 hover:bg-green-700 text-center mt-2">
                                                                    Dashboard
                                                                </a>
            @endauth -->
        </div>
    </div>
</nav>

<!-- Alpine.js Script - Tambahkan ini sebelum </body> di layout utama Anda -->
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<script>
    function navbarData() {
        return {
            mobileOpen: false,
            openMenus: {},
            toggleMenu(menuKey) {
                this.openMenus[menuKey] = !this.openMenus[menuKey];
            }
        }
    }
</script>