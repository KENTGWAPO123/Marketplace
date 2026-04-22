<x-app-layout>
    <x-slot name="header">
        Add New Product
    </x-slot>

    <div class="columns is-centered">
        <div class="column is-8">
            <div class="box">
                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="field">
                        <label class="label">Product Title</label>
                        <div class="control">
                            <input class="input" type="text" name="title" value="{{ old('title') }}" placeholder="e.g. Vintage Camera" required>
                        </div>
                        @error('title') <p class="help is-danger">{{ $message }}</p> @enderror
                    </div>

                    <div class="field">
                        <label class="label">Description</label>
                        <div class="control">
                            <textarea class="textarea" name="description" placeholder="Describe your product in detail..." required>{{ old('description') }}</textarea>
                        </div>
                        @error('description') <p class="help is-danger">{{ $message }}</p> @enderror
                    </div>

                    <div class="columns">
                        <div class="column is-6">
                            <div class="field">
                                <label class="label">Price (₱)</label>
                                <div class="control has-icons-left">
                                    <input class="input" type="number" step="0.01" name="price" value="{{ old('price') }}" placeholder="0.00" required>
                                    <span class="icon is-small is-left">
                                        ₱
                                    </span>
                                </div>
                                @error('price') <p class="help is-danger">{{ $message }}</p> @enderror
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="field">
                                <label class="label">Product Image</label>
                                <div class="control">
                                    <div class="file has-name is-fullwidth">
                                        <label class="file-label">
                                            <input class="file-input" type="file" name="image">
                                            <span class="file-cta">
                                                <span class="file-icon">
                                                    <i class="fas fa-upload"></i>
                                                </span>
                                                <span class="file-label">
                                                    Choose a file…
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                @error('image') <p class="help is-danger">{{ $message }}</p> @enderror
                            </div>
                        </div>
                    </div>

                    <div class="field is-grouped is-grouped-right mt-5">
                        <div class="control">
                            <a href="{{ route('products.index') }}" class="button is-light">Cancel</a>
                        </div>
                        <div class="control">
                            <button type="submit" class="button is-primary">Create Product</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
