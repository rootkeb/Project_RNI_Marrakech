<div class="sidebar sidebar-main">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user-material">
						<div class="category-content">
							<div class="sidebar-user-material-content">
								<a href="#"><img src="images/<?php echo $a->getImg(); ?>" class="img-circle img-responsive" alt=""></a>
								<h6><?php
                                                                if(isset($a))
                                                                  echo strtoupper($a->getNom())." ".$a->getPrenom();
                                                                ?></h6>
								<span class="text-size-small"><?php
                                                                if(isset($a))
                                                                  echo $a->getAdresse();
                                                                ?></span>
							</div>
														
							<div class="sidebar-user-material-menu">
								<a href="#user-nav" data-toggle="collapse"><span>Mon compte</span> <i class="caret"></i></a>
							</div>
						</div>
						
						<div class="navigation-wrapper collapse" id="user-nav">
							<ul class="navigation">
								<li><a href="#"><i class="icon-user-plus"></i> <span>Mon profile</span></a></li>
<li class="divider"></li>
								<li><a href="#"><i class="icon-cog5"></i> <span>Account settings</span></a></li>
								<li><a href="<?php echo "logout.php" ?>"><i class="icon-switch2"></i> <span>Logout</span></a></li>
							</ul>
						</div>
					</div>
					<!-- /user menu -->


					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">

								<!-- Main -->
								<li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
								<li><a href="Accueil.php"><i class="icon-home4"></i> <span>Tableau de bord</span></a></li>
								<li>
									<a href=""><i class="icon-stack2"></i> <span>Actualités</span></a>
									<ul>
										<li><a href="AddNews.php">Ajouter une actualité</a></li>
										<li class="navigation-divider"></li>
										<li><a href="ListNews.php">Liste des Actualités </a></li>
										
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-copy"></i> <span>Événements</span></a>
									<ul>
										<li><a href="AddEvents.php">Ajouter un événement</a></li>
										<li class="navigation-divider"></li>
										<li><a href="ListEvents.php">Liste des événements</a></li></ul>
								</li>
								<li>
									<a href="#"><i class="icon-droplet2"></i> <span>Projets</span></a>
									<ul>
										<li><a href="AddProjects.php">Ajouter un projet</a></li>
									
										<li class="navigation-divider"></li>
										<li><a href="ListProjects.php">Listes de projets</a></li>
										
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-droplet2"></i> <span>Galerie</span></a>
									<ul>
										<li><a href="colors_primary.html">Images</a></li>
										<li class="navigation-divider"></li>
										<li><a href="colors_pink.html">Vidéos</a></li>
										
									</ul>
								</li>
									<li>
									<a href="#"><i class="icon-spell-check"></i> <span>Don/Cotisation</span></a>
									<ul>
											<li><a href="form_checkboxes_radios.html">Checkboxes &amp; radios</a></li>
										<li class="navigation-divider"></li>
										<li><a href="form_input_groups.html">Input groups</a></li>
									</ul>
								</li>
								
								
								<li>
									<a href="#"><i class="icon-pencil3"></i> <span>Administration</span></a>
									<ul>
										<li><a href="form_inputs_basic.html">Ajouter un admin</a></li>
										<li class="navigation-divider"></li>
										<li><a href="form_checkboxes_radios.html">Liste des admins</a></li>
										<li class="navigation-divider"></li>
										<li><a href="form_input_groups.html">Liste des membres</a></li>
										
									</ul>
								</li>
								
								
							
								
								<!-- /forms -->

						

								
								
								

								


							</ul>
						</div>
					</div>
					<!-- /main navigation -->

				</div>
			</div>