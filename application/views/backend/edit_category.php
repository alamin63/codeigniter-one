
				<div class="col-md-12 col-sm-12 col-xs-12 grid-margin stretch-card">
	                <div class="card">
	                  <div class="card-body">
	                    <h4 class="card-title">Edit Category</h4>
	                    <form class="forms-sample" action="<?php echo base_url();?>update-category" method="post">
	                      <div class="form-group">
	                        <label for="exampleInputName1">Category Name</label>
	                        <input type="text" name="name" value="<?php echo $data_by_id->category_name;?>" class="form-control" id="exampleInputName1" placeholder="Category Name" />
	                      </div>
	                      <div class="form-group">
	                        <label for="exampleTextarea1">Category Description</label>
	                        <textarea name="description" value="<?php echo $data_by_id->category_description;?>" 
	                          class="form-control"
	                          id="exampleTextarea1"
	                          rows="10"
	                        ></textarea>
	                      </div>
	                      <div class="form-group">
	                        <input type="hidden" name="category_id" value="<?php echo $data_by_id->category_id;?>" class="form-control" id="exampleInputName1" placeholder="Category Name" />
	                      </div>
	                      <button type="submit" class="btn btn-primary mr-2"> Submit </button>
	                      <button class="btn btn-light">Cancel</button>
	                    </form>
	                  </div>
	                </div>
	 			</div>