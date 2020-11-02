@extends('template_admin.admin')

@section('content')
<h3>Data User</h3>
 <form action="{!! route('saveuser') !!}" id="form-user">
 @csrf
  <div class="form-group col-lg-4">
    <label for="username">username:</label>
    <input type="text" class="form-control" name="username" required>
	<input type="hidden" class="form-control" name="id">
  </div>
  <div class="form-group col-lg-4">
    <label for="password">password:</label>
    <input type="password" class="form-control" name="password" required>
  </div>
  <div class="form-group col-lg-4">
    <label for="name">name:</label>
    <input type="text" class="form-control" name="name" required>
  </div>
  <div class="form-group col-lg-4">
    <label for="email">email:</label>
    <input type="email" class="form-control" name="email" required>
  </div>
  <div class="form-group col-lg-4">
    <label for="bank_name">bank name:</label> 
    <input type="text" class="form-control" name="bank_name" required>
  </div>
  <div class="form-group col-lg-4">
    <label for="acc_name">acc name:</label>
    <input type="text" class="form-control" name="acc_name" required>
  </div>
    <div class="form-group col-lg-4">
    <label for="acc_no">acc no:</label>
    <input type="text" class="form-control" name="acc_no" required>
  </div>
  <div class="form-group col-lg-4">
    <label for="coin">coin:</label>
    <input type="text" class="form-control" name="coin" required>
  </div>
  <div class="form-group col-lg-4">
    <label for="ref_name">ref name:</label>
    <input type="text" class="form-control" name="ref_name" required>
  </div>
  <div class="form-group col-lg-4">
    <label for="status">status:</label>
    <input type="status" class="form-control" name="status" required>
  </div>
  <div class="form-group col-lg-4">
    <label for="amount">amount:</label>
    <input type="number" class="form-control" name="amount" required>
  </div>
  <div class="form-group col-lg-4">
    <label for="payout">payout:</label>
    <input type="number" class="form-control" name="payout" required>
  </div>
  <div class="form-group col-xs-12">
    <button type="submit" class="btn btn-success">Process</button>
  </div>
  
</form> 
    <table class="table table-bordered" id="user-table" >
        <thead>
            <tr>
                <th>No</th>
				<th>action</th>
                <th>username</th>
				<th>password</th>
                <th>name</th>
				<th>email id</th>
                <th>bank name</th>
				<th>acc name</th>
				<th>acc no</th>
                <th>coin</th>
				<th>ref name</th>
                <th>status</th>
				<th>amount</th>
				<th>payout</th>
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
			   async: false,
			   data: form.serialize(), // serializes the form's elements.
			    beforeSend: function() {
					$('body').css('background-image', 'url("{!! asset('gif/ajax_loader.gif') !!}")');
				},
			   success: function(data)
			   {
				   $('body').css('background-image', '');
				   $('#user-table').DataTable().draw();
				   $('[name ="id"]').val("");
				   $('form').trigger("reset");
			   }
		});

		
	});
	
	$('#user-table').on('xhr.dt', function ( e, settings, json, xhr ) {
        $('body').css('background-image', '');
    } );
	
    $('#user-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
		  url: '{!! route('datatables.user') !!}',
		  type: "get",
		  async: false,
		  beforeSend: function() {
			 $('body').css('background-image', 'url("{!! asset('gif/ajax_loader.gif') !!}")');
		  }
		},
		oLanguage: {sProcessing: "&nbsp;"},
        columns: [
		    { data: null,"sortable": false, 
			   render: function (data, type, row, meta) {
						 return meta.row + meta.settings._iDisplayStart + 1;
						}  
			},
			{ data: 'action', name: 'action' },
            { data: 'username', name: 'username' },
            { data: 'password', name: 'password' },
			{ data: 'name', name: 'name' },
			{ data: 'email', name: 'email' },
            { data: 'bank_name', name: 'bank_name' },
			{ data: 'acc_name', name: 'acc_name' },
            { data: 'acc_no', name: 'acc_no' },
			{ data: 'coin', name: 'coin' },
            { data: 'ref_name', name: 'ref_name' },
			{ data: 'status', name: 'status' },
            { data: 'amount', name: 'amount' },
			{ data: 'payout', name: 'payout' }
        ],
		scrollY:        "300px",
        scrollX:        true,
        scrollCollapse: true,
        columnDefs: [
			{ width: 50, targets: 0 },
            { width: 150, targets: 1 },
			{ width: 150, targets: 2 },
			{ width: 150, targets: 3 },
			{ width: 150, targets: 4 },
			{ width: 150, targets: 5 },
			{ width: 150, targets: 6 },
			{ width: 150, targets: 7 },
			{ width: 150, targets: 8 },
			{ width: 150, targets: 9 },
			{ width: 150, targets: 10 },
			{ width: 150, targets: 11 },
			{ width: 150, targets: 12 },
			{ width: 150, targets: 13 },
        ],
        fixedColumns: true
    });
	
});
function getData(id){
		
		$.ajax({
			   type: "GET",
			   url: '{!! route('datatables.getDataById') !!}',
			   async: false,
			    data: {id:id}, // serializes the form's elements.
			    beforeSend: function() {
					$('body').css('background-image', 'url("{!! asset('gif/ajax_loader.gif') !!}")');
				},
			   success: function(result)
			   {
				   $('body').css('background-image', '');
				   jQuery.each(result, function(k,v) {
						$('[name ="'+k+'"]').val(v);
				   });
			   }
		});
		
}

function deleteData(id){
		
		$.ajax({
			   type: "GET",
			   url: '{!! route('datatables.deleteData') !!}',
			   async: false,
			    data: {id:id}, // serializes the form's elements.
			    beforeSend: function() {
					$('body').css('background-image', 'url("{!! asset('gif/ajax_loader.gif') !!}")');
				},
			   success: function(result)
			   {
				   $('body').css('background-image', '');
				   $('#user-table').DataTable().draw();
			   }
		});
		
	}
</script>
@endpush
