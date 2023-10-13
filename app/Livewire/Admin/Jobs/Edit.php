<?php

namespace App\Livewire\Admin\Jobs;

use App\Models\JobPosting;
use Livewire\Component;

class Edit extends Component
{
    public JobPosting $jobposting;
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
}
