<x-app-layout>
    <section class="hero is-primary is-bold mb-6" style="margin-top: -3rem; margin-left: -3rem; margin-right: -3rem;">
        <div class="hero-body">
            <div class="container">
                <h1 class="title is-1">
                    Discovery Marketplace
                </h1>
                <h2 class="subtitle">
                    Find unique items from independent sellers
                </h2>
            </div>
        </div>
    </section>

    <div class="level mb-5">
        <div class="level-left">
            <h2 class="title is-4">Featured Products</h2>
        </div>
        <div class="level-right">
            @auth
                @if(Auth::user()->role === 'seller')
                    <a href="{{ route('products.create') }}" class="button is-primary">
                        <span class="icon"><i class="fas fa-plus"></i></span>
                        <span>List an Item</span>
                    </a>
                @endif
            @endauth
        </div>
    </div>

    @if(session('success'))
        <div class="notification is-success is-light">
            <button class="delete"></button>
            {{ session('success') }}
        </div>
    @endif

    <div class="columns is-multiline">
        @forelse($products as $product)
            <div class="column is-3">
                <div class="card" style="height: 100%; display: flex; flex-direction: column; transition: transform 0.2s; cursor: pointer;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            @if($product->image_path)
                                <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->title }}" style="object-fit: cover;">
                            @else
                                <img src="https://via.placeholder.com/400x300?text=No+Image" alt="No Image" style="object-fit: cover;">
                            @endif
                        </figure>
                    </div>
                    <div class="card-content" style="flex-grow: 1;">
                        <div class="media mb-2">
                            <div class="media-content">
                                <p class="title is-5 mb-1">{{ $product->title }}</p>
                                <p class="subtitle is-7 has-text-grey">By {{ $product->user->name }}</p>
                            </div>
                        </div>
                        <div class="content">
                            <p class="has-text-weight-bold has-text-primary is-size-4">₱{{ number_format($product->price, 2) }}</p>
                        </div>
                    </div>
                    <footer class="card-footer">
                        <a href="{{ route('products.show', $product) }}" class="card-footer-item has-text-link">View Details</a>
                        @if(Auth::id() === $product->user_id)
                            <a href="{{ route('products.edit', $product) }}" class="card-footer-item has-text-warning">Edit</a>
                        @endif
                    </footer>
                </div>
            </div>
        @empty
            <div class="column is-12">
                <div class="notification is-info is-light has-text-centered py-6">
                    <span class="icon is-large mb-3"><i class="fas fa-search fa-2x"></i></span>
                    <p class="is-size-5">No products available in the marketplace yet.</p>
                </div>
            </div>
        @endforelse
    </div>
</x-app-layout>
