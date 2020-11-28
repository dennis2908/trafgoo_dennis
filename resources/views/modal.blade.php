<div class="modal fade" id="tesModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <!-- header-->
      <div class="modal-header">
        <button class="close" data-dismiss="modal"><span>&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Change Password</h4>
      </div>
      <!--body-->
      <div class="modal-body">
         <form action="{{route('changePassword')}}" method="POST" id="form_modal">
  @csrf
  <div class="form-group">
    <label for="password">New Password:</label>
    <input type="password" minlength=8 class="form-control" name="password" required>
  </div>
  <button type="submit" id="my_submit" class="btn btn-default">Submit</button>
</form> 
<div class="alert alert-success" role="alert">
  Successfully Change Password
</div>
      </div>
      <!--footer-->
      <div class="modal-footer">
        <button class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
        $(function(){
			$('.alert-success').hide();
			$('#password').focus();
          $("#form_modal").submit(function(){
            $.ajax({
              url:$(this).attr("action"),
              data:$(this).serialize(),
              type:$(this).attr("method"),
              dataType: 'html',
              beforeSend: function() {
				$("#my_submit").attr('disabled', 'disabled').html("Loading...");
              },
              complete:function() {
				$("#my_submit").removeAttr('disabled').html('submit');
				$('.alert-success').show();
				
              },
              success:function(hasil) {
				  $('#form_modal').trigger("reset");
				  			$('#password').focus();
                setTimeout(function(){
                    $('.alert-success').hide();
                  },1000);
              }
            })
            return false;
          });
        });
      </script>