<li class="menu-item-has-children">
    <a href="#">{{ $current_locale_name }}</a><i class='bx bx-plus dropdown-icon'></i>
    <ul class="submenu">
        @foreach($available_locales as $locale_name => $available_locale)
            @if($available_locale != $current_locale)
            <li><a href="{{ route('setLocale', $available_locale) }}">
                    {{ __('global.'. $locale_name)}}
                </a></li>
            @endif
        @endforeach
    </ul>
</li>