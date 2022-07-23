<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Breeze Admin</title>
    <link rel="stylesheet" href="<?php echo base_url('backend/assets/vendors/mdi/css/materialdesignicons.min.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('backend/assets/vendors/flag-icon-css/css/flag-icon.min.cs');?>" />
    <link rel="stylesheet" href="<?php echo base_url('backend/assets/vendors/css/vendor.bundle.base.css');?>" />
    <link rel="stylesheet" href="<?php echo base_url('backend/assets/vendors/font-awesome/css/font-awesome.min.cs');?>"/>
    <link rel="stylesheet" href="<?php echo base_url('backend/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.cs');?>"/>
    <link rel="stylesheet" href="<?php echo base_url('backend/assets/css/style.css');?>" />
    <link rel="shortcut icon" href="<?php echo base_url('backend/assets/images/favicon.png'); ?>" />
  </head>
  <body>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
          <a class="sidebar-brand brand-logo" href="<?php echo base_url(); ?>dashboard"><img src="<?php echo base_url('backend/assets/images/logo.svg');?>" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="<?php echo base_url(); ?>dashboard"><img src="<?php echo base_url('backend/assets/images/logo-mini.svg'); ?>" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" target="_blank" href="<?php echo base_url();?>">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Website</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>dashboard">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#post" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              <span class="menu-title">Post</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="post">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url();?>add-post">Add Post</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url();?>all-post">All Post</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#page" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              <span class="menu-title">Page</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="page">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url();?>add-page">Add Page</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url();?>all-page">All Page</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#category" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-contacts menu-icon"></i>
              <span class="menu-title">Category</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="category">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url();?>add-category">Add Category</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url();?>manage-category">Manage Category</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#admin" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              <span class="menu-title">Admin</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="admin">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url();?>logo-change">Logo Change</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url();?>footer-color-change">Footer Color Change</a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>