
    <div class="container-scroller">
      <?php //include('leftsidebar.php'); ?> <!-- or -->
      <?php $this->load->view('backend/leftsidebar'); ?>
        <?php $this->load->view('backend/header'); ?>
        <div class="main-panel">
          <div class="content-wrapper pb-0">
            <div class="row">
                <?php echo $main_content; ?>
            </div>
          </div>
          <?php $this->load->view('backend/footer'); ?>
        </div>
        <!-- main-panel ends -->
    </div>
<?php $this->load->view('backend/script'); ?>