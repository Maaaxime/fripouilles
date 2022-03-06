@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <div class="error">
            {{ __('Whoops! Something went wrong.') }}
        </div>

        <ul class="error">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
