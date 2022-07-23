<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Manage Category</h4>
                      <p>
                        <?php
                          $message = $this->session->userdata('message');
                          if($message){
                            echo "<span class='alert alert-success'>$message</span>";
                            $this->session->unset_userdata('message');
                          }
                        ?>
                      </p>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>SN.</th>
                            <th>Category Name</th>
                            <th>Category Description</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                              foreach ($all_category_info as  $category) {
                          ?>
                            <tr>
                              <td class="py-1">
                                <?php echo $category->category_id; ?>
                              </td>
                              <td><?php echo $category->category_name; ?></td>
                              <td><?php echo $category->category_description; ?></td>
                              <td>
                              	<a href="<?php echo base_url();?>edit-category/<?php echo $category->category_id; ?>">Edit</a> ||
                              	<a href="#">Delete</a>
                              </td>
                            </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>