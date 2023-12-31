<tr>
    <td>UG | {{ $graduationeducationdetail->course_name }}</td>
    <td>{{ $graduationeducationdetail->score ?? '' }}</td>
    <td>{{ $graduationeducationdetail->year_of_passing ?? '' }}</td>
    <td>{{ $graduationeducationdetail->college_name ?? '' }}</td>
    <td>{{ $graduationeducationdetail->university_name ?? '' }}</td>
    <td>
        @if (isset($graduationeducationdetail->isValid))
            <x-valid-status :validity="$graduationeducationdetail->isValid" />
        @else
            <a class="btn btn-sm btn-secondary" data-bs-toggle="offcanvas" href="#ug{{ $graduationeducationdetail->id }}"
                role="button" aria-controls="offcanvasExample">
                Validate
            </a>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="ug{{ $graduationeducationdetail->id }}">

                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Undergraduate
                        Education Details</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <img src="{{ url('storage/public/' . $graduationeducationdetail->marksheet_path ?? '') }}"
                        alt="" height="100%">
                </div>
                <div class="offcanvas-footer p-2">
                    <div class="d-flex">
                        <button class="btn btn-icon btn-danger me-2" wire:click='invalid'>
                            Invalid
                        </button>
                        <button class="btn btn-icon btn-success me-2" wire:click="valid">
                            Valid
                        </button>
                    </div>
                </div>
            </div>
        @endif




    </td>

</tr>
