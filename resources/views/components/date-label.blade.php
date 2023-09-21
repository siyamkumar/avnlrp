@props(['fromDate', 'toDate'])
<div class="my-1 d-flex align-items-center">
    <small class="d-inline-flex px-2 py-1 fw-semibold  rounded-2 text-uppercase"
        style="color: #003456; background-color:#E5F9FF">{{ $fromDate ?? '' }}</small>
    <svg fill="#000000" viewBox="0 0 24 24" width="20" class="mx-2">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
        <g id="SVGRepo_iconCarrier">
            <path id="primary" d="M3,12H21m-3,3,3-3L18,9"
                style="fill: none; stroke: #003456; stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.5;">
            </path>
        </g>
    </svg>
    <small class="d-inline-flex px-2 py-1 fw-semibold  rounded-2 text-uppercase"
        style="color: #003456; background-color:#E5F9FF">{{ $fromDate ?? '' }}</small>
</div>
