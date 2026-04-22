@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'help is-danger']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
