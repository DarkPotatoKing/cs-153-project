<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="container" style="margin-top: 60px;">
  <div class="row">
    <div class="col-lg-4 col-lg-offset-4">
      <h1>Create user</h1>
      <?php echo form_open(site_url('admin/users/create'),array('class'=>'form-horizontal'));?>
      <div class="form-group">
        <?php
        echo form_label('First name','first_name');
        echo form_error('first_name');
        echo form_input('first_name',set_value('first_name'),'class="form-control"');
        ?>
      </div>
      <div class="form-group">
        <?php
        echo form_label('Last name','last_name');
        echo form_error('last_name');
        echo form_input('last_name',set_value('last_name'),'class="form-control"');
        ?>
      </div>
      <div class="form-group">
        <?php
        echo form_label('Address','address');
        echo form_error('address');
        echo form_input('address',set_value('address'),'class="form-control"');
        ?>
      </div>
      <div class="form-group">
        <?php
        echo form_label('Birthday','birthday');
        echo form_error('birthday');
        echo form_input('birthday',set_value('birthday'),'class="form-control"');
        ?>
      </div>
      <div class="form-group">
        <?php
        echo form_label('Username','username');
        echo form_error('username');
        echo form_input('username',set_value('username'),'class="form-control"');
        ?>
      </div>
      <div class="form-group">
        <?php
        echo form_label('Email','email');
        echo form_error('email');
        echo form_input('email','','class="form-control"');
        ?>
      </div>
      <div class="form-group">
        <?php
        echo form_label('Password','password');
        echo form_error('password');
        echo form_password('password','','class="form-control"');
        ?>
      </div>
      <div class="form-group">
        <?php
        echo form_label('Confirm password','password_confirm');
        echo form_error('password_confirm');
        echo form_password('password_confirm','','class="form-control"');
        ?>
      </div>
      <div class="form-group">
        <?php
        if(isset($groups))
        {
          echo form_label('Groups','groups[]');
          foreach($groups as $group)
          {
            echo '<div class="checkbox">';
            echo '<label>';
            echo form_checkbox('groups[]', $group->id, set_checkbox('groups[]', $group->id));
            echo ' '.$group->name;
            echo '</label>';
            echo '</div>';
          }
        }
        ?>
      </div>
      <?php echo form_submit('submit', 'Create user', 'class="btn btn-primary btn-lg btn-block"');?>
      <?php echo form_close();?>
    </div>
  </div>
</div>
