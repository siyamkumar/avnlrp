@props(['disabled' => false])

<div class="form-floating">
    <input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
        'class' => 'form-floating',
    ]) !!}>

</div>
