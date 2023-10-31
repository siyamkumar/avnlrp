@props(['message', 'status'])
<div>
    <script type="module">
        const toastLiveExample = document.getElementById('liveToast')
        const toast = new bootstrap.Toast(toastLiveExample)
        toast.show()
    </script>

    <div class="toast-container" style="position: fixed; bottom: 30px; right: 50px;">

        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true" style="padding:25px 25px">


            <div class="toast-header border-0 pb-3">
                <div id="toast-icon">
                <svg version="1.1" class="me-2" width="25" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle style="fill:#25AE88;" cx="25" cy="25" r="25"></circle> <polyline style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" points=" 38,15 22,33 12,25 "></polyline> </g></svg></div>
                <strong class="me-auto text-capitalize fs-6" id="status"> {{ $status }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>



            <div class="toast-body" id="message">
                
{!! html_entity_decode($message) !!}
            </div>
        </div>
        {{-- 
            <div class="toast-body">

                <div class="content-body d-flex align-items-center">
                    <div class="icon me-4">
                        <i class="fi fi-rr-badge-check d-flex"></i>
                    </div>
                    <div class="d-flex justify-content-between w-100">
                        <div>
                            <h5 class="fw-bold mb-1 text-{{ $status }} text-capitalize"></h5>
                            <p class="text-muted mb-0"></p>
                        </div>
                        <div>
                            <button type="button" class="btn-close" data-bs-dismiss="toast"
                                aria-label="Close"></button>
                        </div>

                    </div>
                </div>


            </div> --}}
    </div>
</div>



</div>
