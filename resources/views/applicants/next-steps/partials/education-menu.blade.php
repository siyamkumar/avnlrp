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
                    <a class="nav-link pt-0 {{ request()->routeIs('jobapplication.highersecondaryeducationdetails.*') ? 'active' : '' }}"
                        href="{{ route('jobapplication.highersecondaryeducationdetails.index') }}">Higher Secondary Education</a>
                </li>

                <li class="nav-item text-center" role="presentation">
                    <x-icons.checknotok />
                    <a class="nav-link pt-0 {{ request()->routeIs('itidiplomadetails.*') ? 'active' : '' }}" id="qualification-tab" data-bs-toggle="tab" 
                        href="{{ route('itidiplomadetails.index') }}"
                        role="tab" aria-selected="false">ITI/Diploma Education</a>
                </li>

                <li class="nav-item text-center" role="presentation">
                    <x-icons.checknotok />
                    <a class="nav-link pt-0 {{ request()->routeIs('jobapplication.graduationeducationdetails.*') ? 'active' : '' }}" href="{{ route(
                        'jobapplication.graduationeducationdetails.index') }}"
                       >Undergraduate Education</a>
                </li>

                <li class="nav-item text-center" >
                    <x-icons.checknotok />
                    <a class="nav-link pt-0 {{ request()->routeIs('postgraduationeducationdetails.*') ? 'active' : '' }}"  
                        href="{{ route('postgraduationeducationdetails.index') }}" >Postgraduate Education</a>


            </ul>
        </div>
    </div>
</div>
