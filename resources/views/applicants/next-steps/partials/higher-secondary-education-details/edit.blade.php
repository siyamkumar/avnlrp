<form method="POST" action="{{ route('highersecondaryeducationdetails.update', $highersecondaryeducationdetail) }}">
    @csrf @method('PATCH')

    @include('applicants.next-steps.partials.higher-secondary-education-details.form')
    <div class="mt-2">
        <button type="submit" class="btn btn-warning me-2">Update</button>
        <a class="btn-next" href="{{ route('itidiplomadetails.index') }}"  >Next

            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g>
                    <path d="M6 17L11 12L6 7M13 17L18 12L13 7" stroke-width="1" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                </g>
            </svg>
        </a>

    </div>


</form>
