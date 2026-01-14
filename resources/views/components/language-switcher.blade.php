<div class="language-switcher flex items-center gap-2">
    @php
        $currentLocale = app()->getLocale();
        $locales = ['id' => 'Bahasa Indonesia', 'en' => 'English'];
    @endphp

    <div class="hidden md:flex items-center gap-1 text-sm">
        @foreach($locales as $locale => $name)
            @if($locale === $currentLocale)
                <span class="px-2 py-1 bg-blue-600 text-white rounded font-semibold text-xs">
                    {{ $name }}
                </span>
            @else
                <a href="{{ route('language.switch', $locale) }}"
                    class="px-2 py-1 text-gray-700 hover:bg-gray-100 rounded text-xs transition">
                    {{ $name }}
                </a>
            @endif
            @if(!$loop->last)
                <span class="text-gray-300">|</span>
            @endif
        @endforeach
    </div>

    <!-- Mobile Menu -->
    <div class="md:hidden">
        <button class="text-gray-700 hover:text-blue-600 text-sm font-medium flex items-center gap-1"
            onclick="document.getElementById('langMenuMobile').classList.toggle('hidden')">
            <i class="fas fa-globe"></i>
            <span>{{ substr($currentLocale, 0, 2) }}</span>
        </button>

        <div id="langMenuMobile"
            class="hidden absolute top-12 right-4 bg-white border border-gray-200 rounded-lg shadow-lg p-2 z-50">
            @foreach($locales as $locale => $name)
                @if($locale !== $currentLocale)
                    <a href="{{ route('language.switch', $locale) }}"
                        class="block px-4 py-2 text-gray-700 hover:bg-blue-50 text-sm rounded">
                        {{ $name }}
                    </a>
                @endif
            @endforeach
        </div>
    </div>
</div>