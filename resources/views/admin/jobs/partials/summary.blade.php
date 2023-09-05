<x-card>

    <h4>Job Summary</h4>

    <form action="{{ route('jobpostings.update', ['jobposting' => $jobposting]) }}" method="POST">
        @csrf @method('patch')
        <textarea name="summary" id="summary" rows="5" class="form-control mb-3">{{ old('summary', $jobposting->summary) }}</textarea>
        @error('summary')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        <button type="submit" class="btn btn-warning"> Update </button>

    </form>


</x-card>
