<x-guest-layout>
    <main class="p-5"
        style="height: 83vh;
        display: flex;
    align-items: center;
    background-color: #f5f5f5;
    ">

        <div class="text-center" style=" width: 100%;
max-width: 600px;
padding: 15px;
margin: auto;">
            <form class="m-5" action={{ route('applicantregister') }} method="POST">
                @csrf
                <h1 class="h3 mb-3 fw-normal">Apply for a Job</h1>

                <div class="form-floating mb-3">
                    <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Full Name">
                    <label for="fullname">Full Name</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="email" name="email"
                        placeholder="name@example.com">
                    <label for="email">Email address</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="phone_no" name="phone_no" placeholder="Phone No">
                    <label for="phone_no">Mobile Number</label>
                </div>


                <div class="checkbox mb-3">

                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Next</button>

            </form>
        </div>

    </main>
</x-guest-layout>
