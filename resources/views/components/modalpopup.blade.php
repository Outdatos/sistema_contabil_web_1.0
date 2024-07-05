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
                    <div class="modal-body scrollbar-custom">
                        {{-- <form method="post" action="{{ route('movimento.store') }}" enctype="multipart/form-data">
                            @csrf
                            @method('POST') --}}
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
                            <div class="container-dropzone">
                                <div class="drop-section">
                                    <div class="col">
                                        <div class="cloud-icon">
                                            <i class="ph-duotone ph-upload me-2 fs-1 text-gray-300"></i>
                                        </div>
                                        <span>Arraste o aquivo aqui ou</span>
                                        <button class="file-selector">Clique para anexar</button>
                                        <input type="file" class="file-selector-input" name="files_anexos[]" multiple>
                                    </div>
                                    <div class="col">
                                        <div class="drop-here">Soltar</div>
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
    @endif
@endif

<!-- [ Dropzone ] -->
<script src="{{ asset('build/js/components/dropzone-custom.js') }}"></script>
