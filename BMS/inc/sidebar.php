<div class="col-md-3 product-agileinfo-grid">
								<div class="categories">
									<h3>Categories</h3>

									<?php 
									 $productbycat=$cat->getAllCat();
							      if ($productbycat) {
							      	while ($result=$productbycat->fetch_assoc()) {
								 ?>
									<ul class="tree-list-pad">
									
								
									
														<li><a href="productbycat.php?catId=<?php echo($result['catId']); ?>"><?php echo($result['catName']); ?></a></li>
													
												
										
										
									</ul>
									<?php }} ?>
								</div>
								
								<div class="cat-img">
									<img class="img-responsive " src="images/45.jpg" alt="">
								</div>
							</div>
							