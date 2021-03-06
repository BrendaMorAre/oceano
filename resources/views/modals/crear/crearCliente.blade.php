
<!-- Modal -->
<div class="modal fade" id="crearCliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 id="title" class="modal-title">DETALLE DEL CLIENTE</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="{{url('/nuevo/cliente')}}">
                    <input type="hidden" value="{{ csrf_token() }}" name="_token">
                    <div class="form-group form-group-sm">
                        <!-- left column -->
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label id="form" class="col-sm-6 control-label">Nombre Comercial:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="nomcomercial">
                                </div>
                            </div>
                        </div>

                        <!-- right column -->
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label id="form" class="col-sm-6 control-label">Nombre Fiscal:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="nomfiscal">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- *********************************************************************** -->

                    <div class="form-group form-group-sm">
                        <!-- left column -->
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label id="form" class="col-sm-6 control-label">Contacto:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="contacto">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- *********************************************************************** -->

                    <div class="form-group form-group-sm">
                        <!-- left column -->
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label id="form" class="col-sm-6 control-label">Telefono 1:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="telefono1">
                                </div>
                            </div>
                        </div>

                        <!-- right column -->
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label id="form" class="col-sm-6 control-label">Telefono 2:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="telefono2">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- *********************************************************************** -->

                    <div class="form-group form-group-sm">
                        <!-- left column -->
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label id="form" class="col-sm-6 control-label">Correo de cobranza:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="cobranza">
                                </div>
                            </div>

                            <div class="form-group">
                                <label id="form" class="col-sm-6 control-label">Correo de sistemas:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="sistemas">
                                </div>
                            </div>
                        </div>

                        <!-- right column -->
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label id="form" class="col-sm-6 control-label">Correo de cotizaciones:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="cotizaciones">
                                </div>
                            </div>

                            <div class="form-group">
                                <label id="form" class="col-sm-6 control-label">Correo de boletín:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="boletin">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- *********************************************************************** -->

                    <div class="form-group form-group-sm">
                        <!-- left column -->
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label id="form" class="col-sm-4 control-label">RFC:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="rfc">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- *********************************************************************** -->

                    <div class="form-group form-group-sm">
                        <!-- left column -->
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label id="form" class="col-sm-4 control-label">Domicilio:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="domicilio">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- *********************************************************************** -->

                    <div class="wrapper">
                        <button type="submit" class="btn btn-primary">Guardar Cliente</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
</div>