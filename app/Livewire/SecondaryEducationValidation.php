<?php

namespace App\Livewire;

use App\Models\Applicants\SecondaryEducationDetail;
use Livewire\Component;

class SecondaryEducationValidation extends Component
{

    public SecondaryEducationDetail $secondaryeducationdetail;
    public function render()
    {
        return view('livewire.secondary-education-validation');
    }

    public function secondaryValid()
    {

        $this->secondaryeducationdetail->isValid = true;
        $this->secondaryeducationdetail->save();
        return $this->dispatch(
            'alert',
            ['status' => 'success',  'message' => 'User Created Successfully!']
        );
    }

    public function secondaryInvalid()
    {
        $this->secondaryeducationdetail->isValid = false;
        $this->secondaryeducationdetail->save();
        return $this->dispatch(
            'alert',
            ['status' => 'success',  'message' => 'User Created Successfully!']
        );
    }
}
