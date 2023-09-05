@props(['status'])

@switch($status)
    @case('draft')
        <small
            class="d-inline-flex px-2 py-1 fw-semibold text-bg-light bg-light bg-opacity-10 border border-success border-opacity-10 rounded-2">Draft</small>
    @break

    @case('active')
        <small
            class="d-inline-flex px-2 py-1 fw-semibold text-primary bg-primary bg-opacity-10 border border-success border-opacity-10 rounded-2">Active</small>
    @break

    @case('completed')
        <small
            class="d-inline-flex px-2 py-1 fw-semibold text-success bg-success bg-opacity-10 border border-success border-opacity-10 rounded-2">Completed</small>
    @break

    @case('inactive')
        <small
            class="d-inline-flex px-2 py-1 fw-semibold text-danger bg-danger bg-opacity-10 border border-success border-opacity-10 rounded-2">Inactive</small>
    @break

    @default
@endswitch
