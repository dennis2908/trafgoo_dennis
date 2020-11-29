@extends('template_admin.admin')

@section('content')
<h3>Data Message</h3>
 <form action="{!! route('savedatamessage') !!}" id="form-message">
 @csrf
  <div class="form-group col-lg-4">
    <label for="username">First Name:</label>
    <input type="text" class="form-control" name="fname" required>
	<input type="hidden" class="form-control" name="id">
  </div>
  <div class="form-group col-lg-4">
    <label for="text">Last Name:</label>
    <input type="text" class="form-control" name="lname" required>
  </div>
  <div class="form-group col-lg-4">
    <label for="email">Email:</label>
    <input type="email" class="form-control" name="email" required>
  </div>
  <div class="form-group col-lg-4">
    <label for="subject">Subject:</label>
    <input type="text" class="form-control" name="subject" required>
  </div>
  <div class="form-group col-lg-4">
    <label for="message">Message:</label> 
    <textarea name="message" id="message" cols="30" rows="10" class="form-control" required></textarea>
  </div>
  <div class="form-group col-xs-12">
    <button type="submit" class="btn btn-success">Process</button>
  </div>
  
</form> 
    <table class="table table-bordered" id="message-table" >
        <thead>
            <tr>
                <th>No</th>
				<th>action</th>
                <th>First Name</th>
				<th>Last Name</th>
                <th>Email</th>
				<th>Subject</th>
                <th>Message</th>
            </tr>
        </thead>
    </table>
@stop
@push('scripts')
<script>
$(function() {
	$("#form-message").submit(function(e) {

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
				   $('#message-table').DataTable().draw();
				   $('[name ="id"]').val("");
				   $('form').trigger("reset");
			   }
		});

		
	});
	
	$('#message-table').on('xhr.dt', function ( e, settings, json, xhr ) {
        $('body').css('background-image', '');
    } );
	
    $('#message-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
		  url: '{!! route('datatables.message-data') !!}',
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
            { data: 'fname', name: 'fname' },
            { data: 'lname', name: 'lname' },
			{ data: 'email', name: 'email' },
            { data: 'subject', name: 'subject' },
			{ data: 'message', name: 'message' }
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
			{ width: 350, targets: 6 }
        ],
        fixedColumns: true
    });
	
});
function getData(id){
		
		$.ajax({
			   type: "GET",
			   url: '{!! route('datatables.getDataMessageById') !!}',
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
			   url: '{!! route('datatables.deleteDataMessage') !!}',
			   async: false,
			    data: {id:id}, // serializes the form's elements.
			    beforeSend: function() {
					$('body').css('background-image', 'url("{!! asset('gif/ajax_loader.gif') !!}")');
				},
			   success: function(result)
			   {
				   $('body').css('background-image', '');
				   $('#message-table').DataTable().draw();
			   }
		});
		
	}
</script>
@endpush
