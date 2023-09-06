<div class="card shadow-none border border-300 mb-3 ">

    <div class="card-body p-0">

        <div class="px-4 py-3">
            <ul class="nav nav-underline" id="myTab" role="tablist">
                <li class="nav-item text-center" role="presentation">

                    <x-icons.checkok />
                    <a class="nav-link pt-0 {{ request()->routeIs('secondaryeducationdetails.*') ? 'active' : '' }}"
                        href="{{ route('secondaryeducationdetails.index') }}">Secondary Education</a>

                </li>
                <li class="nav-item text-center" role="presentation">
                    <x-icons.checkpartial />
                    <a class="nav-link pt-0 {{ request()->routeIs('highersecondaryeducationdetails.*') ? 'active' : '' }}"
                        href="{{ route('highersecondaryeducationdetails.index') }}">Higher Secondary Education</a>
                </li>

                <li class="nav-item text-center" role="presentation">
                    <x-icons.checknotok />
                    <a class="nav-link pt-0" id="qualification-tab" data-bs-toggle="tab" href="#tab-qualification"
                        role="tab" aria-selected="false">ITI/Diploma Education</a>
                </li>

                <li class="nav-item text-center" role="presentation">
                    <x-icons.checknotok />
                    <a class="nav-link pt-0" id="responsibility-tab" data-bs-toggle="tab" href="#tab-responsibility"
                        role="tab" aria-selected="false">Undergraduate Education</a>
                </li>

                <li class="nav-item text-center" role="presentation">
                    <x-icons.checknotok />
                    <a class="nav-link pt-0" id="terms-tab" data-bs-toggle="tab" href="#tab-terms" role="tab"
                        aria-selected="false">Postgraduate Education</a>


            </ul>
        </div>
    </div>
</div>
