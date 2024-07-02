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
                <button type="button" class="btn btn-secondary d-inline-flex"><i class="ti ti-upload me-1"></i>Enviar movimento</button>
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
                        <td><i data-feather="clock" class="text-orange-500 ms-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Aguardando recebimento"></i></td>
                        <td class="text-center">
                          <a href="#" class="btn btn-icon btn-link-success avtar-s mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Baixar"><i class="ti ti-download fs-4"></i></a>
                          <a href="#" class="btn btn-icon btn-link-danger avtar-s mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Deletar"><i class="ti ti-trash fs-4"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>02/01/2024 11:15</td>
                        <td>Notas de serviço</td>
                        <td><i data-feather="clock" class="text-orange-500 ms-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Aguardando recebimento"></i></td>
                        <td class="text-center">
                          <a href="#" class="btn btn-icon btn-link-success avtar-s mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Baixar"><i class="ti ti-download fs-4"></i></a>
                          <a href="#" class="btn btn-icon btn-link-danger avtar-s mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Deletar"><i class="ti ti-trash fs-4"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>02/01/2024 11:15</td>
                        <td>Relatório de vendas</td>
                        <td><i data-feather="check" class="text-green-900 ms-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Recebido"></i></td>
                        <td class="text-center">
                         <a href="#" class="btn btn-icon btn-link-success avtar-s mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Baixar"><i class="ti ti-download fs-4"></i></a>
                          <a href="#" class="btn btn-icon btn-link-danger avtar-s mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Deletar"><i class="ti ti-trash fs-4"></i></a>
                        </td>
                      </tr>
                    </tbody>
                      <!-- [ Hover-table2 ] start -->
                     <thead>
                      <tr>
                        <th>DEZ/2023</th>
                        <th>DESCRIÇÃO</th>
                        <th>STATUS</th>
                        <th class="text-center">DELETAR</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>02/01/2024 11:15</td>
                        <td>Relatório máquina de cartão</td>
                        <td><i data-feather="check" class="text-green-900 ms-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Recebido"></i></td>
                        <td class="text-center">
                         <a href="#" class="btn btn-icon btn-link-success avtar-s mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Baixar"><i class="ti ti-download fs-4"></i></a>
                          <a href="#" class="btn btn-icon btn-link-danger avtar-s mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Deletar"><i class="ti ti-trash fs-4"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>02/01/2024 11:15</td>
                        <td>Notas de serviço</td>
                        <td><i data-feather="check" class="text-green-900 ms-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Recebido"></i></td>
                        <td class="text-center">
                         <a href="#" class="btn btn-icon btn-link-success avtar-s mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Baixar"><i class="ti ti-download fs-4"></i></a>
                          <a href="#" class="btn btn-icon btn-link-danger avtar-s mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Deletar"><i class="ti ti-trash fs-4"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>02/01/2024 11:15</td>
                        <td>Relatório de vendas</td>
                        <td><i data-feather="check" class="text-green-900 ms-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Recebido"></i></td>
                        <td class="text-center">
                         <a href="#" class="btn btn-icon btn-link-success avtar-s mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Baixar"><i class="ti ti-download fs-4"></i></a>
                          <a href="#" class="btn btn-icon btn-link-danger avtar-s mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Deletar"><i class="ti ti-trash fs-4"></i></a>
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