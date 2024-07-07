{{-- Modais Popup Pages --}}
@if (Route::is(['movimento.index']))
    @if (isset($competencias))
        <!-- [ Modal Movimento ] start -->
        <div class="modal fade" id="movimento-add-modal" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header justify-content-between">
                        <div>
                            <h5 class="mb-0">Registrar movimento</h5>
                        </div>
                        <div class="d-flex align-items-center justify-content-end">
                            <a href="#" class="avtar avtar-s btn-link-danger" data-bs-dismiss="modal">
                                <i class="ti ti-x f-20"></i>
                            </a>
                        </div>
                    </div>
                    <form method="post" action="{{ route('movimento.store') }}" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="modal-body scrollbar-custom">
                            <div class="row g-3">
                                <div class="col-xl-5">
                                    <div class="mb-3">
                                        <label class="form-label">Competência</label>
                                        <select class="form-select @error('competencia_id') is-invalid @enderror"
                                            name="competencia_id">
                                            <option value=""></option>
                                            @foreach ($competencias as $competencia)
                                                <option value="{{ $competencia->id }}"
                                                    {{ old('competencia_id') == $competencia->id ? 'selected' : '' }}>
                                                    {{ $competencia->mes->mes_abrev }}/{{ $competencia->ano->ano }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('competencia_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-7">
                                    <div class="mb-3">
                                        <label class="form-label">Descrição</label>
                                        <input type="text"
                                            class="form-control @error('descricao') is-invalid @enderror"
                                            name="descricao" value="{{ old('descricao') }}">
                                        @error('descricao')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Anexos</label>
                                <div
                                    class=" @if ($errors->has('files_anexos')) drop-error @else file-dropzone @endif              
                                onclick="document.getElementById('file-input').click();">
                                    <div class="dropzone-content">
                                        <div class="dropzone-icon">
                                            <i class="bi bi-file-earmark-plus"></i>
                                        </div>
                                        <div class="dropzone-text text-center">
                                            <i class="ph-duotone ph-upload f-30 text-gray-400"></i>
                                            <h6 class="text-gray-400">Clique aqui para anexar.</h6>
                                        </div>
                                    </div>
                                    <div id="file-list" class="file-list"></div>
                                    <input type="file" id="file-input" name="files_anexos[]" multiple
                                        style="display: none;">
                                    @error('files_anexos')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <div class="flex-grow-1 text-end">
                                <button type="button" class="btn btn-link-danger"
                                    data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    @endif
@endif
<!-- [ Dropzone ] -->
<script src="{{ asset('build/js/components/dropzone-custom.js') }}"></script>
