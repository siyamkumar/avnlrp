@props(['validity' => null])

<div>
    @isset($validity)
        @if ($validity)
            <span class="badge bg-success-transparent rounded-1">VALID</span>
        @else
            <span class="badge bg-danger-transparent rounded-1">INVALID</span>
        @endif
    @endisset

</div>
