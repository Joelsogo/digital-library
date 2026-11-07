document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.alert-dismissible').forEach(function (el) {
        setTimeout(function () {
            var btn = el.querySelector('.btn-close');
            if (btn) btn.click();
        }, 5000);
    });

    var dropzone = document.getElementById('fileDropzone');
    var fileInput = document.getElementById('fileInput');
    if (dropzone && fileInput) {
        ['dragenter', 'dragover'].forEach(function (evt) {
            dropzone.addEventListener(evt, function (e) {
                e.preventDefault();
                dropzone.classList.add('dragover');
            });
        });
        ['dragleave', 'drop'].forEach(function (evt) {
            dropzone.addEventListener(evt, function (e) {
                e.preventDefault();
                dropzone.classList.remove('dragover');
            });
        });
        dropzone.addEventListener('drop', function (e) {
            if (e.dataTransfer.files.length) {
                fileInput.files = e.dataTransfer.files;
                updateFileLabel(fileInput.files[0]);
            }
        });
        dropzone.addEventListener('click', function () {
            fileInput.click();
        });
        fileInput.addEventListener('change', function () {
            if (this.files[0]) updateFileLabel(this.files[0]);
        });
    }

    function updateFileLabel(file) {
        var label = document.getElementById('selectedFileName');
        if (label) {
            label.textContent = file.name + ' (' + formatBytes(file.size) + ')';
            label.classList.remove('text-muted');
        }
    }

    function formatBytes(bytes) {
        if (bytes >= 1048576) return (bytes / 1048576).toFixed(2) + ' MB';
        if (bytes >= 1024) return (bytes / 1024).toFixed(2) + ' KB';
        return bytes + ' B';
    }
});
