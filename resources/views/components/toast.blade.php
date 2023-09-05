@props(['message', 'status'])
<div>
    <script type="module">
        const toastLiveExample = document.getElementById('liveToast')
        const toast = new bootstrap.Toast(toastLiveExample)
        toast.show()
    </script>

    <div class="toast-container position-fixed bottom-0 end-0 m-3 rounded border border-{{$status}}">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
         
            <div class="toast-body">
               
                <div class="content-body d-flex align-items-center">
                    <div class="icon me-4">
                        <i class="fi fi-rr-badge-check d-flex"></i>
                    </div>
                    <div class="d-flex justify-content-between w-100">
                        <div>
                            <h5 class="fw-bold mb-1 text-{{$status}} text-capitalize">{{ $status }}</h5>
                            <p class="text-muted mb-0">{{ $message }}</p>
                        </div>
                        <div>
                            <button type="button" class="btn-close" data-bs-dismiss="toast"
                                aria-label="Close"></button>
                        </div>

                    </div>
                </div>

                    
                </div>
            </div>
        </div>



    </div>
