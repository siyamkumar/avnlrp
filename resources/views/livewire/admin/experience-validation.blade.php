<tr>

    <td>{{ $experiencedetail->companyName }}
        <x-date-label :fromDate="$experiencedetail->periodFrom->format('M, Y')" :toDate="$experiencedetail->periodTo->format('M, Y')" />
    </td>
    <td>{{ $experiencedetail->postName }}</td>

    <td>{{ $experiencedetail->payScale }}</td>

    <td>
        @if ($experiencedetail->ctc)
            <x-currency-format :amount="$experiencedetail->ctc" />
        @endif
    </td>
    <td>{{ $experiencedetail->jobsSummary }}</td>

    <td>

        <x-valid-status :validity="$experiencedetail->isValid" />
        @if (!isset($experiencedetail->isValid))
            <a class="btn btn-sm btn-secondary" data-bs-toggle="offcanvas" href="#exp{{ $experiencedetail->id }}"
                role="button" aria-controls="offcanvasExample">
                Validate
            </a>
        @endif


        <div class="offcanvas offcanvas-end" tabindex="-1" id="exp{{ $experiencedetail->id }}">

            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">
                    Experience Details</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                {{ $experiencedetail }}
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
    </td>

</tr>
