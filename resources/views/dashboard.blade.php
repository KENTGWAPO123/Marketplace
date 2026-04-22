<x-app-layout>
    <x-slot name="header">
        Dashboard
    </x-slot>

    <div class="box">
        <div class="content">
            <h3 class="title is-4">Welcome back, {{ Auth::user()->name }}!</h3>
            <p class="notification is-light">
                You are logged in as a <strong>{{ ucfirst(Auth::user()->role) }}</strong>.
            </p>
            
            <div class="columns mt-5">
                <div class="column is-4">
                    <div class="card has-background-primary-light">
                        <div class="card-content">
                            <p class="title is-5">Explore Marketplace</p>
                            <p class="subtitle is-6">Browse all available products.</p>
                            <a href="{{ route('products.index') }}" class="button is-primary is-small">Go to Products</a>
                        </div>
                    </div>
                </div>
                
                @if(Auth::user()->role === 'seller')
                <div class="column is-4">
                    <div class="card has-background-link-light">
                        <div class="card-content">
                            <p class="title is-5">Manage Your Items</p>
                            <p class="subtitle is-6">Add or edit your marketplace listings.</p>
                            <a href="{{ route('products.index') }}" class="button is-link is-small">My Products</a>
                        </div>
                    </div>
                </div>
                @endif

                <div class="column is-4">
                    <div class="card has-background-info-light">
                        <div class="card-content">
                            <p class="title is-5">Learn About Us</p>
                            <p class="subtitle is-6">Meet the team behind this platform.</p>
                            <a href="{{ route('about-us') }}" class="button is-info is-small">About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
