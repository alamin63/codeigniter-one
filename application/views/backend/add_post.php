	<div class="container">
		<form>
			<div class="row">
				<div class="col-md-8 col-sm-8 col-xs-12 grid-margin stretch-card">
	                <div class="card">
	                  <div class="card-body">
	                    <h4 class="card-title">Add Post</h4>
	                    <div class="forms-sample">
	                      <div class="form-group">
	                        <label for="exampleInputName1">Title</label>
	                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Title" />
	                      </div>
	                      <div class="form-group">
	                        <label for="exampleTextarea1">Textarea</label>
	                        <textarea
	                          class="form-control"
	                          id="exampleTextarea1"
	                          rows="10"
	                        ></textarea>
	                      </div>
	                    </div>
	                  </div>
	                </div>
	 			</div>			
	 			<div class="col-md-4 col-sm-4 col-xs-12 grid-margin stretch-card">
	                <div class="card">
	                  <div class="card-body">
	                    <div class="forms-sample">
	                      <div class="form-group">
	                        <label for="exampleSelectGender">Category</label>
	                        <select class="form-control" id="exampleSelectGender">
	                          <option value="">Choose Category ...</option>
	                          <?php foreach ($category_info as $category) { ?>
	                          <option value="<?php echo $category->category_id; ?>"><?php echo $category->category_name; ?></option>
	                          <?php } ?>
	                        </select>
	                      </div>
	                      <div class="form-group">
	                        <label>File upload</label>
	                        <input type="file" name="img[]" class="file-upload-default" />
	                        <div class="input-group col-xs-12">
	                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image" />
	                          <span class="input-group-append">
	                            <button class="file-upload-browse btn btn-primary" type="button"> Upload </button>
	                          </span>
	                        </div>
	                      </div>
	                      <div class="form-group">
	                        <label for="exampleInputCity1">Icon</label>
	                        <input type="text" class="form-control" id="exampleInputCity1" placeholder="fa fa-twitter" />
	                      </div>
	                      <button type="submit" class="btn btn-primary mr-2"> Submit </button>
	                      <button class="btn btn-light">Cancel</button>
	                    </div>
	                  </div>
	                </div>
	 			</div>
			</div>
 		</form>
	</div>