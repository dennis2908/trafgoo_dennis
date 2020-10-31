@extends('template_admin.admin')

@section('content')
<h3>Data User</h3>
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
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
    </table>
@stop
@push('scripts')
<script>
$(function() {
    $('#user-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('datatables.user') !!}',
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
            { data: 'refname', name: 'refname' },
            { data: 'created_at', name: 'created_at' },
            { data: 'updated_at', name: 'updated_at' }
        ]
    });
});
</script>
@endpush
