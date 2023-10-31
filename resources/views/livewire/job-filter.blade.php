 <main class="main-container container mt-3">



     <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis ">
         <div class="">
             <h1 class="display-6 fw-bold text-center">Job Openings</h1>
         </div>
     </div>

     <div class="row g-5">
         @php
             $user =
                 auth()
                     ->guard('applicants')
                     ->user() ?? null;
         @endphp


         <div class="col-md-3 mb-3">
             <div class="position-sticky" style="top: 11vh;">
                 {{-- <h4 class="fw-bold">Job Filters</h4> --}}
                 <div class="filter-card p-3 mb-3">
                     <h5 class="border-bottom pb-3">Location</h5>

                     @foreach ($locations as $location)
                         <div class="d-flex justify-content-between">
                             <div class="form-check">
                                 <input class="form-check-input" type="checkbox" value="{{ $location->id }}"
                                     wire:model.live="locationFilter" id="{{ $location->unit_code }}">
                                 <label class="form-check-label" for="{{ $location->unit_code }}">
                                     {{ $location->unit_name }}, {{ $location->address }}
                                 </label>

                             </div>
                             <div>
                                 <span class="badge badge-ultra-violet">
                                     {{ count($location->jobpostings()->where('status', 'active')->where('jobPostingLastDate', '>=', Carbon::today())->get()) }}
                                 </span>
                             </div>
                         </div>
                     @endforeach




                 </div>


                 <div class="filter-card p-3 mb-3">
                     <h5 class="border-bottom pb-3">Reservation Category</h5>
                     @foreach ($reservationcategories as $reservationcategory)
                         <div class="form-check">
                             <input class="form-check-input" type="checkbox" value="{{ $reservationcategory->id }}"
                                 wire:model.live='reservationFilter' id="{{ $reservationcategory->id }}">
                             <label class="form-check-label" for="{{ $reservationcategory->id }}">
                                 {{ $reservationcategory->name }} ({{ $reservationcategory->code }})
                             </label>
                         </div>
                     @endforeach




                 </div>

                 <div class="filter-card p-3 mb-3">
                     <h5 class="border-bottom pb-3">Education</h5>
                     <div class="form-check">
                         <input class="form-check-input" type="checkbox" value="" id="education1"
                             wire:model.live="educationFilter">
                         <label class="form-check-label" for="education1">
                             Any Graduate
                         </label>
                     </div>
                     <div class="form-check">
                         <input class="form-check-input" type="checkbox" value="" id="education2"
                             wire:model.live="educationFilter">
                         <label class="form-check-label" for="education2">
                             Post Graduate
                         </label>
                     </div>

                     <div class="form-check">
                         <input class="form-check-input" type="checkbox" value="" id="education3"
                             wire:model.live="educationFilter">
                         <label class="form-check-label" for="education3" wire:model.live="educationFilter">
                             Under Graduate
                         </label>
                     </div>

                     <div class="form-check">
                         <input class="form-check-input" type="checkbox" value="" id="education4"
                             wire:model.live="educationFilter">
                         <label class="form-check-label" for="education4" wire:model.live="educationFilter">
                             No degree
                         </label>
                     </div>

                 </div>

                 <div class="filter-card p-3">
                     <h5 class="pb-3">Experience</h5>
                     <div class="d-flex align-items-center gap-3">

                         <input class="form-control" wire:model.live="experienceMin" type="number" placeholder="Min"
                             min=0>
                         - <input type="number" class="form-control" wire:model.live="experienceMax" placeholder="Max"
                             min=0>
                     </div>


                 </div>


             </div>
         </div>
         <div class="col-md-9">
             <div wire:loading>
                 <div class="loader ">
                     <div class="position-absolute top-50 start-50  ">
                         <div class="spinner-border" role="status">

                         </div>
                     </div>
                 </div>
             </div>

             @foreach ($locations as $location)
                 @if (in_array($location->id, $locationFilter))
                     <div
                         class="d-inline-flex mb-3 px-2 py-1 fw-semibold text-success-emphasis bg-success-subtle border border-success-subtle rounded-0 filter-checkbox">
                         <label for="{{ $location->unit_code }}">

                             {{ $location->unit_name }} <span class="ms-2 btn-close"></span></label>
                         <input type="checkbox" wire:model.live='locationFilter' value="{{ $location->id }}"
                             class="" id="{{ $location->unit_code }}">
                     </div>
                 @endif
             @endforeach

             @foreach ($reservationcategories as $reservationcategory)
                 @if (in_array($reservationcategory->id, $reservationFilter))
                     <div
                         class="d-inline-flex mb-3 px-2 py-1 fw-semibold text-info-emphasis bg-info-subtle border border-success-subtle rounded-0 filter-checkbox">
                         <label for="{{ $reservationcategory->id }}">

                             {{ $reservationcategory->code }} <span class="ms-2 btn-close"></span></label>
                         <input type="checkbox" wire:model.live='reservationFilter' class=""
                             id="{{ $reservationcategory->id }}">
                     </div>
                 @endif
             @endforeach



             @if (count($jobs) > 0)
                 @foreach ($jobs as $job)
                     {{-- @if ($user->arns) --}}
                     <div class="card bg-light border-0 mb-4 job-list-card rounded-0">
                         <a href="{{ route('jobs.show', $job) }}" class="job-list-card-link">
                             <div class="card-body p-4">

                                 <div class="d-flex justify-content-between align-items-center gap-2">
                                     <div class="d-flex align-items-center gap-2">
                                         <div>
                                             <x-icons.location />

                                             {{ $job->locationunit->unit_name }}
                                         </div>

                                         @if ($job->isContract)
                                             <div class="border p-1 rounded-3 border-primary"><small>Fixed
                                                     Contract</small>
                                             </div>
                                         @endif
                                     </div>

                                     <div>
                                         @if ($user)
                                             @if (array_search($job->id, array_column($user->jobapplications->toArray(), 'job_posting_id')))
                                                 <small
                                                     class="d-inline-flex  px-2 py-1 fw-semibold text-success-emphasis bg-success-subtle border border-success-subtle rounded-2">You
                                                     already applied for this job.</small>
                                             @endif
                                         @endif
                                     </div>


                                 </div>

                                 <div class="row ">
                                     <div class="col-12">
                                         <h2 class="job-title">
                                             {{ $job->jobTitle }}
                                         </h2>
                                         <p>
                                             {{ $job->summary }}
                                         </p>

                                         <div class="row align-items-center">
                                             <div class="col-6 mb-3">
                                                 <div class="d-flex align-items-center">
                                                     <svg viewBox="0 0 1024 1024" class="icon me-2" version="1.1"
                                                         xmlns="http://www.w3.org/2000/svg" fill="#000000"
                                                         width="32">
                                                         <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                         <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                             stroke-linejoin="round"></g>
                                                         <g id="SVGRepo_iconCarrier">
                                                             <path
                                                                 d="M716 190.9v-67.8h-44v67.8H352v-67.8h-44v67.8H92v710h840v-710H716z m-580 44h172v69.2h44v-69.2h320v69.2h44v-69.2h172v151.3H136V234.9z m752 622H136V402.2h752v454.7z"
                                                                 fill="#39393A"></path>
                                                             <path
                                                                 d="M319 565.7m-33 0a33 33 0 1 0 66 0 33 33 0 1 0-66 0Z"
                                                                 fill="#E73B37"></path>
                                                             <path
                                                                 d="M510 565.7m-33 0a33 33 0 1 0 66 0 33 33 0 1 0-66 0Z"
                                                                 fill="#E73B37"></path>
                                                             <path
                                                                 d="M701.1 565.7m-33 0a33 33 0 1 0 66 0 33 33 0 1 0-66 0Z"
                                                                 fill="#E73B37"></path>
                                                             <path
                                                                 d="M319 693.4m-33 0a33 33 0 1 0 66 0 33 33 0 1 0-66 0Z"
                                                                 fill="#E73B37"></path>
                                                             <path
                                                                 d="M510 693.4m-33 0a33 33 0 1 0 66 0 33 33 0 1 0-66 0Z"
                                                                 fill="#E73B37"></path>
                                                             <path
                                                                 d="M701.1 693.4m-33 0a33 33 0 1 0 66 0 33 33 0 1 0-66 0Z"
                                                                 fill="#E73B37"></path>
                                                         </g>
                                                     </svg>
                                                     Tenure : {{ $job->tenure }} Years
                                                 </div>
                                             </div>
                                             <div class="col-6 mb-3">
                                                 <div class="d-flex align-items-center">

                                                     <svg fill="#000000" class="icon me-2" viewBox="0 0 30 30"
                                                         xmlns="http://www.w3.org/2000/svg" width="26">
                                                         <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                         <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                             stroke-linejoin="round"></g>
                                                         <g id="SVGRepo_iconCarrier">
                                                             <path
                                                                 d="M10.5 2C9.678 2 9 2.678 9 3.5v2c0 .67 1.01.66 1 0v-2c0-.286.214-.5.5-.5h9c.286 0 .5.214.5.5v2c0 .66 1 .67 1 0v-2c0-.822-.678-1.5-1.5-1.5zm16.992 7c-.148 0-.285.058-.373.178l-5.5 6.5c-.46.542-.755.884-1.02 1.064-.166.113-.36.174-.6.213V16.5c0-.277-.223-.5-.5-.5s-.5.223-.5.5v.5h-8v-.5c0-.277-.223-.5-.5-.5s-.5.223-.5.5v.455c-.24-.04-.434-.1-.6-.213-.265-.18-.56-.522-1.02-1.064l-5.5-6.5c-.096-.118-.227-.18-.38-.178-.42 0-.66.502-.38.822l5.5 6.5c.454.538.777.946 1.218 1.246.328.223.707.353 1.162.405v.527c0 .277.223.5.5.5s.5-.223.5-.5V18h8v.5c0 .277.223.5.5.5s.5-.223.5-.5v-.527c.455-.052.834-.182 1.162-.405.44-.3.764-.708 1.22-1.246l5.5-6.5c.27-.272.04-.822-.39-.822zM1.5 7C.678 7 0 7.678 0 8.5v18c0 .822.678 1.5 1.5 1.5h27c.822 0 1.5-.678 1.5-1.5v-18c0-.822-.678-1.5-1.5-1.5zm0 1h27c.286 0 .5.214.5.5v18c0 .286-.214.5-.5.5h-27c-.286 0-.5-.214-.5-.5v-18c0-.286.214-.5.5-.5z">
                                                             </path>
                                                         </g>
                                                     </svg>

                                                     Experience : @if ($job->experiencecriteria)
                                                         {{ $job->experiencecriteria->minExp }} -
                                                         {{ $job->experiencecriteria->maxExp }} Years
                                                     @else
                                                         <span class="text-muted">Not defined</span>
                                                     @endif
                                                 </div>
                                             </div>
                                             <div class="col-6 mb-3">
                                                 <div class="d-flex align-items-center">

                                                     <svg viewBox="0 0 24 24" class="icon me-2" width="26"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                         <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                         <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                             stroke-linejoin="round"></g>
                                                         <g id="SVGRepo_iconCarrier">
                                                             <circle cx="12" cy="9" r="3"
                                                                 stroke="#1C274C" stroke-width="0.744"></circle>
                                                             <path
                                                                 d="M17.9691 20C17.81 17.1085 16.9247 15 11.9999 15C7.07521 15 6.18991 17.1085 6.03076 20"
                                                                 stroke="#1C274C" stroke-width="0.744"
                                                                 stroke-linecap="round">
                                                             </path>
                                                             <path
                                                                 d="M7 3.33782C8.47087 2.48697 10.1786 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 10.1786 2.48697 8.47087 3.33782 7"
                                                                 stroke="#1C274C" stroke-width="0.744"
                                                                 stroke-linecap="round">
                                                             </path>
                                                         </g>
                                                     </svg>
                                                     No of Vacancies : {{ $job->vacancy }}
                                                 </div>
                                             </div>

                                             <div class="col-6 mb-3">
                                                 <div class="d-flex align-items-center">


                                                     <svg fill="#000000" viewBox="0 0 64 64" class="icon me-2"
                                                         width="26" xmlns="http://www.w3.org/2000/svg">
                                                         <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                         <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                             stroke-linejoin="round"></g>
                                                         <g id="SVGRepo_iconCarrier">
                                                             <g id="Outline">
                                                                 <g data-name="Outline" id="Outline-2">
                                                                     <path
                                                                         d="M41,29a1,1,0,0,1-1,1H37.3a7,7,0,0,1-6.92,6H27l4.8,6.4a1,1,0,0,1-1.6,1.2l-5.91-7.89A1.013,1.013,0,0,1,25,34h5.38a5.009,5.009,0,0,0,4.9-4H25a1,1,0,0,1,0-2H35.28a5.009,5.009,0,0,0-4.9-4H25a1,1,0,0,1,0-2H40a1,1,0,0,1,0,2H35.26a6.922,6.922,0,0,1,2.04,4H40A1,1,0,0,1,41,29Z">
                                                                     </path>
                                                                     <path
                                                                         d="M32,2A30,30,0,1,0,62,32,30.034,30.034,0,0,0,32,2Zm0,58A28,28,0,1,1,60,32,28.032,28.032,0,0,1,32,60Z">
                                                                     </path>
                                                                     <path
                                                                         d="M49.229,18.351a3.127,3.127,0,0,0,.426-1.558,3.172,3.172,0,1,0-3.173,3.172,3.138,3.138,0,0,0,1.264-.266A19.994,19.994,0,0,1,22.691,49.707a1,1,0,1,0-.931,1.769A21.986,21.986,0,0,0,49.229,18.351Zm-3.918-1.558a1.172,1.172,0,1,1,1.171,1.172A1.172,1.172,0,0,1,45.311,16.793Z">
                                                                     </path>
                                                                     <path
                                                                         d="M16.793,44.035a3.157,3.157,0,0,0-.692.081A19.779,19.779,0,0,1,12,32,20.023,20.023,0,0,1,32,12a19.811,19.811,0,0,1,8.463,1.874,1,1,0,0,0,.848-1.812A21.989,21.989,0,0,0,14.39,45.16a3.141,3.141,0,0,0-.769,2.047,3.173,3.173,0,1,0,3.172-3.172Zm0,4.344a1.172,1.172,0,1,1,1.173-1.172A1.172,1.172,0,0,1,16.793,48.379Z">
                                                                     </path>
                                                                 </g>
                                                             </g>
                                                         </g>
                                                     </svg>
                                                     Renumeration : <x-currency-format :amount="$job->renumeration" />
                                                 </div>
                                             </div>

                                         </div>

                                     </div>




                                 </div>

                             </div>
                         </a>
                     </div>
                 @endforeach
             @else
                 <div class="alert alert-info" role="alert">
                     No jobs found matching the selected criteria.
                     <a wire:click="clearSearch()" class="alert-link" href="#">Clear Search</a>

                 </div>

             @endif

             {{ $jobs->links() }}
         </div>


     </div>

 </main
