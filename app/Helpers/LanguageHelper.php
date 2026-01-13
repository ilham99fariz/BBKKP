<?php

/**
 * Language and Translation Helpers
 */

/**
 * Get the URL with a specific locale
 */
function getLocaleUrl($locale = null)
{
    $locale = $locale ?? app()->getLocale();
    $currentUrl = request()->fullUrl();
    
    // Remove existing lang parameter if present
    $url = preg_replace('/([?&])lang=[^&]*/', '$1', $currentUrl);
    $url = rtrim($url, '?&');
    
    // Add new locale parameter
    $separator = (strpos($url, '?') !== false) ? '&' : '?';
    return $url . $separator . 'lang=' . $locale;
}

/**
 * Get alternate language code
 */
function getAlternateLocale()
{
    $current = app()->getLocale();
    return $current === 'en' ? 'id' : 'en';
}

/**
 * Get alternate language name
 */
function getAlternateLocaleName()
{
    $locale = getAlternateLocale();
    return $locale === 'en' ? 'English' : 'Bahasa Indonesia';
}

/**
 * Check if current locale is Indonesian
 */
function isIndonesian()
{
    return app()->getLocale() === 'id';
}

/**
 * Check if current locale is English
 */
function isEnglish()
{
    return app()->getLocale() === 'en';
}

/**
 * Get current locale
 */
function getCurrentLocale()
{
    return app()->getLocale();
}

/**
 * Get language name
 */
function getLanguageName($locale = null)
{
    $locale = $locale ?? app()->getLocale();
    $languages = [
        'id' => 'Bahasa Indonesia',
        'en' => 'English'
    ];
    return $languages[$locale] ?? 'Unknown';
}

/**
 * Get locale display name
 */
function getLocaleDisplayName($locale = null)
{
    $locale = $locale ?? app()->getLocale();
    return getLanguageName($locale);
}

/**
 * Create multi-language route URL
 */
function multiLangUrl($path, $locale = null)
{
    $locale = $locale ?? app()->getLocale();
    return url($path . '?lang=' . $locale);
}

/**
 * Get language flag emoji
 */
function getLanguageFlag($locale = null)
{
    $locale = $locale ?? app()->getLocale();
    $flags = [
        'id' => '🇮🇩',
        'en' => '🇬🇧'
    ];
    return $flags[$locale] ?? '';
}
