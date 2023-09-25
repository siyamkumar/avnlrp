
import './bootstrap';
import './bootstrap/';
import '../../node_modules/bootstrap/dist/css/bootstrap.css';

const inputElement = document.querySelector('input[type="file"].filepond');

FilePond.create(inputElement, {
    allowImagePreview: true,
    allowMultiple: false,
    labelIdle: `Drag & Drop  Image or <span class="filepond--label-action">Browse</span>`,
    credits: false,
    storeAsFile: true,
    size:0.05,
    // required:true,

});


