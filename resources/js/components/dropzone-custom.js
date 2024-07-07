'use strict';
document.addEventListener('DOMContentLoaded', function () {
    const fileInput = document.getElementById('file-input');
    const fileList = document.getElementById('file-list');

    // Event listener para quando os arquivos são selecionados
    fileInput.addEventListener('change', function () {
        const files = fileInput.files;

        fileList.innerHTML = '';

        Array.from(files).forEach(file => {
            const fileSize = getFileSize(file.size);
            const listItem = document.createElement('div');
            listItem.classList.add('file-item');
            listItem.innerHTML = `
                <span class="d-flex"><i class="ph-duotone ph-file text-gray-500 f-22"></i>${file.name}</span>
                <span>${fileSize}</span>
            `;
            fileList.appendChild(listItem);
        });
    });

    function getFileSize(size) {
        if (size === 0) return '0 Bytes';
        const k = 1024;
        const sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
        const i = Math.floor(Math.log(size) / Math.log(k));
        return parseFloat((size / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
    }
});