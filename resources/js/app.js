
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

const expCertificate = document.getElementById('experience_path');
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
    const TOAST = new bootstrap.Toast(document.getElementById('alertToast'));
    document.addEventListener('alert', (alert) => {
        console.log(alert);
        document.getElementById("status").innerHTML = alert.detail[0].status ?? '';
        document.getElementById("status").classList.add('text-'+alert.detail[0].status);

        document.getElementById("message").innerHTML = alert.detail[0].message
        TOAST.show();
    });
};
