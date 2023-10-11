@props(['status'])

@switch($status)
    @case('draft')
        <small
            class="d-inline-flex px-2 py-1 fw-semibold  rounded-2 text-uppercase draft-status">{{ $status ?? '' }}</small>
    @break

    @case('submitted')
        <small class="d-inline-flex px-2 py-1 fw-semibold  rounded-2 text-uppercase submitted-status"
            style="">{{ $status ?? '' }}</small>
    @break

    @case('shortlisted')
        <small
            class="d-inline-flex px-2 py-1 fw-semibold  rounded-2 text-uppercase  shortlisted-status">{{ $status ?? '' }}</small>
    @break

    @case('rejected')
        <small
            class="d-inline-flex px-2 py-1 fw-semibold  rounded-2 text-uppercase rejected-status">{{ $status ?? '' }}</small>
    @break

    @default
@endswitch
