<?php

namespace App\Livewire;

use App\Models\JobPosting;
use App\Models\LocationUnit;
use App\Models\ReservationCategory;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class JobFilter extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $locationFilter = [];
    public $educationFilter = [];
    public $reservationFilter = [];
    public $locations, $reservationcategories;
    public $experienceMin, $experienceMax;
    public $search;
    public function render()
    {

        $jobs = JobPosting::where(function ($query) {
            $query->where('status', 'active')->where('jobPostingLastDate', '>=', Carbon::today());
            if (!empty($this->locationFilter))
                $query->whereHas('locationunit', function ($q) {
                    $q->wherein('id', $this->locationFilter);
                });

            if (!empty($this->reservationFilter))
                $query->whereHas('reservationvacancyrelaxations', function ($q) {
                    $q->wherein('id', $this->reservationFilter);
                });
            if (!empty($this->experienceMin) || !empty($this->experienceMax)) {
                $query->whereHas('experiencecriteria', function ($q) {
                    if (!empty($this->experienceMin))
                        $q->where('minExp', '>=', $this->experienceMin);
                    if (!empty($this->experienceMax))
                        $q->where('maxExp', '<=', $this->experienceMax);
                });
            }

            if (!empty($this->educationcriteria)) {
                $query->whereHas('educationcriteria', function ($q) {
                    $q->wherein('id', $this->educationFilter);
                });
            }
        })->paginate(10);


        $jobs2 = JobPosting::where('status', 'active')->where('jobPostingLastDate', '>=', Carbon::today())
            ->where('jobTitle', 'like', "%{$this->search}")
            ->whereHas('locationunit', function ($q) {
                if (!empty($this->locationFilter)) {
                    $q->wherein('id', $this->locationFilter);
                }
            })
            // ->whereHas('educationcriteria', function ($q) {
            //     if (!empty($this->educationFilter)) {
            //         $q->wherein('id', $this->educationFilter);
            //     }
            // })
            ->whereHas('experiencecriteria', function ($q) {
                if (!empty($this->experienceMin))
                    $q->where('minExp', '>=', $this->experienceMin);
                if (!empty($this->experienceMax))
                    $q->where('maxExp', '<=', $this->experienceMax);
            })
            ->paginate(10);
        // if ($search) {
        //     $jobs = JobPosting::where('status', 'active')->where('jobPostingLastDate', '>=', Carbon::today())->where('jobTitle', 'like', "%{$search}")->paginate(10);
        // }

        $this->locations = LocationUnit::all();
        $this->reservationcategories = ReservationCategory::orderBy('name', 'asc')->get();

        return view('livewire.job-filter', compact('jobs'));
    }

    public function clearSearch()
    {
        $this->reset();
    }

    public function processFilter()
    {
        dd($this->locationFilter);
        // $jobs = JobPosting::whereHas('locationunit', function ($q) {
        //     $q->where('id', $this->locationFilter);
        // })->get();
    }
}
