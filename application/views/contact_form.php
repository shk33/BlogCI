<div id="contact_form">

	<h1>Contact Us</h1>
	<?php  

		echo form_open('contact/submit');
		echo form_input('name','Name','id="name"');
		echo form_input('email','Email Address','id="email"');
		$data = array('name' =>'message' , 'cols' => 35, 'rows'=>12 );
		echo form_textarea($data, 'Message','id="message"');
		echo form_submit('send','Send','id="send"');

	?>
</div>
<div id="status">

</div>
<script type="text/javascript">
	$('#send').click(function() {
		var form_data = {
			name: $('#name').val(),
			email: $('#email').val(),
			message: $('#message').val(),
			ajax: '1'
		};
		$.ajax({
			url: "<?php echo site_url('contact/submit'); ?>",
			type: "POST",
			data: form_data,
			success: function(msg){
				$('#status').html(msg);
			}
		});
		return false;
	});

</script>