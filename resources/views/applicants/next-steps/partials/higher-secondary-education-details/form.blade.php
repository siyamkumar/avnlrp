<div class="row mt-3 mb-3 g-3 border-bottom pb-3">

    <div class="col-md-6">
        <label for="schoolTwelveth" class="form-label">Name of School<x-icons.required-field/></label>
        <input type="text" class="form-control  @error('school_name') is-invalid @enderror" id="school_name"
            name="school_name" value="{{ old('school_name', $highersecondaryeducationdetail->school_name ?? '') }}" placeholder="Name of the school">
        @error('school_name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="col-md-6">
        <label for="boardTwelveth" class="form-label">Name of Board</label>
        <input type="text" class="form-control  @error('school_board') is-invalid @enderror" id="school_board"
            name="school_board" placeholder=" Board Name" value="{{ old('school_board', $highersecondaryeducationdetail->school_board ?? '') }}">
        @error('school_board')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="col-md-4">
        <label for="yearTwelveth" class="form-label">Year of Passing</label>
        <input type="text" class="form-control  @error('year_of_passing') is-invalid @enderror"
            id="year_of_passing" name="year_of_passing" placeholder="Year" value="{{ old('year_of_passing', $highersecondaryeducationdetail->year_of_passing ?? '') }}">
        @error('year_of_passing')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="col-md-4">
        <label for="marksTwelveth" class="form-label">Percentage of Marks(%)/CGPA</label>
        <input type="text" class="form-control  @error('score') is-invalid @enderror" id="score" name="score"
            placeholder="% of marks obtained" value="{{ old('score', $highersecondaryeducationdetail->score?? '')}}">
        @error('score')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="col-md-4">
        <label for="highersecondaryMarksheet" class="form-label"> Certificate Upload <x-icons.required-field/> </label>
        <div class="form-text">
           Upload only PDF or Jpeg files less than 5MB
        </div>
        <input id="highersecondaryMarksheet" type="file" name="highersecondaryMarksheet"
            class="filepond  @error('highersecondaryMarksheet') is-invalid @enderror" />
        @error('highersecondaryMarksheet')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    

    
</div>
