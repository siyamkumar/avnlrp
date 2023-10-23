<form {{ $attributes }} class="text-decoration-none text-danger" method="post">
    @csrf @method('delete')
    <button type="submit" class = "btn-delete">
        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" width="26" class="">
            <g stroke-width="0"></g>
            <g stroke-linecap="round" stroke-linejoin="round"></g>
            <g>
                <path
                    d="M16 9L10 15M10.0002 9L16.0002 15M8 18L2 12L8 6C8 6 10 5.5 13.5 5.5C19.1685 5.5 20.5 5.5 20.5 12C20.5 18.5 19.2925 18.5 13.5 18.5C10 18.5 8 18 8 18Z"
                    stroke="#DC3545" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"></path>
            </g>
        </svg>
    </button>
</form>
