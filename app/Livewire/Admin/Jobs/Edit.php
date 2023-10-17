<?php

namespace App\Livewire\Admin\Jobs;

use App\Models\JobPosting;
use App\Models\JobPosting\AgeCriteria;
use Livewire\Component;

class Edit extends Component
{
    public JobPosting $jobposting;
    public AgeCriteria $agecriteria;
    
    public $minAge, $maxAge;
    public $summary;
    public function render()
    {
        $this->summary = $this->jobposting->summary ?? '';
        return view('livewire.admin.jobs.edit');
    }

    public function updateSummary()
    {

        $this->jobposting->summary = $this->summary;
        if ($this->jobposting->save())
            return $this->dispatch(
                'alert',
                ['status' => 'success',  'message' => '<b>Summary</b> for the jobposting <b>'. $this->jobposting->jobTitle. '</b> has been updated successfully!']
            );
            else
            return $this->dispatch(
                'alert',
                ['status' => 'error', 'message' => '']
            );
    }

    public function updateAgeCriteria(){
        AgeCriteria::updateOrCreate(
            ['job_posting_id' => $this->jobposting->id],
            ['minAge' => $this->minAge, 'maxAge' => $this->maxAge]
        );
        return $this->dispatch(
            'alert',
            ['status' => 'success',  'message' => '<b>Age Criteria</b> for the jobposting <b>'. $this->jobposting->jobTitle. '</b> has been updated successfully!']
        );
    }
}
