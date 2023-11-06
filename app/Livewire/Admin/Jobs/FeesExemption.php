<?php

namespace App\Livewire\Admin\Jobs;

use App\Models\FeesExemption as ModelsFeesExemption;
use App\Models\JobPosting;
use App\Models\ReservationCategory;
use Livewire\Component;

class FeesExemption extends Component
{
    public JobPosting $jobposting;
    public  ModelsFeesExemption $feesexemption;

    public $exemptedfees, $reservation_category_id;

    
    public $reservationcategories;
    public function render()
    {
        $this->reservationcategories = ReservationCategory::all();
        return view('livewire.admin.jobs.fees-exemption');
    }

    public function addFeesExemption(){
        ModelsFeesExemption::updateOrCreate([
            'job_posting_id' => $this->jobposting->id,
            'reservation_category_id' => $this->reservation_category_id,

        ], ['exemptedfees' => $this->exemptedfees]);
        $this->reset('exemptedfees');
        $this->reset('reservation_category_id');
        return $this->dispatch(
            'alert',
            ['status' => 'success',  'message' => '<b>Fees exemption</b> for the reservation category <b>' . $this->reservation_category_id  .'</b> jobposting <b>' . $this->jobposting->jobTitle . '</b> has been <b>added</b> successfully!']
        );
    }
}
