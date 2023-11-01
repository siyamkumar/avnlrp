
import './bootstrap';
import './bootstrap/';
import '../../node_modules/bootstrap/dist/css/bootstrap.css';






const FPOPTIONS = {
    allowImagePreview: true,
    allowMultiple: false,
    labelIdle: `Drag & Drop  image or <span class="filepond--label-action">Browse</span>`,
    credits: false,
    storeAsFile: true,
    size: 0.05,
    // required:true,

};



const secondaryMarksheet = document.getElementById('secondaryMarksheet');
FilePond.create(secondaryMarksheet, FPOPTIONS);

const highersecondaryMarksheet = document.getElementById('highersecondaryMarksheet');
FilePond.create(highersecondaryMarksheet, FPOPTIONS);

const graduateMarksheet = document.getElementById('graduateMarksheet');
FilePond.create(graduateMarksheet, FPOPTIONS);

const postgraduateMarksheet = document.getElementById('postgraduateMarksheet');
FilePond.create(postgraduateMarksheet, FPOPTIONS);

const expCertificate = document.getElementById('expCertificate');
FilePond.create(expCertificate, FPOPTIONS);

const paymentProof = document.getElementById('payment_proof');
FilePond.create(paymentProof, FPOPTIONS);

const declarationSignature = document.getElementById('signature');
FilePond.create(declarationSignature, FPOPTIONS);

const candidatePhoto = document.getElementById('candidatePhoto');
FilePond.create(candidatePhoto, FPOPTIONS);

const advertisementupload = document.getElementById('advertisementupload');
FilePond.create(advertisementupload, FPOPTIONS);

window.onload = () => {
    const TOAST = bootstrap.Toast.getOrCreateInstance('#alertToast');
   
    document.addEventListener('alert', (alert) => {
        document.getElementById("status").innerHTML = alert.detail[0].status ?? '';
        document.getElementById("status").classList.add('text-' + alert.detail[0].status);
        let toastIcon = document.getElementById('toast-icon');
        if (alert.detail[0].status === 'success') {
            toastIcon.innerHTML = '<svg version="1.1" class="me-2" width="25" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle style="fill:#25AE88;" cx="25" cy="25" r="25"></circle> <polyline style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" points=" 38,15 22,33 12,25 "></polyline> </g></svg>';
        }
        else {
            toastIcon.innerHTML = '<svg version="1.1" class="me-2" width="25" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle style="fill:#D75A4A;" cx="25" cy="25" r="25"></circle> <polyline style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10;" points="16,34 25,25 34,16 "></polyline> <polyline style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10;" points="16,16 25,25 34,34 "></polyline> </g></svg>';
        }
        document.getElementById("message").innerHTML = alert.detail[0].message;
        
        TOAST.show();
        
    });
};
