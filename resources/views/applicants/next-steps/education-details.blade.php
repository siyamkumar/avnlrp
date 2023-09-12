<x-candidate-layout>

    <x-slot name="candidateheader">
        <h2 class="">
            {{ __('Education Details') }}
        </h2>

    </x-slot>


    @include('applicants.next-steps.partials.education-menu')


    <div>
        <table class="table border-top ">
            <thead>

                <tr>

                    <th>Qualification</th>
                    <th>% of marks obtained/CGPA</th>
                    <th>Year of Passing</th>
                    <th>Name of School/College</th>
                    <th>Affiliated institute/university</th>
                </tr>

            </thead>

            <tbody>
                @if (isset($secondaryeducationdetails))
                    <tr>
                        <td>10th / Secondary</td>
                        <td>{{ $secondaryeducationdetails->score }}</td>
                        <td>{{ $secondaryeducationdetails->year_of_passing }}</td>
                        <td>{{ $secondaryeducationdetails->school_name }}</td>
                        <td>{{ $secondaryeducationdetails->school_board }}</td>
                    </tr>
                @endif

                @if (isset($highersecondaryeducationdetails))
                    <tr>
                        <td>12th / Higher Secondary</td>
                        <td>{{ $highersecondaryeducationdetails->score }} </td>
                        <td>{{ $highersecondaryeducationdetails->year_of_passing }}</td>
                        <td>{{ $highersecondaryeducationdetails->school_name }}</td>
                        <td>{{ $highersecondaryeducationdetails->school_board }}</td>
                    </tr>
                @endif

                @if (isset($itidiplomadetails))
                    <tr>
                        <td>I.T.I/Diploma </td>
                        <td>{{ $itidiplomadetails->score }} </td>
                        <td>{{ $itidiplomadetails->year_of_passing }}</td>
                        <td>{{ $itidiplomadetails->college_name }}</td>
                        <td>{{ $itidiplomadetails->university_name }}</td>
                    </tr>
                @endif


                @if (isset($graduationeducationdetails))
                    <tr>
                        <td>U.G. </td>
                        <td>{{ $graduationeducationdetails->score }} </td>
                        <td>{{ $graduationeducationdetails->year_of_passing }}</td>
                        <td>{{ $graduationeducationdetails->college_name }}</td>
                        <td>{{ $graduationeducationdetails->university_name }}</td>
                    </tr>
                @endif


                @if (isset($postgraduationeducationdetails))
                    <tr>
                        <td>P.G. </td>
                        <td>{{ $postgraduationeducationdetails->score }} </td>
                        <td>{{ $postgraduationeducationdetails->year_of_passing }}</td>
                        <td>{{ $postgraduationeducationdetails->college_name }}</td>
                        <td>{{ $postgraduationeducationdetails->university_name }}</td>
                    </tr>
                @endif


            </tbody>
        </table>
    </div>


</x-candidate-layout>
