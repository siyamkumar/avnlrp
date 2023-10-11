<?php

namespace App\Livewire;

use App\Models\Applicants\ApplicationReferenceNumber;
use App\Models\Applicants\SecondaryEducationDetail;
use Livewire\Component;

class Arns extends Component
{
    public ApplicationReferenceNumber $arn;

    public SecondaryEducationDetail $secondaryeducationdetail;
    public $reject_summary = '';
    public $shortlist_summary = '';

    
    public function reject()
    {

        // $this->arn->status = 'rejected';
        // $this->arn->reject_remarks = $this->reject_summary;
        // $this->arn->isShortlisted = false;
        // $this->arn->save();
        // return back()->with([
        //     'status' => 'success',
        //     'message' => 'Candidate has been ' . $this->arn->status
        // ]);

    
        $this->dispatch(
            'alert',
            ['status' => 'success',  'message' => 'User Created Successfully!']
        );
    }

    public function shortlist()
    {
        $this->arn->status = 'shortlisted';
        $this->arn->shortlist_summary = $this->shortlist_summary;
        $this->arn->isShortlisted = true;
        $this->arn->save();
        return back()->with([
            'status' => 'success',
            'message' => 'Candidate has been ' . $this->arn->status
        ]);
    }

    

    public function highersecondaryValid()
    {
    }

    public function highersecondaryInvalid()
    {
        dd('secondaryValid');
    }

    public function render()
    {
        return view('livewire.arns');
    }
}
