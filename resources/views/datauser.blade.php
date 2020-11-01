@extends('template_admin.admin')

@section('content')
<h3>Data User</h3>
 <form action="{!! route('saveuser') !!}" id="form-user">
 @csrf
  <div class="form-group col-xs-3">
    <label for="username">username:</label>
    <input type="username" class="form-control" name="username" required>
  </div>
  <div class="form-group col-xs-3">
    <label for="password">password:</label>
    <input type="password" class="form-control" name="password" required>
  </div>
  <div class="form-group col-xs-3">
    <label for="name">name:</label>
    <input type="name" class="form-control" name="name" required>
  </div>
  <div class="form-group col-xs-3">
    <label for="fname">fname:</label> 
    <input type="fname" class="form-control" name="fname" required>
  </div>
  <div class="form-group col-xs-3">
    <label for="lname">lname:</label>
    <input type="lname" class="form-control" name="lname" required>
  </div>
  <div class="form-group col-xs-3">
    <label for="address">address:</label>
    <input type="address" class="form-control" name="address" required>
  </div>
  <div class="form-group col-xs-3">
    <label for="bname">bname:</label>
    <input type="bname" class="form-control" name="bname" required>
  </div>
  <div class="form-group col-xs-3">
    <label for="acname">acname:</label>
    <input type="acname" class="form-control" name="acname" required>
  </div>
  <div class="form-group col-xs-3">
    <label for="acnum">acnum:</label>
    <input type="acnum" class="form-control" name="acnum" required>
  </div>
  <div class="form-group col-xs-3">
    <label for="coin">coin:</label>
    <input type="number" class="form-control" name="coin" required>
  </div>
  <div class="form-group col-xs-3">
    <label for="refname">refname:</label>
    <input type="refname" class="form-control" name="refname" required>
  </div>
  <div class="form-group col-xs-12">
    <button type="submit" class="btn btn-success">Submit</button>
  </div>
  
</form> 
    <table class="table table-bordered" id="user-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>username</th>
				<th>password</th>
                <th>fname</th>
				<th>lname</th>
                <th>address</th>
				<th>bname</th>
                <th>acname</th>
				<th>acnum</th>
                <th>coin</th>
				<th>refname</th>
            </tr>
        </thead>
    </table>
@stop
@push('scripts')
<script>
$(function() {
	$("#form-user").submit(function(e) {

		e.preventDefault(); // avoid to execute the actual submit of the form.

		var form = $(this);
		var url = form.attr('action');
		
		$.ajax({
			   type: "POST",
			   url: url,
			   data: form.serialize(), // serializes the form's elements.
			    beforeSend: function() {
					$('body').css('background-image', 'url("{!! asset('gif/ajax_loader.gif') !!}")');
				},
			   success: function(data)
			   {
				   $('body').css('background-image', '');
				   $('#user-table').DataTable().draw();
				   $('form').trigger("reset");
			   }
			 });

		
	});
    $('#user-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
		  url: '{!! route('datatables.user') !!}',
		  type: "get",
		  beforeSend: function() {
			 $('body').css('background-image', 'url("{!! asset('gif/ajax_loader.gif') !!}")');
		  },
		  complete: function() {
			 $('body').css('background-image', '');
		  }
		},
		oLanguage: {sProcessing: "&nbsp;"},
        columns: [
            { data: 'id', name: 'id' },
            { data: 'username', name: 'username' },
            { data: 'password', name: 'password' },
			{ data: 'fname', name: 'fname' },
            { data: 'lname', name: 'lname' },
			{ data: 'address', name: 'address' },
            { data: 'bname', name: 'bname' },
			{ data: 'acname', name: 'acname' },
            { data: 'acnum', name: 'acnum' },
			{ data: 'coin', name: 'coin' },
            { data: 'refname', name: 'refname' }
        ]
    });
});
</script>
@endpush
