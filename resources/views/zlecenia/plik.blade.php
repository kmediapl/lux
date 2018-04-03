<?php
         echo Form::open(array('url' => '/uploads','files'=>'true','method'=>'post'));
         echo 'Select the file to upload.';
         echo Form::file('plik');
         echo Form::submit('Upload File');
         echo Form::close();
      ?>