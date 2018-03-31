<?php  
	if(!@$_SESSION)
	{
		session_start();
	}
?>

<!-- <?php if(@$_SESSION['error']){ ?>
<div class="text-danger text-center"><?php print $_SESSION['error']; /*$_SESSION['error'] = "";*/ ?></div>
<?php } ?>
<?php if(@$_SESSION['success']){ ?>
<div class="text-success text-center"><?php print $_SESSION['success']; $_SESSION['success'] = ""; ?></div>
<?php } ?> -->

<?php  
        if(@$_SESSION['error'])
        {
      ?>
      <script>
      swal({
        type: 'error',
        title: 'Something Wrong !',
        text: '<?php print $_SESSION['error']; ?>',
        // footer: '<a href>Why do I have this issue?</a>',
      })
      </script>
      <?php
          $_SESSION['error'] = "";
        }
      ?>

<?php  
        if(@$_SESSION['success'])
        {
      ?>
      <script>
      swal({
        type: 'success',
        title: 'Successful !',
        text: '<?php print $_SESSION['success']; ?>',
        // footer: '<a href>Why do I have this issue?</a>',
      })
      </script>
      <?php
          $_SESSION['success'] = "";
        }
      ?>
