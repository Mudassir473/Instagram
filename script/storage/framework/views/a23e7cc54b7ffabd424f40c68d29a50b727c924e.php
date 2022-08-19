<!DOCTYPE html>
<html>
<head>
	<title><?php echo e(__('Installer')); ?></title>
	<link rel="stylesheet" href="<?php echo e(asset('frontend/css/bootstrap.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('frontend/css/fontawesome-all.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('frontend/css/font.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('frontend/css/default.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('frontend/css/style.css')); ?>">

	<link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('frontend/img/favicon.ico')); ?>">
</head>
<body>
	<?php 
	$phpversion = phpversion();
	$mbstring = extension_loaded('mbstring');
	$bcmath = extension_loaded('bcmath');
	$ctype = extension_loaded('ctype');
	$json = extension_loaded('json');
	$openssl = extension_loaded('openssl');
	$pdo = extension_loaded('pdo');
	$tokenizer = extension_loaded('tokenizer');
	$xml = extension_loaded('xml');
	$fileinfo = extension_loaded('fileinfo');
	$fopen = ini_get('allow_url_fopen');

	$info = [
		'phpversion' => $phpversion,
		'mbstring' => $mbstring,
		'bcmath' => $bcmath,
		'ctype' => $ctype,
		'json' => $json,
		'openssl' => $openssl,
		'pdo' => $pdo,
		'tokenizer' => $tokenizer,
		'xml' => $xml,
		'fileinfo' => $fileinfo,
		'allow_url_fopen' => $fopen,
	];
	?>
	<!-- requirments-section-start -->
	<section class="mt-50 mb-50">
		<div class="requirments-section">
			<div class="content-requirments d-flex justify-content-center">
				<div class="requirments-main-content">
					<div class="multi-step text-center">
						<nav>
							<ul id="progressbar">
								<li class="active">
									<div class="step-number">
										<span><?php echo e(__(1)); ?></span>
									</div>
									<div class="step-info">
										<?php echo e(__('Requirments')); ?>

									</div>
								</li>
								<li>
									<div class="step-number">
										<span><?php echo e(__(2)); ?></span>
									</div>
									<div class="step-info">
										<?php echo e(__('Verify')); ?>

									</div>
								</li>
								<li>
									<div class="step-number">
										<span><?php echo e(__(3)); ?></span>
									</div>
									<div class="step-info">
										<?php echo e(__('Configuration')); ?>

									</div>
								</li>
								<li>
									<div class="step-number">
										<span><?php echo e(__(4)); ?></span>
									</div>
									<div class="step-info">
										<?php echo e(__('Complete')); ?>

									</div>
								</li>
							</ul>
						</nav>
					</div>
					<div class="installer-header text-center">
						<h2><?php echo e(__('Requirments')); ?></h2>
						<p><?php echo e(__('Please make sure the PHP extentions listed below are installed')); ?></p>
					</div>
					<table class="table requirments">
						<thead class="thead-light">
							<tr>
								<th scope="col"><?php echo e(__('Extentions')); ?></th>
								<th scope="col"><?php echo e(__('Status')); ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php echo e(__('PHP >= 7.2.5')); ?></td>
								<td>
									<?php 
			                          if ($info['phpversion'] >= 7.2) { ?>
			                            <i class="fas fa-check"></i>
			                            <?php
			                          }else{ ?>
			                            <i class="fas fa-times"></i>
			                            <?php
			                          } 
                      				?>
								</td>
							</tr>
							<tr>
								<td><?php echo e(__('BCMath PHP Extension')); ?></td>
								<td>
									<?php 
			                          if ($info['bcmath'] == 1) { ?>
			                            <i class="fas fa-check"></i>
			                            <?php
			                          }else{ ?>
			                            <i class="fas fa-times"></i>
			                            <?php
			                          } 
			                         ?>
								</td>
							</tr>
							<tr>
								<td><?php echo e(__('Ctype PHP Extension')); ?></td>
								<td>
									<?php 
			                         if ($info['ctype'] == 1) { ?>
			                          <i class="fas fa-check"></i>
			                          <?php
			                        }else{ ?>
			                          <i class="fas fa-times"></i>
			                          <?php
			                        } 
			                        ?>
								</td>
							</tr>
							<tr>
								<td><?php echo e(__('JSON PHP Extension')); ?></td>
								<td>
								<?php 
			                       if ($info['json'] == 1) { ?>
			                        <i class="fas fa-check"></i>
			                        <?php
			                      	}else{ ?>
		                        	<i class="fas fa-times"></i>
			                        <?php
			                      } 
			                      ?>
								</td>
							</tr>
							<tr>
								<td><?php echo e(__('Mbstring PHP Extension')); ?></td>
								<td>
									<?php 
				                      if ($info['mbstring'] == 1) { ?>
				                        <i class="fas fa-check"></i>
				                        <?php
				                      }else{ ?>
				                        <i class="fas fa-times"></i>
				                        <?php
				                      } 
				                      ?>
								</td>
							</tr>
							<tr>
								<td><?php echo e(__('OpenSSL PHP Extension')); ?></td>
								<td>
									 <?php 
				                      if ($info['openssl'] == 1) { ?>
				                        <i class="fas fa-check"></i>
				                        <?php
				                      }else{ ?>
				                        <i class="fas fa-times"></i>
				                        <?php
				                      } 
				                      ?>
								</td>
							</tr>
							<tr>
								<td><?php echo e(__('PDO PHP Extension')); ?></td>
								<td>
									 <?php 
				                      if ($info['pdo'] == 1) { ?>
				                        <i class="fas fa-check"></i>
				                        <?php
				                      }else{ ?>
				                        <i class="fas fa-times"></i>
				                        <?php
				                      } 
				                      ?>
								</td>
							</tr>
							<tr>
								<td><?php echo e(__('Tokenizer PHP Extension')); ?></td>
								<td>
									<?php 
				                      if ($info['tokenizer'] == 1) { ?>
				                        <i class="fas fa-check"></i>
				                        <?php
				                      }else{ ?>
				                        <i class="fas fa-times"></i>
				                        <?php
				                      } 
				                      ?>
								</td>
							</tr>
							<tr>
								<td><?php echo e(__('XML PHP Extension')); ?></td>
								<td>
									 <?php 
				                      if ($info['xml'] == 1) { ?>
				                        <i class="fas fa-check"></i>
				                        <?php
				                      }else{ ?>
				                        <i class="fas fa-times"></i>
				                        <?php
				                      } 
				                      ?>
								</td>
							</tr>
							<tr>
								<td><?php echo e(__('fileinfo PHP Extension')); ?></td>
								<td>
									<?php 
				                      if ($info['fileinfo'] == 1) { ?>
				                        <i class="fas fa-check"></i>
				                        <?php
				                      }else{ ?>
				                        <i class="fas fa-times"></i>
				                        <?php
				                      } 
				                      ?>
								</td>
							</tr>
							<tr>
			                    <td><?php echo e(__('Fopen PHP Extension')); ?></td>
			                    <td>
			                      <?php 
			                      if ($info['allow_url_fopen'] == 1) { ?>
			                        <i class="fas fa-check"></i>
			                        <?php
			                      }else{ ?>
			                        <i class="fas fa-times"></i>
			                        <?php
			                      } 
			                      ?>
			                    </td>
			                 </tr>
						</tbody>
					</table>
					<?php 
		              $page_url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		              if ($info['phpversion'] >= 7.2 && $info['mbstring'] == 1 && $info['bcmath'] == 1 && $info['ctype'] == 1 && $info['json'] == 1 && $info['openssl'] == 1 && $info['pdo'] == 1 && $info['tokenizer'] == 1 && $info['xml'] == 1 && $info['fileinfo'] == 1 && $info['allow_url_fopen'] == 1) { ?>
		                <a href="<?php echo e(route('install.verify')); ?>" class="btn btn-primary install-btn f-right">Next</a>
		                <?php
		              }else{ ?>
		               <a href="#" class="btn btn-primary f-right disabled">next</a>
		               <?php
		             }
		             ?>
				</div>
			</div>
		</div>
	</section>

	<!-- requirments-section-end -->
</body>
</html><?php /**PATH C:\xampp\htdocs\newtong\script\resources\views/installer/index.blade.php ENDPATH**/ ?>