<tr>
    <td>PG | {{ $postgraduationeducationdetail->course_name }}</td>
    <td>{{ $postgraduationeducationdetail->score ?? '' }}</td>
    <td>{{ $postgraduationeducationdetail->year_of_passing ?? '' }}</td>
    <td>{{ $postgraduationeducationdetail->college_name ?? '' }}</td>
    <td>{{ $postgraduationeducationdetail->university_name ?? '' }}</td>
    <td>

        @if (isset($postgraduationeducationdetail->isValid))
            <x-valid-status :validity="$postgraduationeducationdetail->isValid" />
        @else
            <a class="btn btn-sm btn-secondary" data-bs-toggle="offcanvas"
                href="#pg{{ $postgraduationeducationdetail->id }}" role="button" aria-controls="offcanvasExample">
                Validate
            </a>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="pg{{ $postgraduationeducationdetail->id }}">

                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Postgraduate
                        Education Details</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    {{ $postgraduationeducationdetail }}
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
