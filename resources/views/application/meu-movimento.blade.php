@extends('layouts.main')

@section('title', 'Meu movimento')
@section('breadcrumb-item', 'Other')

@section('breadcrumb-item-active', 'Meu movimento')

@section('css')
@endsection

@section('content')
    <!-- [ Main Content ] start -->
    <div class="row">
        <!-- [ Hover-table ] start -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <span class="fs-5">
                        <h3 class="mb-0">Meu movimento</h3>
                        <p class="mb-0">Documentos para fechamento mensal</p>
                    </span>
                    <button type="button" class="btn btn-secondary d-inline-flex" data-bs-toggle="modal"
                        data-bs-target="#address-edit_add-modal"><i class="ph-duotone ph-upload me-2"></i>Adicionar</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th>JAN/2024</th>
                                    <th>DESCRIÇÃO</th>
                                    <th>STATUS</th>
                                    <th class="text-center">OPÇÕES</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>02/01/2024 11:15</td>
                                    <td>Relatório máquina de cartão</td>
                                    <td><i class="ph-duotone ph-clock text-orange-300 f-22 ms-3" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Aguardando recebimento"></i></td>
                                    <td class="text-center">
                                        <a href="#">
                                            <i class="ph-duotone ph-download text-green-600 f-22" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Baixar"></i>
                                        </a>
                                        <a href="#">
                                            <i class="ph-duotone ph-trash text-red-200 f-22 ms-3" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Excluir"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>02/01/2024 11:15</td>
                                    <td>Relatório máquina de cartão</td>
                                    <td><i class="ph-duotone ph-clock text-orange-300 f-22 ms-3" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Aguardando recebimento"></i></td>
                                    <td class="text-center">
                                        <a href="#">
                                            <i class="ph-duotone ph-download text-green-600 f-22" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Baixar"></i>
                                        </a>
                                        <a href="#">
                                            <i class="ph-duotone ph-trash text-red-200 f-22 ms-3" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Excluir"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>02/01/2024 11:15</td>
                                    <td>Relatório de vendas</td>
                                    <td><i class="ph-duotone ph-check-fat text-green-200 f-20 ms-3" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Recebido"></i></td>
                                    <td class="text-center">
                                        <a href="#">
                                            <i class="ph-duotone ph-download text-green-600 f-22" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Baixar"></i>
                                        </a>
                                        <i class="ph-duotone ph-trash text-gray-300 f-22 ms-3"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>02/01/2024 11:15</td>
                                    <td>Relatório de vendas</td>
                                    <td><i class="ph-duotone ph-check-fat text-green-200 f-20 ms-3" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Recebido"></i></td>
                                    <td class="text-center">
                                        <a href="#">
                                            <i class="ph-duotone ph-download text-green-600 f-22" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Baixar"></i>
                                        </a>
                                        <i class="ph-duotone ph-trash text-gray-300 f-22 ms-3"></i>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Hover-table ] end -->
    </div>
    <!-- [ Main Content ] end -->





    <div class="modal fade" id="address-edit_add-modal" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header justify-content-between">
                    <div class="collapse multi-collapse show">
                        <h5 class="mb-0">Registro de movimento</h5>
                    </div>
                    <div class="collapse multi-collapse">
                        <h5 class="mb-0">Enviar movimento</h5>
                    </div>
                    <div class="d-flex align-items-center justify-content-end">
                        <a href="#" class="avtar avtar-s btn-link-danger" data-bs-dismiss="modal"
                            data-bs-toggle="tooltip" title="Close">
                            <i class="ti ti-x f-20"></i>
                        </a>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form class="row g-3 needs-validation" novalidate>
                            <div class="col-md-6 position-relative">
                                <label for="validationTooltip04" class="form-label">Mês</label>
                                <select class="form-select" id="validationTooltip04" required>
                                    <option selected disabled value=""></option>
                                    <option>Janeiro</option>
                                    <option>Fevereiro</option>
                                    <option>Março</option>
                                </select>
                                <div class="invalid-tooltip"> Please select a valid state. </div>
                            </div>
                            <div class="col-md-6 position-relative">
                                <label for="validationTooltip04" class="form-label">Ano</label>
                                <select class="form-select" id="validationTooltip04" required>
                                    <option selected disabled value=""></option>
                                    <option>2024</option>
                                    <option>2025</option>
                                    <option>2026</option>
                                </select>
                                <div class="invalid-tooltip"> Please select a valid state. </div>
                            </div>

                            <div class="col-md- position-relative">
                                <label for="validationTooltip03" class="form-label">Anexe o documento</label>
                                <input type="text" class="form-control" id="validationTooltip03" required>
                                <div class="invalid-tooltip"> Please provide a valid city. </div>
                            </div>
                            <div class="text-end btn-page mb-0 mt-4">
                                <button class="btn btn-secondary" type="button" data-bs-toggle="collapse"
                                    data-bs-target=".multi-collapse">Cancelar</button>
                                <button class="btn btn-primary" data-bs-dismiss="modal">Registrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
