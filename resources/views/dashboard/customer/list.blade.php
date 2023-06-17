
@extends('template-app')

@section('content')
<div class="container crud">
    <div class="row">
        <div class="col-6 d-flex justify-content-start">
            <h4>Clientes</h4>
        </div>

        <div class="col-6 d-flex justify-content-end">
            <a href="{{ route('customer.create') }}" type="button" class="btn btn-sm btn-primary">Novo cliente</a>
        </div>
    </div>

    <div class="div-table table-responsive">
        <table class="table">
            <thead class="table-head">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Sexo</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody class="table-body">
                @foreach($customers as $item)
                    <tr class="table-row">
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->full_name }}</td>
                        <td>{{ $item->document }}</td>
                        <td>
                            {{ $item->sex == 'M' ? 'Masculino' : ''}}
                            {{ $item->sex == 'F' ? 'Feminino' : ''}}
                            {{ $item->sex == 'O' ? 'Outro' : ''}}
                        </td>
                        <td>
                            <a class="btn btn-sm btn-default" href="#"><i class="bi bi-trash3 text-danger"></i></a>
                            <a class="btn btn-sm btn-default" href="#"><i class="bi bi-pencil-square"></i></a>
                            <a class="btn btn-sm btn-default" href="#"><i class="bi bi-eye"></i></a>
                        </td>
                    </tr>
                @endforeach
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
