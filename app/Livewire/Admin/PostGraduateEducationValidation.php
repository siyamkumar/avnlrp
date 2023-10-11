<?php

namespace App\Livewire\Admin;

use App\Models\Applicants\PostGraduationEducationDetail;
use Livewire\Component;

class PostGraduateEducationValidation extends Component
{
    public PostGraduationEducationDetail $postgraduationeducationdetail;
    public function render()
    {
        return view('livewire.admin.post-graduate-education-validation');
    }

    public function valid(){
        $this->postgraduationeducationdetail->isValid = true;
        $this->postgraduationeducationdetail->save();
        return $this->dispatch(
            'alert',
            ['status' => 'success',  'message' => 'User Created Successfully!']
        );
    }
    public function invalid(){
        $this->postgraduationeducationdetail->isValid = false;
        $this->postgraduationeducationdetail->save();
        return $this->dispatch(
            'alert',
            ['status' => 'success',  'message' => 'User Created Successfully!']
        );
    }
}
