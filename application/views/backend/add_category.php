
				<div class="col-md-12 col-sm-12 col-xs-12 grid-margin stretch-card">
	                <div class="card">
	                  <div class="card-body">
	                    <h4 class="card-title">Add Category</h4>
	                    <p>
	                    	<?php
	                    		$message = $this->session->userdata('message');
	                    		if($message){
	                    			echo "<span class='alert alert-success'>$message</span>";
	                    			$this->session->unset_userdata('message');
	                    		}
	                    	?>
	                    </p>
	                    <form class="forms-sample" action="<?php echo base_url();?>save-category" method="post">
	                      <div class="form-group">
	                        <label for="exampleInputName1">Category Name</label>
	                        <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Category Name" />
	                      </div>
	                      <div class="form-group">
	                        <label for="exampleTextarea1">Category Description</label>
	                        <textarea name="description" 
	                          class="form-control"
	                          id="exampleTextarea1"
	                          rows="10"
	                        ></textarea>
	                      </div>
	                      <button type="submit" class="btn btn-primary mr-2"> Submit </button>
	                      <button class="btn btn-light">Cancel</button>
	                    </form>
	                  </div>
	                </div>
	 			</div>