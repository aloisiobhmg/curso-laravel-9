@if ($errors->any())
    <ul class="errors">
        @foreach ($errors->all() as $erro)
            <li class="error">{{ $erro }}</li>
        @endforeach
    </ul>
@endif
