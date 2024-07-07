<style>
    .file-dropzone {
        border: 2px dashed #c3c3c3;
        padding: 20px;
        margin-bottom: 20px;
        position: relative;
                cursor: pointer;
    }

    .dropzone-content {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100%;
    }

    .dropzone-icon {
        font-size: 3rem;
        color: #c3c3c3;
    }

    .dropzone-text {
        margin-top: 10px;
        color: #666;
    }

    .file-list {
        margin-top: 10px;
    }

    .file-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 5px;
        background-color: #f5f5f5;
        border: 1px solid #ddd;
        margin-top: 5px;
    }

    .file-item i {
        margin-right: 5px;
    }

    .file-item span {
        margin-right: 10px;
    }
</style>

{{-- Modais Popup Pages --}}
@if (Route::is(['movimento.index']))
    @if (isset($competencias))
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
                    <form method="post" action="{{ route('movimento.store') }}" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="modal-body scrollbar-custom">
                            <div class="row g-3">
                                <div class="col-xl-4">
                                    <div class="mb-0">
                                        <label class="form-label">Competência</label>
                                        <select class="form-select scrollbar-custom" name="competencia_id">
                                            @foreach ($competencias as $competencia)
                                                <option value="{{ $competencia->id }}">
                                                    {{ $competencia->mes->mes_abrev }}/{{ $competencia->ano->ano }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-8">
                                    <div class="mb-3">
                                        <label class="form-label">Descrição</label>
                                        <input type="text" class="form-control" name="descricao">
                                    </div>
                                </div>
                            </div>
                            <!-- [anexo] start -->
                            <div class="file-dropzone" onclick="document.getElementById('file-input').click();">
                                <div class="dropzone-content">
                                    <div class="dropzone-icon">
                                        <i class="bi bi-file-earmark-plus"></i>
                                    </div>
                                    <div class="dropzone-text">
                                        Clique ou arraste arquivos aqui para carregar
                                    </div>
                                </div>
                                <!-- Input file que será clicado indiretamente -->
                                <input type="file" id="file-input" name="files_anexos[]" multiple
                                    style="display: none;">
                            </div>
                            <div id="file-list" class="file-list"></div>
                            <!-- [anexo] end -->
                        </div>
                        <div class="modal-footer justify-content-between">
                            <div class="flex-grow-1 text-end">
                                <button type="button" class="btn btn-link-danger"
                                    data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endif
@endif
<!-- [ Dropzone ] -->
<script>
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
                    <span><i class="bi bi-file-earmark-text"></i>${file.name}</span>
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
</script>
