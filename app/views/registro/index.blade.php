
<div class="main">
    <div class="main-inner">
        <div class="container">
            <div class="row">
                <div class="span12">
                    
                    @if(!empty($usuarios))
                        <div class="widget widget-table action-table">
                            <div class="widget-header">
                                {{ Form::open(array('method' => 'GET', 'style'=>'margin-top: 3px; margin-left: 5px;')) }}
                                    {{Form::select('filtro', $usuarios, $dados['filtro'], array('style'=>'margin-left: 10px;width: 65%;'));}}
                                    {{Form::submit('Filtrar', array('class'=>'pull-right','style'=>'margin-right: 10px; margin-top: 3px'));}}
                                {{ Form::close() }}
                            </div>
                        </div>
                    @endif
                    <div class="widget widget-table action-table">
                        <div class="widget-header"> <i class="icon-save"></i>
                            <h3>Registro de Alterações</h3>
                        </div>
                        <div class="widget-content responsive-table">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th> # </th>
                                        <th> Descrição </th>
                                        <th> Usuário </th>
                                        <th> Data </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($logs as $log)
                                        <?php $data = $log->getDateTime('data'); ?>
                                        <tr>
                                            <td data-title="#"> {{ $log->id }} </td>
                                            <td data-title="Descrição"> {{ $log->descricao }} </td>
                                            <td data-title="Usuário"> {{ $log->usuario->funcionario->pessoa->nome }} </td>
                                            <td data-title="Data"> {{ $data->format('d/m/Y H:i:s') }} </td>
                                        </tr>
                                    @endforeach
                                    @if(count($logs) < 1)
                                        <tr>
                                            <td class="warning text-center" colspan="4"> Esse usuário ainda não possui nenhum registro. </td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table> 
                            <div class="widget-header text-right">
                                {{$logs->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            <!-- /row --> 
        </div>
        <!-- /container --> 
    </div>
    <!-- /main-inner --> 
</div>
