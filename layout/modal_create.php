<div class="modal fade" id="scrollmodal" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="scrollmodalLabel">Nuevo registro</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label class="control-label mb-1">Nombre del establecimiento <span style="color: red">(*)</span></label>
                        <input id="nom_establecimiento" name="nom_establecimiento" type="text" class="form-control" required >
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-1">Dirección <span style="color: red">(*)</span></label>
                        <input id="direccion" name="direccion" type="text" class="form-control" required>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="control-label mb-1">Horario</label>
                                <input id="horario" name="horario" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="control-label mb-1">Rango de precio</label>
                                <input id="rango_precio" name="rango_precio" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="control-label mb-1">Nombre del propietario <span style="color: red">(*)</span></label>
                                <input id="nom_propietario" name="nom_propietario" type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="control-label mb-1">Email</label>
                                <input id="email" name="email" type="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,15}$">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="control-label mb-1">URL Página web</label>
                                <input id="pagina_web" name="pagina_web" type="url" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="control-label mb-1">URL Facebook</label>
                                <input id="facebook" name="facebook" type="url" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="control-label mb-1">URL Foto de portada</label>
                                <input id="foto_portada" name="foto_portada" type="url" class="form-control">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="control-label mb-1">Nº de plazas</label>
                                <input id="num_plazas" name="num_plazas" type="number" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="control-label mb-1">Nº habitaciones/mesas</label>
                                <input id="num_hab" name="num_hab" type="number" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="control-label mb-1">Teléfono fijo</label>
                                <input id="telef_fijo" name="telef_fijo" type="text" class="form-control" pattern="[0-9]+"  maxlength="10">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="control-label mb-1">Teléfono celular <span style="color: red">(*)</span></label>
                                <input id="telef_celular" name="telef_celular" type="text" class="form-control" required pattern="[0-9]+"  maxlength="10">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="control-label mb-1">Latitud <span style="color: red">(*)</span></label>
                                <input id="lat" name="lat" type="number" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="control-label mb-1">Longitud <span style="color: red">(*)</span></label>
                                <input id="lng" name="lng" type="number" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-1">Categoría <span style="color: red">(*)</span></label>
                        <select name="categoria" id="categoria" class="form-control" required>
                            <option value="1">Seleccione una categoría</option>
                            <option value="1">Primera</option>
                            <option value="2">Segunda</option>
                            <option value="3">Tercera</option>
                            <option value="4">Cuarta</option>
                            <option value="5">Quinta</option>
                            <option value="6">1 Estrella</option>
                            <option value="7">2 Estrellas</option>
                            <option value="8">3 Estrellas</option>
                            <option value="9">4 Estrellas</option>
                            <option value="10">5 Estrellas</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-1">Descripción</label>
                        <textarea name="descripcion" id="descripcion" rows="9" placeholder="Ingrese una descripción breve del lugar" class="form-control"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-outline-success">Guardar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>