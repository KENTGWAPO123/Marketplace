<nav class="navbar is-fixed-top is-white shadow-sm" role="navigation" aria-label="main navigation" x-data="{ open: false }">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item has-text-weight-bold is-size-4" href="{{ url('/') }}">
                Marketplace
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" @click="open = ! open" :class="{ 'is-active': open }">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div class="navbar-menu" :class="{ 'is-active': open }">
            <div class="navbar-start">
                @auth
                    <a class="navbar-item" href="{{ route('dashboard') }}">
                        Dashboard
                    </a>
                    @if(Auth::user()->role === 'seller')
                        <a class="navbar-item" href="{{ route('products.my') }}">
                            My Inventory
                        </a>
                    @endif
                @endauth
                <a class="navbar-item" href="{{ route('products.index') }}">
                    Products
                </a>
                <a class="navbar-item" href="{{ route('about-us') }}">
                    About Us
                </a>
            </div>

            <div class="navbar-end">
                @auth
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">
                            {{ Auth::user()->name }} ({{ ucfirst(Auth::user()->role) }})
                        </a>

                        <div class="navbar-dropdown is-right">
                            <a class="navbar-item" href="{{ route('profile.edit') }}">
                                Profile
                            </a>
                            <hr class="navbar-divider">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="navbar-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    Log Out
                                </a>
                            </form>
                        </div>
                    </div>
                @else
                    <div class="navbar-item">
                        <div class="buttons">
                            <a class="button is-primary" href="{{ route('register') }}">
                                <strong>Register</strong>
                            </a>
                            <a class="button is-light" href="{{ route('login') }}">
                                Log in
                            </a>
                        </div>
                    </div>
                @endauth
            </div>
        </div>
    </div>
</nav>
