
									<div class="modal fade" id="modal-cli" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg " role="document">
											<div class="modal-content">
												<div class="modal-header border-0">
													<h5 class="modal-title">
														<span class="fw-mediumbold">
														Registro de </span> 
														<span class="fw-light">
															Contratos
														</span>
													</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<div id="exito-0"></div>
													<div class="panel-body">


													<form role="form">
														<div class="row">
														    <div class="col-sm-6">
																<div class="form-group">
                                                                <label for="a-prov">Proveedor</label>
																<input type="text" class="form-control form-control-sm  input-pill" id="a-id" style="display:none;" autocomplete="off" >
																<select class=" form-control form-control-sm  input-pill" id="a-prov">
									                           </select>
																</div>
                                                            </div>
															<div class="col-sm-6">
																<div class="form-group">
                                                                <label for="a-cli">Cliente</label>
																<select class=" form-control form-control-sm  input-pill" id="a-cli">
									                           </select>
																</div>
                                                            </div>
														    <div class="col-sm-6">
																<div class="form-group">
                                                                     <label for="a-fecha-in">Fecha Inicio</label>
									                                 <input type="text" class="form-control form-control-sm  input-pill" id="a-fecha-in" placeholder="dd/mm/yyyy" autocomplete="off" >
																</div>
                                                            </div>

                                                            <div class="col-sm-6">
																<div class="form-group">
                                                                     <label for="a-fecha-fin">Fecha Fin</label>
									                                 <input type="text" class="form-control form-control-sm  input-pill" id="a-fecha-fin" placeholder="dd/mm/yyyy" autocomplete="off" >
																</div>
                                                            </div>

															<div class="col-sm-3">
																<div class="form-group">
																	 <label for="a-pre-pro">Precio Proveedor</label>
									                                 <input type="text" onKeyPress="return soloNumeros(event)"  class="form-control form-control-sm  input-pill" id="a-pre-pro" placeholder="0.00" autocomplete="off" >
																</div>
                                                            </div>

															<div class="col-sm-9">
																<div class="form-group">
                                                                <label for="a-mon-pro">Moneda Proveedor</label>
																<select class=" form-control form-control-sm  input-pill" id="a-mon-pro">
									                           </select>
																</div>
                                                            </div>

                                                            <div class="col-sm-3">
																<div class="form-group">
																	 <label for="a-pre-cli">Precio Cliente</label>
									                                 <input type="text" onKeyPress="return soloNumeros(event)" class="form-control form-control-sm  input-pill" id="a-pre-cli" placeholder="0.00" autocomplete="off" >
																</div>
                                                            </div>

															<div class="col-sm-9">
																<div class="form-group">
                                                                <label for="a-mon-cli">Moneda Cliente</label>
																<select class=" form-control form-control-sm  input-pill" id="a-mon-cli">
									                           </select>
																</div>
                                                            </div>
                                                            <div class="col-sm-6">
																<div class="form-group">
                                                                     <label for="a-cli-fin">cliente Final</label>
									                                 <input type="text" class="form-control form-control-sm  input-pill" id="a-cli-fin" placeholder="Cliente Final" autocomplete="off" >
																</div>
                                                            </div>
															<div class="col-sm-6">
																<div class="form-group">
                                                                <label for="a-trab">Tipo de Trabajo</label>
																<select class=" form-control form-control-sm  input-pill" id="a-trab">
									                           </select>
																</div>
                                                            </div>

															
                                                            
														</div>
													</form>
												</div>
												<div class="modal-footer border-0">
													<button id="addregistro" type="button" onclick="RegistrarModal();" class="btn btn-primary">Guardar</button>
													<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
												</div>
											</div>
										</div>
									</div>