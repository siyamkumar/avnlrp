<tr>
    <td>10th/Secondary</td>
    <td>{{ $secondaryeducationdetail->score ?? '' }}</td>
    <td>{{ $secondaryeducationdetail->year_of_passing ?? '' }}</td>
    <td>{{ $secondaryeducationdetail->school_name ?? '' }}</td>
    <td>{{ $secondaryeducationdetail->school_board ?? '' }}</td>

    <td>


        @if (isset($secondaryeducationdetail->isValid))
            <x-valid-status :validity="$secondaryeducationdetail->isValid" />
        @else
            <a class="btn btn-sm btn-secondary" data-bs-toggle="offcanvas" href="#secondaryRecord" role="button"
                aria-controls="offcanvasExample">
                Validate
            </a>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="secondaryRecord">

                <div class="offcanvas-header">
                    <h5 class="offcanvas-title">Secondary Education Details</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <img src="{{ url('storage/public/' . $secondaryeducationdetail->marksheet_path ?? '') }}"
                        alt="" height="100%">
                </div>
                <div class="offcanvas-footer p-2">
                    <div class="d-flex">
                        <button class="btn btn-icon btn-danger me-2" wire:click='secondaryInvalid'>
                            Invalid
                        </button>
                        <button class="btn btn-icon btn-success me-2" wire:click="secondaryValid">
                            Valid
                        </button>
                    </div>
                </div>
            </div>

        @endempty




</td>

</tr>
