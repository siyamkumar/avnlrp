<?php

namespace App\Livewire\Admin;

use App\Models\Applicants\GraduationEducationDetail;
use Livewire\Component;

class GraduateEducationValidation extends Component
{
    public GraduationEducationDetail $graduationeducationdetail;
    public function render()
    {
      
        return view('livewire.admin.graduate-education-validation');
    }

    public function valid(){
        $this->graduationeducationdetail->isValid = true;
        $this->graduationeducationdetail->save();
        return $this->dispatch(
            'alert',
            ['status' => 'success',  'message' => 'User Created Successfully!']
        );
    }
    public function invalid(){
        $this->graduationeducationdetail->isValid = false;
        $this->graduationeducationdetail->save();
        return $this->dispatch(
            'alert',
            ['status' => 'success',  'message' => 'User Created Successfully!']
        );
    }
}
