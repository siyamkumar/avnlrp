<?php

use App\Http\Controllers\Admin\ARNController;
use App\Http\Controllers\Admin\CandidatesController;
use App\Http\Controllers\Admin\JobsController;
use App\Http\Controllers\Applicants\ApplicantController;
use App\Http\Controllers\Applicants\EducationController;
use App\Http\Controllers\Applicants\ExperienceController;
use App\Http\Controllers\Applicants\GraduationEducationController;
use App\Http\Controllers\Applicants\HigherSecondaryEducationController;
use App\Http\Controllers\Applicants\JobApplicataionsController;
use App\Http\Controllers\Applicants\JobApplyController;
use App\Http\Controllers\Applicants\NextStepsController;
use App\Http\Controllers\Applicants\PersonalDetailsController;
use App\Http\Controllers\Applicants\PostGraduationEducationController;
use App\Http\Controllers\Applicants\SecondaryEducationController;
use App\Http\Controllers\Applicants\ItiDiplomaDetailsController;
use App\Http\Controllers\Applicants\StatusController;
use App\Http\Controllers\Applicants\ApplicationReferenceNumberController;
use App\Http\Controllers\AuthOTPController;
use App\Http\Controllers\CandidateSessionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\JobPosting\ActiveJobPostingController;
use App\Http\Controllers\JobPosting\AgeCriteriaController;
use App\Http\Controllers\JobPosting\AgeRelaxationController;
use App\Http\Controllers\JobPosting\DraftJobPostingController;
use App\Http\Controllers\JobPosting\EducationCriteriaController;
use App\Http\Controllers\JobPosting\ExperienceCriteriaController;
use App\Http\Controllers\JobPosting\ReservationVacancyController;
use App\Http\Controllers\JobPostingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicJobPostingController;
use App\Models\Applicants\GraduationEducationDetail;


use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomepageController::class)->name('home');
Route::get('/application-status', StatusController::class)->name('applicationstatus');
Route::get('/job-openings', function () {
    return view('applicants.jobopenings');
})->name('alljobs');


Route::post('/job-openings/details/apply', [ApplicantController::class, 'store'])->name('applicantregister');
Route::get('/job-updates', function () {
    return view('applicants.jobupdates');
})->name('jobupdates');

// ->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/admin', function () {
        return redirect()->route('dashboard');
    });
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', DashboardController::class)->name('dashboard');
        Route::resource('jobpostings', JobPostingController::class);
        Route::resource('jobpostings.agecriteria', AgeCriteriaController::class)->only(['store', 'update']);
        Route::get('jobpostings/{jobposting}/eligibility', function(){
            return  view('admin.jobs.partials.eligibility');
        })->name('jobpostings.eligibility');
        Route::resource('jobpostings.agerelaxation', AgeRelaxationController::class)->only(['store', 'update']);
        Route::resource('jobpostings.vacancy', ReservationVacancyController::class)->only(['store', 'update']);
        Route::resource('jobpostings.educationcriteria', EducationCriteriaController::class)->only(['store', 'update']);
        Route::resource('jobpostings.experiencecriteria', ExperienceCriteriaController::class)->only(['store', 'update']);

        Route::get('/jobs/drafts/', DraftJobPostingController::class)->name('jobpostings.drafts');
        Route::get('/jobs/active/', ActiveJobPostingController::class)->name('jobpostings.active');
        
        Route::resource('candidates', CandidatesController::class);
        Route::resource('arn',ARNController::class)->only(['show']);
    });
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// CANDIDATE LOGINS
Route::get('/candidate-register', function () {
    return view('applicants.jobapply');
})->name('candidateregister');
Route::get('/candidate-login', [CandidateSessionController::class, 'create'])->name('candidateLogin');
Route::post('candidatelogin', [CandidateSessionController::class, 'store'])->name('candidatelogin');


Route::middleware('candidateAuth')->group(function () {

    Route::get('/my-profile', NextStepsController::class)->name('candidateprofile');
    route::resource('jobapplication', JobApplicataionsController::class);
    Route::resource('personaldetails', PersonalDetailsController::class)->except(['index', 'destroy']);
    Route::resource('jobapplication.secondaryeducationdetails', SecondaryEducationController::class)->except(['index', 'destroy']);
    Route::resource('jobapplication.highersecondaryeducationdetails', HigherSecondaryEducationController::class)->except(['index', 'destroy']);
    Route::resource('jobapplication.graduationeducationdetails', GraduationEducationController::class);
    Route::resource('jobapplication.postgraduationeducationdetails', PostGraduationEducationController::class);
    Route::resource('jobapplication.experiencedetails', ExperienceController::class);
    Route::resource('jobapplication.paymentdetails',ApplicationReferenceNumberController ::class);
    Route::post('job-apply/{job}', JobApplyController::class)->name('jobapply');
    Route::post('candidate-logout', [CandidateSessionController::class, 'destroy'])
        ->name('candidatelogout');
    Route::get('education-details', EducationController::class)->name('educationdetails');

});

Route::controller(AuthOTPController::class)->group(function () {
    // Route::post('/verify/{candidate}', 'verify')->name('otp.verify');
    Route::get('/otp/login', 'login')->name('otp.login');
    Route::post('/otp/generate', 'generate')->name('otp.generate');
    Route::get('/otp/verification/{candidate_id}', 'verification')->name('otp.verification');
    Route::post('/otp/login', 'loginWithOtp')->name('otp.getlogin');
    Route::post('candidate-logout', [CandidateSessionController::class, 'destroy'])
        ->name('candidatelogout');   
});

Route::get('template',function(){
    return view('email-template');
});
  
Route::resource('jobs', PublicJobPostingController::class)->only(['index', 'show']);

require __DIR__ . '/auth.php';
