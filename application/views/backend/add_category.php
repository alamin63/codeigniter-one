              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add New Category</h4>
                    <p>
                        <?php
                            $message = $this->session->userdata('message');
                            if($message){
                                echo "<span class='alert alert-success'> $message </span>";
                                $this->session->unset_userdata('message');
                            }
                        ?>
                    </p>
                    <form class="forms-sample" action="<?php echo base_url();?>save-category" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputName1">Category Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Name" />
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Category Description</label>
                        <textarea name="description" 
                          class="form-control"
                          id="exampleTextarea1"
                          rows="10"
                        ></textarea>
                      </div>
                      <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="category_image" />
                      </div>
                      <button type="submit" class="btn btn-primary mr-2"> Save </button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>