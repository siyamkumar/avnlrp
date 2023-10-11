<?php

namespace App\Livewire\Admin;

use App\Models\Applicants\ExperienceDetail;
use Livewire\Component;

class ExperienceValidation extends Component
{
    public ExperienceDetail $experiencedetail;
    public function render()
    {
        return view('livewire.admin.experience-validation');
    }

    public function valid(){
        $this->experiencedetail->isValid = true;
        $this->experiencedetail->save();
        return $this->dispatch(
            'alert',
            ['status' => 'success',  'message' => 'User Created Successfully!']
        );
    }
    public function invalid(){
        $this->experiencedetail->isValid = false;
        $this->experiencedetail->save();
        return $this->dispatch(
            'alert',
            ['status' => 'success',  'message' => 'User Created Successfully!']
        );
    }
}
