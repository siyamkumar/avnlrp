@props(['status'])

@switch($status)
    @case('draft')
        <small
            class="d-inline-flex px-2 py-1 fw-semibold  rounded-2 text-uppercase arn-status draft-status">{{ $status ?? '' }}</small>
    @break

    @case('submitted')
        <small class="d-inline-flex px-2 py-1 fw-semibold  rounded-2 text-uppercase arn-status submitted-status"
            style="">{{ $status ?? '' }}</small>
    @break

    @case('shortlisted')
        <small
            class="d-inline-flex px-2 py-1 fw-semibold  rounded-2 text-uppercase arn-status shortlisted-status">{{ $status ?? '' }}</small>
    @break

    @case('rejected')
        <small
            class="d-inline-flex px-2 py-1 fw-semibold  rounded-2 text-uppercase arn-status rejected-status">{{ $status ?? '' }}</small>
    @break

    @default
@endswitch
