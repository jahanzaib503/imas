

$(document).ready(function() {
    // Initialize datepicker with Flatpickr in inline mode
    $('#calendar_container').flatpickr({
        inline: true,
        dateFormat: "Y-m-d",
        minDate: "today", // Prevent selecting past dates
        
    });
});

var editor1 = new RichTextEditor("#div_editor1");

function initImageUpload(box) {
    let uploadField = box.querySelector('.image-upload');
    uploadField.addEventListener('change', getFile);

    function getFile(e) {
        let file = e.currentTarget.files[0];
        checkType(file);
    }

    function previewImage(file) {
        let thumb = box.querySelector('.js--image-preview'),
            reader = new FileReader();

        reader.onload = function() {
            thumb.style.backgroundImage = 'url(' + reader.result + ')';
        }
        reader.readAsDataURL(file);
        thumb.className += ' js--no-default';
    }

    function checkType(file) {
        let imageType = /image.*/;
        if (!file.type.match(imageType)) {
            throw 'File is not an image';
        } else if (!file) {
            throw 'No image chosen';
        } else {
            previewImage(file);
        }
    }
}