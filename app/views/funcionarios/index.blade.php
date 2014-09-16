
<div class="main">
    <div class="main-inner">
        <div class="container">
            <div class="row">
                <!-- /span6 -->
                <div class="span12">
                    <div class="widget widget-table action-table">
                        <div class="widget-header"> <i class="icon-save"></i>
                            <h3>Funcionários</h3>
                        </div>
                        <div class="widget-content" id='no-more-tables'>
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th> # </th>
                                        <th> Nome </th>
                                        <th> Função </th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($funcionarios as $f)
                                        <tr>
                                            <td data-title='#'>{{$f->id}}</td>
                                            <td data-title='Nome'>{{$f->pessoa->nome.''.$f->pessoa->sobrenome}}</td>
                                            <td data-title='Função'>{{$f->funcao->nome}}</td>
                                            <td data-title='Ações' class="action-buttons">
                                                <a href="javascript:;" class="btn btn-info btn-small btn-show" title="Visualizar"><i class="btn-icon-only icon-eye-open"> </i> <span>Visualizar</span></a>
                                                <a href="javascript:;" class="btn btn-danger btn-small btn-show" title="Deletar"><i class="btn-icon-only icon-remove"> </i> <span>Deletar</span></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table> 
                            <div class="widget-header text-right">
                                {{$funcionarios->links()}}
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