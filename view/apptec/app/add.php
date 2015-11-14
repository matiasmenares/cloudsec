
<link rel="stylesheet" href ="<?php echo TEMPLATE; ?>plugins/autocomplete/content/styles.css" />

</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="<?php if($_SESSION['menu_side'] == 0){ echo "page-sidebar-closed page-sidebar-closed-hide-logo"; }elseif($_SESSION['menu_side'] == 1){ echo ""; } ?>">
<?php require(TEMPLATE.'comun/header.php'); ?>
<?php require(TEMPLATE.'comun/menu.php'); ?>

<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <ul class="page-breadcrumb">
	            <li>
	                <a href="home/">
	                    <i class="fa fa-home"></i>
	                    Home
	                </a>
                </li>
                <li><i class="fa fa-angle-right"></i></li>
                <li>
	                <a href="app/list/">
	                    <i class="fa fa-rocket"></i>
	                    Aplicaciones
	                </a>
                </li>
                <li><i class="fa fa-angle-right"></i></li>
                <li>
                    <i class="fa fa-plus-circle"></i>
                    Agregar Aplicación
                </li>
            </ul>
            <div class="page-toolbar">
                <div class="btn-group pull-right">
                    <button type="button" class="btn btn-fit-height red-thunderbird dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
                    Configuración <i class="fa fa-angle-down"></i>
                    </button>
                    <ul class="dropdown-menu pull-right" role="menu">
                       
                        <li>
                            <a href="#" data-toggle="modal" data-target=".modal">Configurar Impuesto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- END PAGE HEADER-->
         <!-- TAB -->
<div class="portlet light bordered" id="form_wizard_1">
		<div class="portlet-title">
		    <div class="caption">
		        <i class=" icon-layers font-red"></i>
		        <span class="caption-subject font-red bold uppercase"> Agregar App -
		            <span class="step-title"> Paso 1 de 4 </span>
		        </span>
		    </div>
		    <div class="actions">
		        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
		            <i class="icon-cloud-upload"></i>
		        </a>
		        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
		            <i class="icon-wrench"></i>
		        </a>
		        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
		            <i class="icon-trash"></i>
		        </a>
		    </div>
		</div>
		<div class="portlet-body form">
		    <form action="#" class="form-horizontal" id="submit_form" method="POST" novalidate="novalidate">
		        <div class="form-wizard">
		            <div class="form-body">
		                <ul class="nav nav-pills nav-justified steps">
		                    <li class="active">
		                        <a href="#tab1" data-toggle="tab" class="step" aria-expanded="true">
		                            <span class="number"> 1 </span>
		                            <span class="desc">
		                                <i class="fa fa-check"></i> Datos </span>
		                        </a>
		                    </li>
		                    <li>
		                        <a href="#tab2" data-toggle="tab" class="step">
		                            <span class="number"> 2 </span>
		                            <span class="desc">
		                                <i class="fa fa-check"></i> Detalles </span>
		                        </a>
		                    </li>
		                    <li>
		                        <a href="#tab3" data-toggle="tab" class="step active">
		                            <span class="number"> 3 </span>
		                            <span class="desc">
		                                <i class="fa fa-check"></i> Servidor </span>
		                        </a>
		                    </li>
		                    <li>
		                        <a href="#tab4" data-toggle="tab" class="step">
		                            <span class="number"> 4 </span>
		                            <span class="desc">
		                                <i class="fa fa-check"></i> Confirmar </span>
		                        </a>
		                    </li>
		                </ul>
		                <div id="bar" class="progress progress-striped" role="progressbar">
		                    <div class="progress-bar progress-bar-success" style="width: 25%;"> </div>
		                </div>
		                <div class="tab-content">
		                    <div class="alert alert-danger display-none">
		                        <button class="close" data-dismiss="alert"></button> Tienes algunos errores en el formulario! </div>
		                    <div class="alert alert-success display-none">
		                        <button class="close" data-dismiss="alert"></button> Your form validation is successful! </div>
		                    <div class="tab-pane active" id="tab1">
		                        <h3 class="block">Detalles de la aplicación</h3>
		                        <div class="form-group">
		                            <label class="control-label col-md-3">Nombre
		                                <span class="required" aria-required="true"> * </span>
		                            </label>
		                            <div class="col-md-4">
		                                <input type="text" class="form-control" name="nombre">
		                                <span class="help-block"> Nombre de tu Aplicación </span>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="control-label col-md-3">Url
		                                <span class="required" aria-required="true"> * </span>
		                            </label>
		                            <div class="col-md-4">
		                                <input type="text" class="form-control" name="url">
		                                <span class="help-block"> http://www.ejemplo.com </span>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="control-label col-md-3">Email
		                                <span class="required" aria-required="true"> * </span>
		                            </label>
		                            <div class="col-md-4">
		                                <input type="text" class="form-control" name="email">
		                                <span class="help-block"> Email Administrador </span>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="tab-pane" id="tab2">
		                        <h3 class="block">Detalles de aplicación</h3>
		                        <div class="form-group">
		                            <label class="control-label col-md-3">Ruta de aplicación
		                                <span class="required" aria-required="true"> * </span>
		                            </label>
		                            <div class="col-md-4">
		                                <input type="text" class="form-control" name="ruta">
		                                <span class="help-block"> Ejemplo /var/www/app/ </span>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="control-label col-md-3">¿Uso de Framework?
		                                <span class="required" aria-required="true"> * </span>
		                            </label>
		                            <div class="col-md-4">
		                                <div class="radio-list">
		                                       <label><div class="radio"><span><input type="radio" name="frame" value="si" data-title="Si"></span></div>Si</label>
		                                        <label><div class="radio"><span><input type="radio" name="frame" value="no" data-title="No"></span></div>No</label>
		                                </div>
		                                <div id="form_gender_error"> </div>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="control-label col-md-3">Lenguaje Frontend
		                                <span class="required" aria-required="true"> * </span>
		                            </label>
		                            <div class="col-md-4">
									<select name="country" id="front_end_lang" class="form-control select2-hidden-accessible" tabindex="-1" aria-hidden="true">
		                                    <option value="">Ninguno</option>
		                                    <option value="1">AngularJS</option>
											<option value="1">JavaScript</option>
											<option value="1">Jquery</option>
		                            </select>
										<span class="help-block">Lenguaje de Frontend</span>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="control-label col-md-3">Lenguaje Backend</label>
		                            <div class="col-md-4">
		                                <select name="backend" id="country_list" class="form-control select2-hidden-accessible" tabindex="-1" aria-hidden="true">
		                                    <option value="">Lenguaje</option>
		                                    <option value="1">Ruby</option>
											<option value="1">NodeJS</option>
		                                    <option value="1">PHP</option>
		                                    <option value="1">Java</option>
		                                    <option value="1">Python</option>
		                                </select><span class="select2 select2-container select2-container--bootstrap" dir="ltr" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-country_list-container"><span class="select2-selection__rendered" id="select2-country_list-container"><span class="select2-selection__placeholder"></span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="control-label col-md-3">Detalle</label>
		                            <div class="col-md-4">
		                                <textarea class="form-control" rows="3" name="remarks"></textarea>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="tab-pane" id="tab3">
		                        <h3 class="block">Configuración de servidor</h3>
		                        <div class="form-group">
		                            <label class="control-label col-md-3">Hosting Holder Name
		                                <span class="required" aria-required="true"> * </span>
		                            </label>
		                            <div class="col-md-4">
									<select name="country" id="hosting" class="form-control select2-hidden-accessible" tabindex="-1" aria-hidden="true">
		                                    <option value="">Ninguno</option>
		                                    <option value="1">Amazon AWS</option>
											<option value="1">Heroku</option>
											<option value="1">BlueHost</option>
											<option value="1">Digital Ocean</option>
											<option value="1">Otro</option>
		                            </select>
		                            <span class="help-block"> </span>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="control-label col-md-3">IP
		                                <span class="required" aria-required="true"> * </span>
		                            </label>
		                            <div class="col-md-4">
		                                <input type="text" class="form-control" name="">
		                                <span class="help-block"> </span>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="control-label col-md-3">Base de datos
		                                <span class="required" aria-required="true"> * </span>
		                            </label>
		                            <div class="col-md-4">
									<select name="country" id="db" class="form-control select2-hidden-accessible" tabindex="-1" aria-hidden="true">
		                                    <option value="">Base de datos</option>
		                                    <option value="1">MySql</option>
											<option value="1">PosgreSql</option>
											<option value="1">MariaDB</option>
											<option value="1">MongoDB</option>
											<option value="1">Oracle</option>
		                            </select>
		                            <span class="help-block"> </span>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="control-label col-md-3">Web Server
		                                <span class="required" aria-required="true"> * </span>
		                            </label>
		                            <div class="col-md-4">
									<select name="country" id="webserver" class="form-control select2-hidden-accessible" tabindex="-1" aria-hidden="true">
		                                    <option value="">Web Server</option>
		                                    <option value="1">Apache</option>
											<option value="1">Ngix</option>
											<option value="1">GrassFish</option>
		                            </select>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="control-label col-md-3">Payment Options
		                                <span class="required" aria-required="true"> * </span>
		                            </label>
		                            <div class="col-md-4">
		                                <div class="checkbox-list">
		                                    <label>
		                                        <div class="checker"><span><input type="checkbox" name="payment[]" value="1" data-title="Auto-Pay with this Credit Card."></span></div> Auto-Pay with this Credit Card </label>
		                                    <label>
		                                        <div class="checker"><span><input type="checkbox" name="payment[]" value="2" data-title="Email me monthly billing."></span></div> Email me monthly billing </label>
		                                </div>
		                                <div id="form_payment_error"> </div>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="tab-pane" id="tab4">
		                        <h3 class="block">Confirmar datos</h3>
		                        <h4 class="form-section">Account</h4>
		                        <div class="form-group">
		                            <label class="control-label col-md-3">Nombre:</label>
		                            <div class="col-md-4">
		                                <p class="form-control-static" data-display="nombre"> </p>
		                            </div>
		                        </div>
								<div class="form-group">
		                            <label class="control-label col-md-3">Url:</label>
		                            <div class="col-md-4">
		                                <p class="form-control-static" data-display="url"> </p>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="control-label col-md-3">Email:</label>
		                            <div class="col-md-4">
		                                <p class="form-control-static" data-display="email"> </p>
		                            </div>
		                        </div>
		                        <h4 class="form-section">Detalle</h4>
		                        <div class="form-group">
		                            <label class="control-label col-md-3">Ruta:</label>
		                            <div class="col-md-4">
		                                <p class="form-control-static" data-display="ruta"> </p>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="control-label col-md-3">Framework:</label>
		                            <div class="col-md-4">
		                                <p class="form-control-static" data-display="frame"> </p>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="control-label col-md-3">Phone:</label>
		                            <div class="col-md-4">
		                                <p class="form-control-static" data-display="phone"> </p>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="control-label col-md-3">Address:</label>
		                            <div class="col-md-4">
		                                <p class="form-control-static" data-display="address"> </p>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="control-label col-md-3">City/Town:</label>
		                            <div class="col-md-4">
		                                <p class="form-control-static" data-display="city"> </p>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="control-label col-md-3">Lenguaje Backend:</label>
		                            <div class="col-md-4">
		                                <p class="form-control-static" data-display="backend"> </p>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="control-label col-md-3">Remarks:</label>
		                            <div class="col-md-4">
		                                <p class="form-control-static" data-display="remarks"> </p>
		                            </div>
		                        </div>
		                        <h4 class="form-section">Billing</h4>
		                        <div class="form-group">
		                            <label class="control-label col-md-3">Card Holder Name:</label>
		                            <div class="col-md-4">
		                                <p class="form-control-static" data-display="card_name"> </p>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="control-label col-md-3">Card Number:</label>
		                            <div class="col-md-4">
		                                <p class="form-control-static" data-display="card_number"> </p>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="control-label col-md-3">CVC:</label>
		                            <div class="col-md-4">
		                                <p class="form-control-static" data-display="card_cvc"> </p>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="control-label col-md-3">Expiration:</label>
		                            <div class="col-md-4">
		                                <p class="form-control-static" data-display="card_expiry_date"> </p>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="control-label col-md-3">Payment Options:</label>
		                            <div class="col-md-4">
		                                <p class="form-control-static" data-display="payment[]"> </p>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </div>
		            <div class="form-actions">
		                <div class="row">
		                    <div class="col-md-offset-3 col-md-9">
		                        <a href="javascript:;" class="btn default button-previous disabled" style="display: none;">
		                            <i class="fa fa-angle-left"></i> Atrás </a>
		                        <a href="javascript:;" class="btn btn-outline green button-next"> Continuar
		                            <i class="fa fa-angle-right"></i>
		                        </a>
		                        <a href="javascript:;" class="btn green button-submit" style="display: none;"> Confirmar
		                            <i class="fa fa-check"></i>
		                        </a>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </form>
		</div>
	</div>
</div>
<!--MODAL -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Seleccionar Impuesto</h4>
            </div>
            <div class="modal-body">
               <input type="hidden" name="medida_producto" value="1">
						    	<div class="form-group">
							    	<label class="control-label">Impuesto</label>
							    	<div class="input-group">
							    		<span class="input-group-addon">
											<i class="fa fa-truck"></i>			
										</span>
										<select class="form-control select2me" name="impuesto" data-placeholder="Selecciona Impuesto...">
										</select>
									</div>
						    	</div>
            </div>
            <div class="modal-footer">
                <button type="button" id="btn-actualizar-stock" class="btn blue">Guardar</button>
                <button type="button" class="btn default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
</form>

    <!-- /.modal-dialog -->
</div>
</body>

<?php require(TEMPLATE.'comun/footer.php'); ?>
<?php require(TEMPLATE.'comun/js.php'); ?>
<script type="text/javascript" src="<?php echo TEMPLATE; ?>plugins/summernote/summernote.min.js"></script>
<script type="text/javascript" src="<?php echo TEMPLATE; ?>plugins/autocomplete/dist/jquery.autocomplete.js"></script>
<script type="text/javascript" src="<?php echo TEMPLATE; ?>js/jquery.bootstrap.wizard.js"></script>
<script type="text/javascript" src="<?php echo TEMPLATE; ?>js/jquery.validate.js"></script>
<script type="text/javascript" src="<?php echo TEMPLATE; ?>js/select2.js"></script>
<script type="text/javascript" src="<?php echo TEMPLATE; ?>js/additional-methods.js"></script>
<script type="text/javascript" src="<?php echo TEMPLATE; ?>js/app.js"></script>
<script type="text/javascript" src="<?php echo TEMPLATE; ?>js/ingresar-producto.js"></script>
<script type="text/javascript" src="<?php echo TEMPLATE; ?>js/form-wizard.min.js"></script>

</body>
<!-- END BODY -->


<!-- END BODY -->

</html>