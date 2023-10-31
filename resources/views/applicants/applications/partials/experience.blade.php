<x-card>


    <div>

        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <div class="border rounded-circle d-flex justify-center align-items-center me-3 p-3 bg-light">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" width="30">
                        <g>
                            <path d="M9.1709 4C9.58273 2.83481 10.694 2 12.0002 2C13.3064 2 14.4177 2.83481 14.8295 4"
                                stroke="#5B626F" stroke-width="1.5" stroke-linecap="round"></path>
                            <path
                                d="M12 22.25C11.5858 22.25 11.25 22.5858 11.25 23C11.25 23.4142 11.5858 23.75 12 23.75V22.25ZM4.31802 21.8284L4.81629 21.2679L4.31802 21.8284ZM19.682 21.8284L19.1837 21.2679L19.682 21.8284ZM7.95476 23.6837C8.36822 23.7087 8.72365 23.3938 8.74863 22.9804C8.77362 22.5669 8.4587 22.2115 8.04524 22.1865L7.95476 23.6837ZM2.25 13C2.25 14.8741 2.24918 16.8307 2.41875 18.4664C2.50368 19.2856 2.63401 20.0548 2.84074 20.7105C3.04411 21.3557 3.3444 21.9665 3.81975 22.389L4.81629 21.2679C4.63262 21.1046 4.43867 20.7904 4.27134 20.2596C4.10738 19.7394 3.99058 19.0818 3.91075 18.3118C3.75082 16.769 3.75 14.8971 3.75 13H2.25ZM12 23.75C14.1024 23.75 15.7464 23.7513 17.0267 23.5983C18.3204 23.4436 19.3568 23.1209 20.1803 22.389L19.1837 21.2679C18.6891 21.7075 18.0058 21.9706 16.8487 22.1089C15.6782 22.2487 14.1402 22.25 12 22.25V23.75ZM8.04524 22.1865C6.33099 22.0829 5.4315 21.8147 4.81629 21.2679L3.81975 22.389C4.83576 23.2921 6.18271 23.5767 7.95476 23.6837L8.04524 22.1865ZM20.2499 13.3873C20.2492 15.2185 20.2371 17.0032 20.0724 18.4673C19.9902 19.1982 19.8728 19.8201 19.7119 20.3117C19.548 20.8126 19.3605 21.1108 19.1837 21.2679L20.1803 22.389C20.6399 21.9804 20.9352 21.3963 21.1375 20.7783C21.3428 20.1509 21.4751 19.4171 21.563 18.635C21.7387 17.0731 21.7492 15.2032 21.7499 13.3879L20.2499 13.3873Z"
                                fill="#5B626F"></path>
                            <path
                                d="M14.6603 15L17.664 14.2166M9.33968 15L3.3324 13.4332C2.7369 13.2779 2.43915 13.2002 2.25021 13.0141C2.21341 12.9778 2.18015 12.939 2.15078 12.8979C2 12.6871 2 12.4168 2 11.8763C2 9.74619 2 8.68113 2.67298 7.96206C2.80233 7.82385 2.94763 7.69753 3.10659 7.58508C3.9337 7 5.15877 7 7.60893 7H16.3911C18.8412 7 20.0663 7 20.8934 7.58508C21.0524 7.69753 21.1977 7.82385 21.327 7.96206C22 8.68113 22 9.74619 22 11.8763C22 12.4168 22 12.6871 21.8492 12.8979C21.8199 12.939 21.7866 12.9778 21.7498 13.0141C21.5999 13.1618 21.3814 13.2412 21 13.3453"
                                stroke="#5B626F" stroke-width="1.5" stroke-linecap="round"></path>
                            <path
                                d="M14 13.5H10C9.72386 13.5 9.5 13.7239 9.5 14V16.1615C9.5 16.3659 9.62448 16.5498 9.8143 16.6257L10.5144 16.9058C11.4681 17.2872 12.5319 17.2872 13.4856 16.9058L14.1857 16.6257C14.3755 16.5498 14.5 16.3659 14.5 16.1615V14C14.5 13.7239 14.2761 13.5 14 13.5Z"
                                stroke="#5B626F" stroke-width="1.5" stroke-linecap="round"></path>
                        </g>
                    </svg>
                </div>

                <h3>Particulars of Experience</h3>

                <div class="ms-3"> <x-required-label />
                </div>
            </div>

            @if (!$jobapplication->isSubmitted)
                <a href="{{ route('jobapplication.experiencedetails.create', $jobapplication) }}"
                    class="btn btn-outline-secondary rounded-3 btn-action" aria-expanded="false">
                    Add Experience
                </a>
            @endif
        </div>

        @if (count($jobapplication->experiencedetails) > 0)



            <table class="mt-3">
                <thead>
                    <tr>
                        <th>Name of the Company / Organization</th>
                        <th>Post Held</th>
                        <th>Pay Scale
                            <small>in case of PSUs/Govt. Depts</small>
                        </th>
                        <th>CTC (₹) <small>in other cases</small></th>
                        <th>Major Responsibilities</th>
                        <th>Enclosed Document</th>
                        <th>
                            @if (!$jobapplication->isSubmitted)
                                Action
                            @endif
                        </th>

                    </tr>

                </thead>
                <tbody>

                    @foreach ($jobapplication->experiencedetails as $key => $item)
                        <tr>

                            <td>{{ $item->companyName }}
                                <x-date-label :fromDate="$item->periodFrom->format('M, Y')" :toDate="$item->periodTo->format('M, Y')" />
                            </td>
                            <td>{{ $item->postName }}</td>

                            <td>{{ $item->payScale }}</td>
                            <td>
                                @if ($item->ctc)
                                    <x-currency-format :amount="$item->ctc" />
                                @endif
                            </td>
                            <td>{{ $item->jobsSummary }}</td>
                            <td>
                                <a href="{{ url('storage/public/' . $item->experience_path ?? '') }}""
                                    target="_blank">{{  $item->file_name }}</a>
                            </td>
                            {{-- <td><a href="{{ route('jobapplication.experiencedetails.show', [$jobapplication, $item->id]) }}"
                            data-bs-toggle="modal" data-bs-target="#modalexp">
                            {{ $item->experience_path }}</a> --}}
                            {{-- </td> --}}
                            <td>
                                @if (!$jobapplication->isSubmitted)
                                    <x-icons.edit
                                        href="{{ route('jobapplication.experiencedetails.edit', [$jobapplication, $item->id]) }}" />
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</x-card>
