            <a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Domov</a>
            <a class="{{ request()->routeIs('web-it') ? 'active' : '' }}" href="{{ route('web-it') }}">Weby / IT</a>
            <a class="{{ request()->routeIs('iot') ? 'active' : '' }}" href="{{ route('iot') }}">IoT</a>
            <a class="{{ request()->routeIs('3d') ? 'active' : '' }}" href="{{ route('3d') }}">3D</a>
            <a class="{{ request()->routeIs('repairs') ? 'active' : '' }}" href="{{ route('repairs') }}">Počítače</a>
            <a class="{{ request()->routeIs('pricing') ? 'active' : '' }}" href="{{ route('pricing') }}">Cenník</a>
            <a class="contact {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Kontakt</a>
