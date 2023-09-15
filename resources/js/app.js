import './bootstrap';
import './bootstrap/';
import '../../node_modules/bootstrap/dist/css/bootstrap.css';

// import Alpine from 'alpinejs';
// window.Alpine = Alpine;
// Alpine.start();
// const inputElement = document.querySelector('#experienceFile');
// FilePond.create(inputElement, {
//     allowImagePreview: true,
//     allowMultiple: false,
//     labelIdle: `Drag & Drop your Featured Image or <span class="filepond--label-action">Browse</span>`,
//     credits: false,
//     storeAsFile: true,

// });

// const inputElement = document.querySelector('input[type="file"].filepond');
 
// const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
 
// FilePond.create(inputElement).setOptions({
//     server: {
//         process: './storage/app',
//         headers: {
//             'X-CSRF-TOKEN': csrfToken,
//         }
//     }
// });


const inputElement = document.querySelector('input[type="file"].filepond');

FilePond.create(inputElement, {
    allowImagePreview: true,
    allowMultiple: false,
    labelIdle: `Drag & Drop  Image or <span class="filepond--label-action">Browse</span>`,
    credits: false,
    storeAsFile: true,
    required:true,

});

const inputElement1 = document.querySelector('input[type="file"].filepond');

FilePond.create(inputElement1, {
    allowImagePreview: true,
    allowMultiple: false,
    labelIdle: `Drag & Drop  Image or <span class="filepond--label-action">Browse</span>`,
    credits: false,
    storeAsFile: true,
    required:true,

});

