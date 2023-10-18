<?php

namespace App\Livewire\Admin\Jobs;

use App\Models\JobPosting;
use App\Models\JobPosting\ReservationAgeRelaxation;
use App\Models\JobPosting\ReservationVacancyRelaxation;
use App\Models\ReservationCategory;
use Livewire\Component;

class Vacancy extends Component
{

    public JobPosting $jobposting;
    public  ReservationVacancyRelaxation $reservationvacancyrelaxation;

    public $reservationcategories, $vacancyleft, $totalVacancy, $vacancyalloted;

    public $reservation_category_id;
    public $canAdd;
    public function render()
    {
        $rvr = ReservationVacancyRelaxation::where('job_posting_id', $this->jobposting->id)->get();
        $this->totalVacancy = 0;
        foreach ($rvr as $r) {
            $this->totalVacancy += $r->vacancy;
        }
        $this->vacancyleft = $this->jobposting->vacancy - $this->totalVacancy;
        if ($this->jobposting->vacancy == $this->totalVacancy)
            $this->canAdd = false;
        else
            $this->canAdd = true;
        $this->reservationcategories = ReservationCategory::all();
        return view('livewire.admin.jobs.vacancy');
    }

    public function addVacancy()
    {
        ReservationVacancyRelaxation::updateOrCreate([
            'job_posting_id' => $this->jobposting->id,
            'reservation_category_id' => $this->reservation_category_id,

        ], ['vacancy' => $this->vacancyalloted]);
        $this->reset('vacancyalloted');
        $this->reset('reservation_category_id');
        return $this->dispatch(
            'alert',
            ['status' => 'success',  'message' => '<b>Vacancy Relaxation</b> for the jobposting <b>' . $this->jobposting->jobTitle . '</b> has been <b>added</b> successfully!']
        );
    }

    public function deleteVacancy(ReservationVacancyRelaxation $reservationvacancyrelaxation)
    {
        $reservationvacancyrelaxation->delete();
        return $this->dispatch(
            'alert',
            ['status' => 'success',  'message' => '<b>Vacancy Relaxation</b> for the jobposting <b>' . $this->jobposting->jobTitle . '</b> has been <b>deleted</b> successfully!']
        );
    }
}
