		
		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2" data-background-color="dark">	
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
				<div class="user">
						<div class="avatar-sm float-left mr-2">
							<!-- <img src="../img/user.png" alt="..." class="avatar-img rounded-circle"> -->
							<i class="fas fa-user-cog sideicon"></i>
							<span class="sideuser"> <?php echo $user;?></span>
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									<span class="user-level"><?php echo base64_decode($_SESSION["Dsig-Types"]);?></span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<!-- <li>
										<a href="#edit">
											<span style="font-size:10.5px;" class="link-collapse"><?php echo base64_decode($_SESSION["Dsig-User"]);?></span>
										</a>
									</li> -->
									<li>
										<a href="javascript: load_salir();">
											<span style="font-size:12px; color: white;" class="link-collapse">Cerrar Sesión</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
			     	<ul class="no-bullets nav nav-primary">

						<li class="nav-item active submenu">
							<a data-toggle="collapse" href="#base">
								<i class="fas fa-layer-group"></i>
								<p>Admin</p>
								<span class="caret"></span>
							</a>
							<div class="collapse show" id="base">
								<ul class="no-bullets nav nav-collapse ">
									<li id="m2-1">
										<a href="javascript:Loadclientes();">										
										<i class="fas fa-book-open subicon" style="color: white !important; "></i>
											<span class="">Clientes</span>										
										</a>
									</li>
									<li id="m2-2">
										<a href="javascript:Loadproveedores();">										
											<i class="fas fa-address-card subicon" style="color: white !important; "></i>
											<span class="">Proveedores</span>										
										</a>
									</li>
									<li id="m2-3">
										<a href="javascript:Loadcontratos();">										
										    <i class="fas fa-file-import subicon" style="color: white !important; "></i>
											<span class="">Contratos</span>										
										</a>
									</li>
	

								</ul>
							</div>
						</li>


					</ul>

					
				</div>
			</div>
		</div>
		<!-- End Sidebar -->
