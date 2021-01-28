<nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #8d71db; box-shadow: 0px 1px 10px 4px rgba(0, 0, 0, 0.473);">
    <div class="container-fluid">
        <a class="navbar-brand" style="margin-right: 150px;" href="/">PHP-exam</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
								data-bs-target="#navbarSupportedContent"
								aria-controls="navbarSupportedContent"
								aria-expanded="false"
								aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<?php
										if(isset($_SESSION["user"])){
											echo '<li class="nav-item">
											<a class="nav-link" style="color: #fff; margin-right: 25px" href="/">Главная</a>
									</li>';
										}
										?>
                <?php
                    if(isset($_SESSION["user"])){
                        echo '<li class="nav-item">
                                 <a class="nav-link" style="color: #fff;" href="/session/index.php">Экспертная сессия</a>
                              </li>';
                    }
                ?>
            </ul>
            <form class="d-flex">
                <?php
                    if(isset($_SESSION["user"])){
                        echo '<div class = "d-flex align-items-center justify-content-center">';
                        echo '<p class = "mb-0 me-3" style="color: white;" >Добрый день: '.$_SESSION["user"]["name"].'</p>';
												echo '<a class="btn btn-danger" style="border-radius: 50%; min-width: 35px; min-height: 35px; max-width: 35px; max-height: 35px; padding: 0; padding-top: 1px" href="/php/auth/logout.php">
												<?xml version="1.0"?>
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="18" height="30" x="0" y="0" viewBox="0 0 511.996 511.996" style="enable-background:new 0 0 40 40;  max-width: 40px; max-height: 40px;" xml:space="preserve" class=""><g>
												<g xmlns="http://www.w3.org/2000/svg">
													<g>
														<g>
															<path d="M349.85,62.196c-10.797-4.717-23.373,0.212-28.09,11.009c-4.717,10.797,0.212,23.373,11.009,28.09     c69.412,30.324,115.228,98.977,115.228,176.035c0,106.034-85.972,192-192,192c-106.042,0-192-85.958-192-192     c0-77.041,45.8-145.694,115.192-176.038c10.795-4.72,15.72-17.298,10.999-28.093c-4.72-10.795-17.298-15.72-28.093-10.999     C77.306,99.275,21.331,183.181,21.331,277.329c0,129.606,105.061,234.667,234.667,234.667     c129.592,0,234.667-105.068,234.667-234.667C490.665,183.159,434.667,99.249,349.85,62.196z" fill="#ffffff" data-original="#000000" style="" class=""/>
															<path d="M255.989,234.667c11.782,0,21.333-9.551,21.333-21.333v-192C277.323,9.551,267.771,0,255.989,0     c-11.782,0-21.333,9.551-21.333,21.333v192C234.656,225.115,244.207,234.667,255.989,234.667z" fill="#ffffff" data-original="#000000" style="" class=""/>
														</g>
													</g>
												</g>
												<g xmlns="http://www.w3.org/2000/svg">
												</g>
												<g xmlns="http://www.w3.org/2000/svg">
												</g>
												<g xmlns="http://www.w3.org/2000/svg">
												</g>
												<g xmlns="http://www.w3.org/2000/svg">
												</g>
												<g xmlns="http://www.w3.org/2000/svg">
												</g>
												<g xmlns="http://www.w3.org/2000/svg">
												</g>
												<g xmlns="http://www.w3.org/2000/svg">
												</g>
												<g xmlns="http://www.w3.org/2000/svg">
												</g>
												<g xmlns="http://www.w3.org/2000/svg">
												</g>
												<g xmlns="http://www.w3.org/2000/svg">
												</g>
												<g xmlns="http://www.w3.org/2000/svg">
												</g>
												<g xmlns="http://www.w3.org/2000/svg">
												</g>
												<g xmlns="http://www.w3.org/2000/svg">
												</g>
												<g xmlns="http://www.w3.org/2000/svg">
												</g>
												<g xmlns="http://www.w3.org/2000/svg">
												</g>
												</g></svg>
												</a>';
                        echo '</div>';
                    }else{
                        echo '<a class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" style="border-radius: 50%; width: 35px; height: 35px; padding: 0; padding-top: 1px">
												<?xml version="1.0"?>
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="18" height="30" x="0" y="0" viewBox="0 0 511.996 511.996" style="enable-background:new 0 0 40 40;  max-width: 40px; max-height: 40px;" xml:space="preserve" class=""><g>
												<g xmlns="http://www.w3.org/2000/svg">
													<g>
														<g>
															<path d="M349.85,62.196c-10.797-4.717-23.373,0.212-28.09,11.009c-4.717,10.797,0.212,23.373,11.009,28.09     c69.412,30.324,115.228,98.977,115.228,176.035c0,106.034-85.972,192-192,192c-106.042,0-192-85.958-192-192     c0-77.041,45.8-145.694,115.192-176.038c10.795-4.72,15.72-17.298,10.999-28.093c-4.72-10.795-17.298-15.72-28.093-10.999     C77.306,99.275,21.331,183.181,21.331,277.329c0,129.606,105.061,234.667,234.667,234.667     c129.592,0,234.667-105.068,234.667-234.667C490.665,183.159,434.667,99.249,349.85,62.196z" fill="#ffffff" data-original="#000000" style="" class=""/>
															<path d="M255.989,234.667c11.782,0,21.333-9.551,21.333-21.333v-192C277.323,9.551,267.771,0,255.989,0     c-11.782,0-21.333,9.551-21.333,21.333v192C234.656,225.115,244.207,234.667,255.989,234.667z" fill="#ffffff" data-original="#000000" style="" class=""/>
														</g>
													</g>
												</g>
												<g xmlns="http://www.w3.org/2000/svg">
												</g>
												<g xmlns="http://www.w3.org/2000/svg">
												</g>
												<g xmlns="http://www.w3.org/2000/svg">
												</g>
												<g xmlns="http://www.w3.org/2000/svg">
												</g>
												<g xmlns="http://www.w3.org/2000/svg">
												</g>
												<g xmlns="http://www.w3.org/2000/svg">
												</g>
												<g xmlns="http://www.w3.org/2000/svg">
												</g>
												<g xmlns="http://www.w3.org/2000/svg">
												</g>
												<g xmlns="http://www.w3.org/2000/svg">
												</g>
												<g xmlns="http://www.w3.org/2000/svg">
												</g>
												<g xmlns="http://www.w3.org/2000/svg">
												</g>
												<g xmlns="http://www.w3.org/2000/svg">
												</g>
												<g xmlns="http://www.w3.org/2000/svg">
												</g>
												<g xmlns="http://www.w3.org/2000/svg">
												</g>
												<g xmlns="http://www.w3.org/2000/svg">
												</g>
												</g></svg></a>';
                    }
                ?>
            </form>
        </div>
    </div>
</nav>