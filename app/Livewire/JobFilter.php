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
    public $locations, $reservationcategories;
    public $search;
    public function render()
    {
        $jobs = JobPosting::where('status', 'active')->where('jobPostingLastDate', '>=', Carbon::today())
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
