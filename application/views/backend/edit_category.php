              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add New Category</h4>
                    <form class="forms-sample" action="<?php echo base_url();?>update-category" method="post">
                      <div class="form-group">
                        <label for="exampleInputName1">Category Name</label>
                        <input type="text" name="name" value="<?php echo $category_id_info->category_name; ?>" class="form-control" id="exampleInputName1" placeholder="Name" />
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Category Description</label>
                        <textarea name="description" value="<?php echo $category_id_info->category_description; ?>"
                          class="form-control"
                          id="exampleTextarea1"
                          rows="10"
                        ><?php echo $category_id_info->category_description; ?></textarea>
                      </div>
                      <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="category_image" value="<?php echo $category_id_info->category_image; ?>" />
                      </div>
                      <div class="form-group">
                        <input type="hidden" name="category_id" value="<?php echo $category_id_info->category_id; ?>" class="form-control"/>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2"> Update </button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>