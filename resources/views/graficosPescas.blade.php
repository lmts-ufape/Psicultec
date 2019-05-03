<!doctype html> @extends('layouts.principal') @section('title','Relatórios do Tanque') @section('path')
<a href="/listar/pisciculturas">Pisciculturas</a> > <a href="/info/piscicultura/{{$piscicultura->id}}"> {{$piscicultura->nome}} </a> > <a href="/relatorios/pescas/{{$piscicultura->id}}">Pescas</a> > {{$tanque->nome}}@stop @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div id="qualidade" class="card-header">Relatório da Qualidade da água</div>
                <div class="card-body">
                    <div id="tabela" class="table-responsive">

                        {!! $line_chartPh->html() !!}

                    </div>
                    <div id="tabela" class="table-responsive">

                        {!! $line_chartTemp->html() !!}

                    </div>
                    <div id="tabela" class="table-responsive">

                        {!! $line_chartAmonia->html() !!}

                    </div>
                    <div id="tabela" class="table-responsive">

                        {!! $line_chartNitrito->html() !!}

                    </div>
                    <div id="tabela" class="table-responsive">

                        {!! $line_chartNitrato->html() !!}

                    </div>
                    <div id="tabela" class="table-responsive">

                        {!! $line_chartDureza->html() !!}

                    </div>
                    <div id="tabela" class="table-responsive">

                        {!! $line_chartAlcalinidade->html() !!}

                    </div>
                    <div id="tabela" class="table-responsive">

                        {!! $line_chartOxigenio->html() !!}

                    </div>

                </div>
            </div>
        </div>
    </div>
</div><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div id="biometria" class="card-header">Relatório de Biometria</div>
                <div class="card-body">
                    <div id="tabela" class="table-responsive">

                        {!! $line_chartBiometria->html() !!}

                    </div>
                </div>

            </div>
        </div>
    </div>
</div><br>

{!! Charts::scripts() !!} {!! $line_chartPh->script() !!} {!! $line_chartTemp->script() !!} {!! $line_chartAlcalinidade->script() !!} {!! $line_chartOxigenio->script() !!} {!! $line_chartDureza->script() !!} {!! $line_chartNitrito->script() !!} {!! $line_chartNitrato->script()
!!} {!! $line_chartAmonia->script() !!} {!! $line_chartBiometria->script() !!}  @stop