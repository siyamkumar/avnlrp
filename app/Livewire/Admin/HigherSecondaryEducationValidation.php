<?php

namespace App\Livewire\Admin;

use App\Models\Applicants\HigherSecondaryEducationDetail;
use Livewire\Component;

class HigherSecondaryEducationValidation extends Component
{

    public HigherSecondaryEducationDetail $highersecondaryeducationdetail;
    public function render()
    {
        return view('livewire.admin.higher-secondary-education-validation');
    }

    public function secondaryValid()
    {

        $this->highersecondaryeducationdetail->isValid = true;
        $this->highersecondaryeducationdetail->save();
        return $this->dispatch(
            'alert',
            ['status' => 'success',  'message' => 'User Created Successfully!']
        );
    }

    public function secondaryInvalid()
    {
        $this->highersecondaryeducationdetail->isValid = false;
        $this->highersecondaryeducationdetail->save();
        return $this->dispatch(
            'alert',
            ['status' => 'success',  'message' => 'User Created Successfully!']
        );
    }
}
