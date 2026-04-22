<x-app-layout>
    <nav class="breadcrumb has-succeeds-separator mb-5" aria-label="breadcrumbs">
        <ul>
            <li><a href="{{ route('products.index') }}">Marketplace</a></li>
            <li class="is-active"><a href="#" aria-current="page">{{ $product->title }}</a></li>
        </ul>
    </nav>

    <div class="columns is-variable is-8">
        <div class="column is-7">
            <div class="card">
                <div class="card-image">
                    <figure class="image is-4by3">
                        @if($product->image_path)
                            <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->title }}" style="object-fit: contain; background: #f5f5f5;">
                        @else
                            <img src="https://via.placeholder.com/800x600?text=No+Image" alt="No Image">
                        @endif
                    </figure>
                </div>
            </div>
            
            <div class="content mt-6">
                <h3 class="title is-4">Description</h3>
                <p class="is-size-5 has-text-grey-darker" style="line-height: 1.6;">
                    {{ $product->description }}
                </p>
            </div>
        </div>

        <div class="column is-5">
            <div class="box p-5" style="position: sticky; top: 5rem;">
                <span class="tag is-primary is-light mb-3">{{ $product->created_at->diffForHumans() }}</span>
                <h1 class="title is-2 mb-2">{{ $product->title }}</h1>
                <p class="subtitle is-3 has-text-primary has-text-weight-bold mb-5">
                    ₱{{ number_format($product->price, 2) }}
                </p>

                <hr>

                <div class="media mb-5">
                    <div class="media-left">
                        <figure class="image is-48x48">
                            <img src="https://ui-avatars.com/api/?name={{ urlencode($product->user->name) }}&background=random" alt="{{ $product->user->name }}" class="is-rounded">
                        </figure>
                    </div>
                    <div class="media-content">
                        <p class="title is-5 mb-1">{{ $product->user->name }}</p>
                        <p class="subtitle is-7 has-text-grey">Registered Seller</p>
                    </div>
                </div>

                <div class="buttons">
                    @auth
                        @if(Auth::id() === $product->user_id)
                            <a href="{{ route('products.edit', $product) }}" class="button is-warning is-fullwidth mb-3">
                                <span class="icon"><i class="fas fa-edit"></i></span>
                                <span>Edit Listing</span>
                            </a>
                            <form action="{{ route('products.destroy', $product) }}" method="POST" class="is-fullwidth" onsubmit="return confirm('Permanently delete this item?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="button is-danger is-outlined is-fullwidth">
                                    <span class="icon"><i class="fas fa-trash"></i></span>
                                    <span>Remove Item</span>
                                </button>
                            </form>
                        @else
                            <button class="button is-primary is-large is-fullwidth">
                                <span class="icon"><i class="fas fa-shopping-cart"></i></span>
                                <span>Add to Cart</span>
                            </button>
                            <button class="button is-light is-fullwidth mt-3">
                                <span class="icon"><i class="fas fa-envelope"></i></span>
                                <span>Contact Seller</span>
                            </button>
                        @endif
                    @else
                        <a href="{{ route('login') }}" class="button is-primary is-large is-fullwidth">Login to Purchase</a>
                    @endauth
                </div>

                <div class="message is-info is-light mt-5">
                    <div class="message-body is-size-7">
                        <span class="icon"><i class="fas fa-shield-alt"></i></span>
                        Buyer protection included. Secure payments guaranteed.
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
