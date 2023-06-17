
@extends('template-app')

@section('content')
    <div class="container-fluid crud">
        <div class="row">
            <div class="col-6 d-flex justify-content-start">
                <h4>Criar Cliente</h4>
            </div>
        </div>

        <form  action="{{ route('customer.store') }}" method="POST" autocomplete="off">
            @csrf
            <div class="row">
                <h5>Dados Gerais</h5>
                <div class="col-sm-12 col-md-4">
                    <div class="mb-3">
                        <label class="col-form-label" for="full_name">Nome completo*</label>
                        <input type="text" class="form-control" id="full_name" name="full_name">
                        <p class="text-danger">{{ $errors->first('full_name') }}</p>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4">
                    <div class="mb-3">
                        <label for="birth" class="col-form-label">Data de nascimento*</label>
                        <input type="text" class="form-control datePicker" id="birth" name="birth" required>
                        <p class="text-danger">{{ $errors->first('birth') }}</p>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4">
                    <div class="mb-3">
                        <label class="col-form-label" for="sex">Sexo*</label>
                        <select class="form-control" id="sex" name="sex" required>
                            <option value="M">Masculino</option>
                            <option value="F">Feminino</option>
                            <option value="O">Outro</option>
                        </select>
                        <p class="text-danger">{{ $errors->first('sex') }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="mb-3">
                        <label for="email" class="col-form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                        <p class="text-danger">{{ $errors->first('email') }}</p>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4">
                    <div class="mb-3">
                        <label for="contact_number" class="col-form-label">Celular *</label>
                        <input type="text" class="form-control" id="contact_number" name="contact_number">
                        <p class="text-danger">{{ $errors->first('contact_number') }}</p>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4">
                    <div class="mb-3">
                        <label for="nationality" class="col-form-label">Nacionalidade</label>
                        <input type="text" class="form-control" id="nationality" name="nationality">
                        <p class="text-danger">{{ $errors->first('nationality') }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <h5>Documentos</h5>
                <div class="col-sm-12 col-md-3">
                    <div class="mb-3">
                        <label class="col-form-label" for="document">CPF*</label>
                        <input type="text" class="form-control" id="document" name="document">
                        <p class="text-danger">{{ $errors->first('document') }}</p>
                    </div>
                </div>

                <div class="col-sm-12 col-md-3">
                    <div class="mb-3">
                        <label class="col-form-label" for="passport">Passaporte</label>
                        <input type="text" class="form-control" id="passport" name="passport">
                        <p class="text-danger">{{ $errors->first('passport') }}</p>
                    </div>
                </div>

                <div class="col-sm-12 col-md-3">
                    <div class="mb-3">
                        <label for="passport_emission" class="col-form-label">Data de emissão do passaporte</label>
                        <input type="text" class="form-control datePicker" id="passport_emission" name="passport_emission">
                        <p class="text-danger">{{ $errors->first('passport_emission') }}</p>
                    </div>
                </div>

                <div class="col-sm-12 col-md-3">
                    <div class="mb-3">
                        <label for="passport_expiration" class="col-form-label">Data de vencimento do passaporte</label>
                        <input type="text" class="form-control datePicker" id="passport_expiration" name="passport_expiration">
                        <p class="text-danger">{{ $errors->first('passport_expiration') }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <h5>Localização</h5>
                <div class="col-sm-12 col-md-4">
                    <div class="mb-3">
                        <label class="col-form-label" for="location_state">Estado</label>
                        <input type="text" class="form-control" id="location_state" name="location_state">
                        <p class="text-danger">{{ $errors->first('location_state') }}</p>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4">
                    <div class="mb-3">
                        <label class="col-form-label" for="location_city">Cidade</label>
                        <input type="text" class="form-control" id="location_city" name="location_city">
                        <p class="text-danger">{{ $errors->first('location_city') }}</p>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4">
                    <div class="mb-3">
                        <label class="col-form-label" for="location_district">Bairro</label>
                        <input type="text" class="form-control" id="location_district" name="location_district">
                        <p class="text-danger">{{ $errors->first('location_district') }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="mb-3">
                        <label class="col-form-label" for="location_street">Rua</label>
                        <input type="text" class="form-control" id="location_street" name="location_street">
                        <p class="text-danger">{{ $errors->first('location_street') }}</p>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4">
                    <div class="mb-3">
                        <label class="col-form-label" for="location_number">Número</label>
                        <input type="text" class="form-control" id="location_number" name="location_number">
                        <p class="text-danger">{{ $errors->first('location_number') }}</p>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4">
                    <div class="mb-3">
                        <label class="col-form-label" for="location_complement">Complemento</label>
                        <input type="text" class="form-control" id="location_complement" name="location_complement">
                        <p class="text-danger">{{ $errors->first('location_complement') }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <h5>Outros</h5>
                <div class="mb-3">
                    <label for="notes" class="col-form-label">Observação</label>
                    <textarea class="form-control" id="notes"></textarea>
                    <p class="text-danger">{{ $errors->first('notes') }}</p>
                </div>
            </div>

            <a href="{{ route('customer') }}" class="btn btn-secondary">Voltar</a>
            <button type="submit" class="btn btn-primary add_btn">Salvar</button>
        </form>
    </div>
</div>
@endsection
