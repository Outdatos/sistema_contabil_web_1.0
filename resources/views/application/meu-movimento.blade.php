@extends('layouts.main')

@section('title', 'Meu movimento')
{{-- @section('breadcrumb-item', 'Other')

@section('breadcrumb-item-active', 'Meu movimento') --}}

@section('css')
@endsection

@section('content')

<!-- [ Components ] start -->
@include('components.modalpopup')

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
                    <button type="button" class="btn btn-secondary d-inline-flex" type="button" class="btn btn-primary"
                        data-bs-toggle="modal" data-bs-target="#address-edit_add-modal"><i
                            class="ph-duotone ph-upload me-2"></i>Adicionar
                    </button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-sm table-borderless table-hover">
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
                                    <td>RELATÓRIO MÁQUINAS DE CARTÃO</td>
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
                                    <td>NOTAS DE ENTRADA</td>
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
                                    <td>RELATÓRIO DE VENDAS</td>
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
                                    <td>NOTAS DE SERVIÇO</td>
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
                                    <td>Relatório máquina de cartão</td>
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
                                <tr>
                                    <td>02/01/2024 11:15</td>
                                    <td>Relatório de vendas</td>
                                    <td><i class="ph-duotone ph-check-fat text-green-200 f-20 ms-3"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Recebido"></i></td>
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
@endsection
