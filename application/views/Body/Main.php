<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<!-- <div class="text-center alert alert-warning small">
			<b>Figyelem!</b> A honlap tesztüzemben működik. Bármilyen észrevételt a <b>zsebtanar@gmail.com</b>-ra lehet küldeni.
		</div> -->
		<br />
		<div class="text-center">
			<a href="#" class="btn btn-class openall">mutat</a>&nbsp;|&nbsp;
			<a href="#" class="btn btn-class closeall">elrejt</a>
		</div><?php

		foreach ($classes as $class) {

			if ($class['show']) {?>

			<h2><?php echo $class['name'];?></h2><?php

			if (count($class['topics']) > 0) {?>

				<div class="panel-group" role="tablist"><?php

					foreach ($class['topics'] as $topic) {

						if ($topic['show']) {?>

						<div class="panel panel-default">
							<div class="panel-heading panel-heading-sm" role="tab" id="heading<?php echo $topic['id'];?>">
								<div class="panel-title">
									<a class="" role="button" data-toggle="collapse" href="#listgroup<?php echo $topic['id'];?>" aria-expanded="true" aria-controls="listgroup<?php echo $topic['id'];?>">
										<?php echo $topic['name'];?>
									</a>
								</div>
							</div><?php

							if (count($subtopics) > 0) {?>

							<div id="listgroup<?php echo $topic['id'];?>" class="panel-collapse collapse <?php echo $topic['class'];?>" role="tabpanel" aria-labelledby="heading<?php echo $topic['id'];?>" aria-expanded="true">
								<ul class="list-group"><?php

									foreach ($topic['subtopics'] as $subtopic) {

										if ($subtopic['show']) {?>

										<li class="list-group-item">
											<a href="<?php echo base_url();?>view/subtopic/<?php echo $subtopic['id'];?>">
												<?php echo $subtopic['name'];?>
											</a>										
										</li><?php

										}

									}?>

								</ul>
							</div><?php

							}?>

						</div><?php

						}

					}?>

				</div><?php
			}

			}

		}?>

	</div>
	<div class="col-md-3"></div>
</div>