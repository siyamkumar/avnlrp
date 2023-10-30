
<x-guest-layout>



    <main class="main-container container mt-3">
        <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis ">
            <div class="">
                <h1 class="display-6 fw-bold text-center">Job Openings</h1>
            </div>
        </div>

       @livewireStyles

        <livewire:job-filter />

       @livewireScripts
    </main>
</x-guest-layout>
