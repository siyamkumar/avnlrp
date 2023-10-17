<?php

namespace App\Livewire\Admin\Jobs;

use App\Models\JobPosting;
use App\Models\JobPosting\AgeCriteria;
use App\Models\JobPosting\EducationCriteria;
use Livewire\Component;

class Edit extends Component
{
    public JobPosting $jobposting;
    public AgeCriteria $agecriteria;
    public EducationCriteria $educationcriteria;

    public $summary, $minAge, $maxAge, $desiredQualification;
    public $reqEducation = [];

    public function render()
    {
        if ($this->jobposting->educationcriteria) {
            $this->reqEducation = $this->jobposting->educationcriteria->min_qualification;
            $this->desiredQualification = $this->jobposting->educationcriteria->desired_education;
        }

        if ($this->jobposting->agecriteria) {
            $this->minAge = $this->jobposting->agecriteria->minAge;
            $this->maxAge = $this->jobposting->agecriteria->maxAge;
        }

        $this->summary = $this->jobposting->summary ?? '';
        return view('livewire.admin.jobs.edit');
    }

    public function updateSummary()
    {

        $this->jobposting->summary = $this->summary;
        if ($this->jobposting->save())
            return $this->dispatch(
                'alert',
                ['status' => 'success',  'message' => '<b>Summary</b> for the jobposting <b>' . $this->jobposting->jobTitle . '</b> has been updated successfully!']
            );
        else
            return $this->dispatch(
                'alert',
                ['status' => 'error', 'message' => '']
            );
    }

    public function updateAgeCriteria()
    {
        AgeCriteria::updateOrCreate(
            ['job_posting_id' => $this->jobposting->id],
            ['minAge' => $this->minAge, 'maxAge' => $this->maxAge]
        );
        return $this->dispatch(
            'alert',
            ['status' => 'success',  'message' => '<b>Age Criteria</b> for the jobposting <b>' . $this->jobposting->jobTitle . '</b> has been updated successfully!']
        );
    }

    public function updateEducationCriteria()
    {

        EducationCriteria::updateOrCreate(
            ['job_posting_id' => $this->jobposting->id],
            [
                'min_qualification' => $this->reqEducation,
                'desired_education' => $this->desiredQualification
            ],
        );
        return $this->dispatch(
            'alert',
            ['status' => 'success',  'message' => '<b>Education Criteria</b> for the jobposting <b>' . $this->jobposting->jobTitle . '</b> has been updated successfully!']
        );
    }
}
