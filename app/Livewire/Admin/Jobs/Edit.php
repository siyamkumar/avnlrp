<?php

namespace App\Livewire\Admin\Jobs;

use App\Models\JobPosting;
use App\Models\JobPosting\AgeCriteria;
use App\Models\JobPosting\EducationCriteria;
use App\Models\JobPosting\ExperienceCriteria;
use App\Models\JobPosting\JobRequirement;
use App\Models\JobPosting\JobResponsibility;
use App\Models\JobPosting\TermsCondition;
use Livewire\Component;

class Edit extends Component
{
    public JobPosting $jobposting;
    public AgeCriteria $agecriteria;
    public EducationCriteria $educationcriteria;
    public ExperienceCriteria $experiencecriteria;
    public JobRequirement $jobrequirement;
    public JobResponsibility $jobresponsibility;
    public TermsCondition $termscondition;

    public $summary, $minAge, $maxAge, $desiredQualification,
        $minExp, $maxExp, $desiredExperience,
        $jobSpecification, $knowledge, $skills,
        $jobResponsibility, $terms;
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

        if ($this->jobposting->experiencecriteria) {
            $this->minExp = $this->jobposting->experiencecriteria->minExp;
            $this->maxExp = $this->jobposting->experiencecriteria->maxExp;
            $this->desiredExperience =  $this->jobposting->experiencecriteria->desiredExperience;
        }

        if ($this->jobposting->jobrequirement) {
            $this->jobSpecification = $this->jobposting->jobrequirement->job_specification;
            $this->knowledge = $this->jobposting->jobrequirement->knowledge;
            $this->skills = $this->jobposting->jobrequirement->skills;
        }

        if ($this->jobposting->jobresponsibility) {
            $this->jobResponsibility = $this->jobposting->jobresponsibility->job_responsibility;
        }
        if($this->jobposting->termscondition){
            $this->terms = $this->jobposting->termscondition->job_terms;
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

    public function updateExperienceCriteria()
    {
        ExperienceCriteria::updateOrCreate(
            ['job_posting_id' => $this->jobposting->id],
            [
                'minExp' => $this->minExp,
                'maxExp' => $this->maxExp,
                'desiredExperience' => $this->desiredExperience,
            ]
        );
        return $this->dispatch(
            'alert',
            ['status' => 'success',  'message' => '<b>Experience Criteria</b> for the jobposting <b>' . $this->jobposting->jobTitle . '</b> has been updated successfully!']
        );
    }

    public function updateRequirement()
    {
        JobRequirement::updateOrCreate(
            ['job_posting_id' => $this->jobposting->id],
            [
                'job_specification' => $this->jobSpecification,
                'knowledge' => $this->knowledge,
                'skills' => $this->skills,
            ]
        );
        return $this->dispatch(
            'alert',
            ['status' => 'success',  'message' => '<b>Job requirement</b> for the jobposting <b>' . $this->jobposting->jobTitle . '</b> has been updated successfully!']
        );
    }

    public function updateJobResponsibility()
    {
        JobResponsibility::updateOrCreate(
            [
                'job_posting_id' => $this->jobposting->id
            ],
            ['job_responsibility' => $this->jobResponsibility]
        );
        return $this->dispatch(
            'alert',
            ['status' => 'success',  'message' => '<b>Job Responsibility</b> for the jobposting <b>' . $this->jobposting->jobTitle . '</b> has been updated successfully!']
        );
        
    }

    public function updateTerms()
    {
        TermsCondition::updateOrCreate(
            ['job_posting_id' => $this->jobposting->id],
            ['job_terms' => $this->terms]
        );

        return $this->dispatch(
            'alert',
            ['status' => 'success',  'message' => '<b>Job Terms & Condition</b> for the jobposting <b>' . $this->jobposting->jobTitle . '</b> has been updated successfully!']
        );
    }
}
