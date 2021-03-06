
<!-- Modal -->
<div class="modal fade" id="detalleProducto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 id="title" class="modal-title">DETALLE DEL PROVEEDOR</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="detalle-prove">
                <form class="form-horizontal" method="POST" action="{{url('/select/declarationIVA')}}">
                    <input type="hidden" value="{{ csrf_token() }}" name="_token">

                    <div class="form-group form-group-sm">
                        <!-- left column -->
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label id="label" class="col-sm-4 control-label">Nombre:</label>
                                <div class="col-sm-7">
                                    <p class="text-capitalize">Teclado</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group form-group-sm">
                        <!-- left column -->
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label id="label" class="col-sm-4 control-label">Modelo: </label>
                                <div class="col-sm-6">
                                    <p class="text-capitalize">COMPAQ°</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-8">
                            <div class="form-group">
                                <label id="label" class="col-sm-4 control-label">Marca:</label>
                                <div class="col-sm-8">
                                    <p class="text-capitalize">COMPAQ°</p>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="form-group form-group-sm">
                        <!-- left column -->
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label id="label" class="col-sm-4 control-label">Imagen:</label>
                                <div class="col-sm-7">
                                    <p class="text-capitalize"><img src="https://ddtech.mx/assets/uploads/e86f2e2d1c73e7467510e5fbae7e4037.jpg" alt=""></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group form-group-sm">
                        <!-- left column -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label id="label" class="col-sm-6 control-label">Precio:</label>
                                <div class="col-sm-6">
                                    <p class="text-capitalize">$500</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>