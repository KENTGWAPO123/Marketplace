<x-app-layout>
    <x-slot name="header">
        My Inventory
    </x-slot>

    <div class="level mb-6">
        <div class="level-left">
            <div>
                <h2 class="title is-4 mb-1">Manage Your Shop</h2>
                <p class="subtitle is-6 has-text-grey">You have {{ $products->count() }} active listings</p>
            </div>
        </div>
        <div class="level-right">
            <a href="{{ route('products.create') }}" class="button is-primary is-medium">
                <span class="icon"><i class="fas fa-plus"></i></span>
                <span>Add New Product</span>
            </a>
        </div>
    </div>

    @if(session('success'))
        <div class="notification is-success is-light mb-6">
            <button class="delete"></button>
            <div class="level is-mobile">
                <div class="level-left">
                    <span class="icon mr-2"><i class="fas fa-check-circle"></i></span>
                    {{ session('success') }}
                </div>
            </div>
        </div>
    @endif

    <div class="card is-shadowless border">
        <div class="card-content p-0">
            <div class="table-container">
                <table class="table is-fullwidth is-hoverable is-vcentered">
                    <thead class="has-background-light">
                        <tr>
                            <th class="py-4 pl-5">Product</th>
                            <th class="py-4">Category</th>
                            <th class="py-4">Price</th>
                            <th class="py-4">Status</th>
                            <th class="py-4 has-text-right pr-5">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($products as $product)
                            <tr>
                                <td class="py-4 pl-5">
                                    <div class="media is-vcentered">
                                        <div class="media-left">
                                            <figure class="image is-48x48">
                                                @if($product->image_path)
                                                    <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->title }}" class="is-rounded shadow-sm" style="object-fit: cover;">
                                                @else
                                                    <img src="https://via.placeholder.com/48" alt="No Image" class="is-rounded shadow-sm">
                                                @endif
                                            </figure>
                                        </div>
                                        <div class="media-content">
                                            <p class="has-text-weight-bold mb-0">{{ $product->title }}</p>
                                            <p class="is-size-7 has-text-grey">Added {{ $product->created_at->format('M d, Y') }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="tag is-light is-info">General</span>
                                </td>
                                <td>
                                    <span class="has-text-weight-bold has-text-dark">₱{{ number_format($product->price, 2) }}</span>
                                </td>
                                <td>
                                    <span class="tag is-success is-light">Active</span>
                                </td>
                                <td class="has-text-right pr-5">
                                    <div class="field is-grouped is-grouped-right">
                                        <p class="control">
                                            <a href="{{ route('products.show', $product) }}" class="button is-small is-white has-text-link" title="View">
                                                <span class="icon"><i class="fas fa-eye"></i></span>
                                            </a>
                                        </p>
                                        <p class="control">
                                            <a href="{{ route('products.edit', $product) }}" class="button is-small is-white has-text-warning-dark" title="Edit">
                                                <span class="icon"><i class="fas fa-edit"></i></span>
                                            </a>
                                        </p>
                                        <p class="control">
                                            <form action="{{ route('products.destroy', $product) }}" method="POST" onsubmit="return confirm('Delete this product permanently?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="button is-small is-white has-text-danger" title="Delete">
                                                    <span class="icon"><i class="fas fa-trash"></i></span>
                                                </button>
                                            </form>
                                        </p>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="has-text-centered py-6">
                                    <div class="content has-text-grey">
                                        <span class="icon is-large"><i class="fas fa-box-open fa-2x"></i></span>
                                        <p class="is-size-5 mt-2">Your inventory is empty.</p>
                                        <a href="{{ route('products.create') }}" class="button is-primary is-outlined mt-4">Create Your First Listing</a>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <style>
        .is-vcentered td {
            vertical-align: middle !important;
        }
        .border {
            border: 1px solid #ededed;
            border-radius: 6px;
        }
    </style>
</x-app-layout>
