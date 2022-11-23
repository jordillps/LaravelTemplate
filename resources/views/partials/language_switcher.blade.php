<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ $current_locale_name }}
    </a>
    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        @foreach($available_locales as $locale_name => $available_locale)
            @if($available_locale != $current_locale)
                <a class="dropdown-item" href="{{ route('setLocale', $available_locale) }}">
                    {{ __('global.'. $locale_name)}}
                </a>
            @endif
        @endforeach
    </div>
</li>