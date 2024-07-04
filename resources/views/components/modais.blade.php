<style>
    .container-dropzone {
        text-align: center;
        width: 100%;
        max-width: 500px;
        margin: auto;
        background-color: white;
    }
    

    .header-section {
        padding: 25px 0px;
    }

    .header-section h1 {
        font-weight: 500;
        font-size: 1.7rem;
        text-transform: uppercase;
        color: #707EA0;
        margin: 0px;
        margin-bottom: 8px;
    }

    .header-section p {
        margin: 5px;
        font-size: 0.95rem;
        color: #707EA0;
    }

    .drop-section {
        min-height: 160px;
        border: 2px dashed #A8B3E3;
        border-radius: 12px;
        position: relative;
    }

    .drop-section div.col:first-child {
        opacity: 1;
        visibility: visible;
        transition-duration: 0.2s;
        transform: scale(1);
        width: 200px;
        margin: auto;
    }

    .drop-section div.col:last-child {
        font-size: 40px;
        font-weight: 700;
        color: #c0cae1;
        position: absolute;
        top: 0px;
        bottom: 0px;
        left: 0px;
        right: 0px;
        margin: auto;
        width: 200px;
        height: 55px;
        pointer-events: none;
        opacity: 0;
        visibility: hidden;
        transform: scale(0.6);
        transition-duration: 0.2s;
    }

    /* we will use "drag-over-effect" class in js */
    .drag-over-effect div.col:first-child {
        opacity: 0;
        visibility: hidden;
        pointer-events: none;
        transform: scale(1.1);
    }

    .drag-over-effect div.col:last-child {
        opacity: 1;
        visibility: visible;
        transform: scale(1);
    }

    .drop-section .cloud-icon {
        margin-top: 15px;
        margin-bottom: 10px;
    }

    .drop-section span,
    .drop-section button {
        display: block;
        margin: auto;
        color: #707EA0;
        margin-bottom: 10px;
    }

    .drop-section button {
        color: white;
        background-color: #0ac000;
        border: none;
        outline: none;
        padding: 7px 20px;
        border-radius: 8px;
        cursor: pointer;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -25px, rgba(0, 0, 0, 0.3) 0px 8px 16px -9px
    }

    .drop-section input {
        display: none;
    }

    .list-section {
        display: none;
        text-align: left;
        margin-top: 10px;
        padding-bottom: 20px;
    }

    .list-section .list-title {
        font-size: 0.95rem;
        color: #707EA0;
    }

    .list-section li {
        display: flex;
        margin: 15px 0px;
        padding-top: 4px;
        padding-bottom: 2px;
        border-radius: 8px;
        transition-duration: 0.2s;
    }

    .list-section li:hover {
        box-shadow: #E3EAF9 0px 0px 4px 0px, #E3EAF9 0px 12px 16px 0px;
    }

    .list-section li .col {
        flex: .1;
    }

    .list-section li .col:nth-child(1) {
        flex: .15;
        text-align: center;
    }

    .list-section li .col:nth-child(2) {
        flex: .75;
        text-align: left;
        font-size: 0.9rem;
        color: #3e4046;
        padding: 8px 10px;
    }

    .list-section li .col:nth-child(2) div.name {
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        max-width: 200px;
        display: inline-block;
    }

    .list-section li .col .file-name span {
        color: #707EA0;
        float: right;
    }

    .list-section li .file-progress {
        width: 100%;
        height: 5px;
        margin-top: 8px;
        border-radius: 8px;
        background-color: #dee6fd;
    }

    .list-section li .file-progress span {
        display: block;
        width: 0%;
        height: 100%;
        border-radius: 8px;
        background-image: linear-gradient(120deg, #6b99fd, #9385ff);
        transition-duration: 0.4s;
    }

    .list-section li .col .file-size {
        font-size: 0.75rem;
        margin-top: 3px;
        color: #707EA0;
    }

    .list-section li .col svg.cross,
    .list-section li .col svg.tick {
        fill: #8694d2;
        background-color: #dee6fd;
        position: relative;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        border-radius: 50%;
    }

    .list-section li .col svg.tick {
        fill: #50a156;
        background-color: transparent;
    }

    .list-section li.complete span,
    .list-section li.complete .file-progress,
    .list-section li.complete svg.cross {
        display: none;
    }

    .list-section li.in-prog .file-size,
    .list-section li.in-prog svg.tick {
        display: none;
    }
</style>


<!-- [scrollbar] start -->
<style>
    /* CSS para o scroll personalizado */
    .modal-body {
        max-height: calc(100vh - 250px); /* Altura máxima do modal-body */
        overflow-y: auto; /* Adicionar scroll vertical apenas quando necessário */
        padding-right: 20px; /* Espaço para o scroll vertical */
    }

    /* Estilização do scrollbar para navegadores WebKit */
    .modal-body::-webkit-scrollbar {
        width: 8px; /* Largura do scrollbar */
    }

    /* Estilização da trilha do scrollbar */
    .modal-body::-webkit-scrollbar-track {
        background: #f1f1f1; /* Cor do fundo do scrollbar */
    }

    /* Estilização do thumb do scrollbar */
    .modal-body::-webkit-scrollbar-thumb {
        background-color: #dadada; /* Cor do thumb do scrollbar */
        border-radius: 8px; /* Cantos arredondados do thumb */
    }

    /* Efeito de hover no thumb do scrollbar */
    .modal-body::-webkit-scrollbar-thumb:hover {
        background: #a8a8a8; /* Cor do thumb do scrollbar ao passar o mouse */
    }
</style>


<!-- [scrollbar] end -->




<!-- [ Modal Movimento ] start -->
<div class="modal fade" id="address-edit_add-modal" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">  
    <div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header justify-content-between">
                <div>
                    <h5 class="mb-0">Registrar movimento</h5>
                </div>
                <div class="d-flex align-items-center justify-content-end">
                    <a href="#" class="avtar avtar-s btn-link-danger" data-bs-dismiss="modal"
                        data-bs-toggle="tooltip" title="Close">
                        <i class="ti ti-x f-20"></i>
                    </a>
                </div>
            </div>
            <div class="modal-body">


                {{-- <form method="post" action="#" enctype="multipart/form-data">
                    @csrf --}}

                <div class="row g-3">
                    <div class="col-xl-4">
                        <div class="mb-0">
                            <label class="form-label">Competência</label>
                            <select class="form-select" id="competencia_id" name="competencia_id"
                                value="{{ old('competencia_id') }}">
                                <option value="">Selecione</option>
                                <option value="">JAN/2024</option>
                                {{-- @foreach ($competencias->reverse() as $competencia)
                                                    <option value="{{ $competencia->id }}">
                                                        {{ $competencia->mes->mes }}
                                                        {{ $competencia->ano->ano }}
                                                    </option>
                                                @endforeach --}}
                            </select>
                            @error('competencia_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="mb-3">
                            <label class="form-label">Descrição</label>
                            <input type="text" class="form-control">
                            @error('title_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- [anexo] start -->
                <div class="container-dropzone">
                    <div class="drop-section">
                        <div class="col">
                            <div class="cloud-icon">
                                <i class="ph-duotone ph-upload me-2 fs-1 text-gray-300"></i>
                            </div>
                            <span>Arraste o aquivo aqui ou</span>
                            <button class="file-selector">Clique para anexar</button>
                            <input type="file" class="file-selector-input" multiple>
                        </div>
                        <div class="col">
                            <div class="drop-here">Drop Here</div>
                        </div>
                    </div>
                    <div class="list-section">
                        <div class="list-title">Documentos</div>
                        <div class="list"></div>
                    </div>
                </div>
                <!-- [anexo] end -->

                {{-- </form> --}}


            </div>
            <div class="modal-footer justify-content-between">
                <div class="flex-grow-1 text-end">
                    <button type="button" class="btn btn-link-danger" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Enviar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- [ Modal Movimento ] end -->




<script>
    const dropArea = document.querySelector('.drop-section');
    const listSection = document.querySelector('.list-section');
    const listContainer = document.querySelector('.list');
    const fileSelector = document.querySelector('.file-selector');
    const fileSelectorInput = document.querySelector('.file-selector-input');

    // upload files with browse button
    fileSelector.onclick = () => fileSelectorInput.click();
    fileSelectorInput.onchange = () => {
        [...fileSelectorInput.files].forEach((file) => {
            if (typeValidation(file.type)) {
                uploadFile(file);
            }
        });
    };

    // check the file type
    function typeValidation(type) {
        var splitType = type.split('/')[0];
        if (type === 'application/pdf' || splitType === 'image' || splitType === 'video') {
            return true;
        }
        return false;
    }

    // when file is over the drag area
    dropArea.ondragover = (e) => {
        e.preventDefault();
        [...e.dataTransfer.items].forEach((item) => {
            if (typeValidation(item.type)) {
                dropArea.classList.add('drag-over-effect');
            }
        });
    };

    // when file leave the drag area
    dropArea.ondragleave = () => {
        dropArea.classList.remove('drag-over-effect');
    };

    // when file drop on the drag area
    dropArea.ondrop = (e) => {
        e.preventDefault();
        dropArea.classList.remove('drag-over-effect');
        if (e.dataTransfer.items) {
            [...e.dataTransfer.items].forEach((item) => {
                if (item.kind === 'file') {
                    const file = item.getAsFile();
                    if (typeValidation(file.type)) {
                        uploadFile(file);
                    }
                }
            });
        } else {
            [...e.dataTransfer.files].forEach((file) => {
                if (typeValidation(file.type)) {
                    uploadFile(file);
                }
            });
        }
    };

    // upload file function
    function uploadFile(file) {
        listSection.style.display = 'block';
        var li = document.createElement('li');
        li.classList.add('in-prog');
        li.innerHTML = `
        <div class="col">
            <i class="ph-duotone ph-file f-60 text-gray-300"></i>
        </div>
        <div class="col">
            <div class="file-name">
                <div class="name">${file.name}</div>
                <span>0%</span>
            </div>
            <div class="file-progress">
                <span></span>
            </div>
            <div class="file-size">${(file.size / (1024 * 1024)).toFixed(2)} MB</div>
        </div>
        <div class="col">
            <svg xmlns="http://www.w3.org/2000/svg" class="cross" height="20" width="20"><path d="m5.979 14.917-.854-.896 4-4.021-4-4.062.854-.896 4.042 4.062 4-4.062.854.896-4 4.062 4 4.021-.854.896-4-4.063Z"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="tick" height="20" width="20"><path d="m8.229 14.438-3.896-3.917 1.438-1.438 2.458 2.459 6-6L15.667 7Z"/></svg>
        </div>
    `;
        listContainer.prepend(li);
        var http = new XMLHttpRequest();
        var data = new FormData();
        data.append('file', file);
        http.onload = () => {
            li.classList.add('complete');
            li.classList.remove('in-prog');
        };
        http.upload.onprogress = (e) => {
            var percent_complete = (e.loaded / e.total) * 100;
            li.querySelectorAll('span')[0].innerHTML = Math.round(percent_complete) + '%';
            li.querySelectorAll('span')[1].style.width = percent_complete + '%';
        };
        http.open('POST', 'sender.php', true);
        http.send(data);
        li.querySelector('.cross').onclick = () => http.abort();
        http.onabort = () => li.remove();
    }
</script>

