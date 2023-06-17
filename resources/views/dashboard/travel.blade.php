
@extends('template-app')

@section('content')
<div class="container crud">
    <div class="row">
        <div class="col-6 d-flex justify-content-start">
            <h4>Viagens</h4>
        </div>

        <div class="col-6 d-flex justify-content-end">
            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#newHospitalization">Nova viagem</button>
        </div>
    </div>

    <div class="div-table table-responsive">
        <table class="table">
            <thead class="table-head">
            <tr>
                <th>ID</th>
                <th>Destino</th>
                <th>Tipo</th>
                <th>Data da viagem</th>
                <th>Vagas preenchidas/totais</th>
                <th>Status</th>
                <th></th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody class="table-body">
                <tr class="table-row">
                    <td>1</td>
                    <td>Machu Picchu</td>
                    <td>Excursão</td>
                    <td>27/02/2023</td>
                    <td>28/100</td>
                    <td class="text-success">Ativo</td>
                    <td><a href="#" class="btn btn-sm btn-outline-primary">Gerenciar</a></td>
                    <td>
                        <a class="btn btn-sm btn-default" href="#"><i class="bi bi-trash3 text-danger"></i></a>
                        <a class="btn btn-sm btn-default" href="#"><i class="bi bi-pencil-square"></i></a>
                        <a class="btn btn-sm btn-default" href="#"><i class="bi bi-eye"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
        
    </div>

    <nav>
        <ul class="pagination">
            <li class="page-item active">
                <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">3</a>
            </li>
        </ul>
    </nav>
</div>
@endsection
