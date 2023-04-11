{{-- <nav class="nav-menu">
    <ul>
        <li class="active">
            <a href="{{ route('welcome') }}">{{ __('Home') }}</a>
        </li>
        <li>
            <a href="{{ route('about') }}">{{ __('About us') }}</a>
        </li>
        <li>
            <a href="{{ route('programs') }}" >{{ __('Programs') }}</a>
        </li>
        <li>
            <a href="{{ route('edition') }}">{{ __('Editions') }}</a>
        </li>
        <li>
            <a href="{{ route('jury') }}">{{ __('Jury') }}</a>
        </li>
        
        <button id="navBtn">
            <a class="nav-link" href="{{ route('inscription') }}">{{ __('Inscription') }}</a>
            </button>
    </ul>
</nav> --}}

<nav class="nav-menu">
    <ul>
        <li class="{{ request()->routeIs('welcome') ? 'active' : '' }}">
            <a href="{{ route('welcome') }}">{{ __('Home') }}</a>
        </li>
        <li class="{{ request()->routeIs('about') ? 'active' : '' }}">
            <a href="{{ route('about') }}">{{ __('About us') }}</a>
        </li>
        <li class="{{ request()->routeIs('programs') ? 'active' : '' }}">
            <a href="{{ route('programs') }}" >{{ __('Programs') }}</a>
        </li>
        <li class="{{ request()->routeIs('editions') ? 'active' : '' }}">
            <a href="{{ route('editions') }}">{{ __('Editions') }}</a>
        </li>
        <li class="{{ request()->routeIs('jurys') ? 'active' : '' }}">
            <a href="{{ route('jurys') }}">{{ __('Jury') }}</a>
        </li>
        <li>
            <button id="navBtn">
                @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @if (Route::has('register'))
                    <a href="{{ route('register.link.clicked') }}" class="nav-link">Register</a>
                @endif
                </div>
            @endif
                {{-- <a class="nav-link" href="{{ route('register.link.clicked') }}">{{ __('Inscription') }}</a> --}}
            </button>
        </li>
    </ul>
</nav>