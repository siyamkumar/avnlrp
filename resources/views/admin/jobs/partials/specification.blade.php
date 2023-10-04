<h4 class="pb-3 border-bottom">Job Specification/Requirement</h4>

{{-- <div class="mb-3">
    <textarea class="form-control" id="" rows="3"></textarea>
</div>


<div class="mb-3">
    <textarea class="form-control" id="" rows="3"></textarea>
</div>
<button type="submit" class="btn btn-primary mb-3">Save</button> --}}

<form action="{{ route('jobpostings.jobrequirement.update',[$jobposting, $jobposting->jobrequirement])  }}" method="POST">
    @csrf @method('patch')
    <div class="row">
                              
        <div class="col-md-6 mb-3">
            <label class="col-form-label" for="jobSpecification">Job Specification</label>
            <textarea name="jobSpecification" id="jobSpecification" class="form-control" placeholder="Please enter Job Requirement">{{ old('jobSpecification') }}</textarea>
        </div>

        <div class="col-md-6 mb-3">

            <label class="col-form-label" for="jobKnowledge">Knowledge</label>

            <textarea name="jobKnowledge" id="jobKnowledge" cols="30" class="form-control"
                placeholder="Please enter Job Knowledge">{{ old('jobKnowledge') }}</textarea>
        </div>

        <div class="col-md-6 mb-3">

            <label class="col-form-label" for="jobSkillCompetency">Skills</label>

            <textarea name="jobSkillCompetency" id="jobSkillCompetency" cols="30" class="form-control"
                placeholder="Please enter Skill Competency">{{ old('jobSkillCompetency') }}</textarea>
        </div>

        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>

    </div>
    <button type="submit" class="btn btn-warning"> Update </button>

</form>


