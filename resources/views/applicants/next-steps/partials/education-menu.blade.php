<div class="card shadow-none border border-300 mb-3 ">

    <div class="card-body p-0">

        <div class="px-4 py-3">
            <ul class="nav nav-underline" id="myTab" role="tablist">
                <li class="nav-item text-center" role="presentation">

                    <x-icons.checkok />
                    <a class="nav-link pt-0 {{ request()->routeIs('jobapplication.secondaryeducationdetails.*') ? 'active' : '' }}"
                        href="{{ route('jobapplication.secondaryeducationdetails.index',$jobapplication) }}">Secondary Education</a>

                </li>
                <li class="nav-item text-center" role="presentation">
                    <x-icons.checkpartial />
                    <a class="nav-link pt-0 {{ request()->routeIs('jobapplication.highersecondaryeducationdetails.*') ? 'active' : '' }}"
                        href="{{ route('jobapplication.highersecondaryeducationdetails.index',$jobapplication) }}">Higher Secondary Education</a>
                </li>

                <li class="nav-item text-center" role="presentation">
                    <x-icons.checknotok />
                    <a class="nav-link pt-0 {{ request()->routeIs('itidiplomadetails.*') ? 'active' : '' }}" id="qualification-tab" data-bs-toggle="tab" 
                        href="{{ route('itidiplomadetails.index' ,$jobapplication) }}"
                        role="tab" aria-selected="false">ITI/Diploma Education</a>
                </li>

                <li class="nav-item text-center" role="presentation">
                    <x-icons.checknotok />
                    <a class="nav-link pt-0 {{ request()->routeIs('jobapplication.graduationeducationdetails.*') ? 'active' : '' }}" href="{{ route(
                        'jobapplication.graduationeducationdetails.index',$jobapplication) }}"
                       >Undergraduate Education</a>
                </li>

                <li class="nav-item text-center" >
                    <x-icons.checknotok />
                    <a class="nav-link pt-0 {{ request()->routeIs('jobapplication.postgraduationeducationdetails.*') ? 'active' : '' }}"  
                        href="{{ route('jobapplication.postgraduationeducationdetails.index',$jobapplication) }}" >Postgraduate Education</a>


            </ul>
        </div>
    </div>
</div>
