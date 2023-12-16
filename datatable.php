<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.1.1/css/buttons.dataTables.min.css">

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

<!-- Include DataTables Buttons CSS and JS (optional, for buttons extension) -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.1.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.1.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

<div class="container">
	<h2 class="p-4">Make Your Todos</h2>
	<form class="p-4" action="{{ url('note/store') }}" method="post">
		@csrf
		<div class="form-group">
			<label for="note">Note:</label>
			<input type="text" class="form-control" id="note" placeholder="Enter note" name="note">
		</div>
		<div class="form-group">
			<label for="message">Message:</label>
			<textarea required class="form-control" id="message" placeholder="Enter text" name="message"></textarea>
		</div>
		<button type="submit" class="btn btn-default">Submit</button>
	</form>
	<h1 class="mt-4">DATA WITH DATABASE</h1>
	<div>
		<table id="myTable" class="display">
			<thead>
				<tr>
					<th>Id</th>
					<th>Note</th>
					<th>Message</th>
					<th>Time</th>
				</tr>
			</thead>
			<tbody>
				@foreach($notesdata as $data)
					<tr>
						<td>{{ $data->id }}</td>
						<td>{{ $data->note }}</td>
						<td>{{ $data->message }}</td>
						<td>{{ $data->created_at }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<!-- TABLE ONE ABOVE -->
	<h1 class="mt-4">DEFAULT DATA</h1>
	<div style="margin-top: 80px;">
		<!-- ajax table -->
		<table id="auditTrailTable" class="table table-striped table-bordered" style="width:100%">
	        <thead>
	            <tr>
	                <th>ID</th>
	                <th>Log Name</th>
	                <th>Description</th>
	                <th>Subject ID</th>
	                <th>Subject Type</th>
	                <th>Eksuin</th>
	                <th>Causer Type</th>
	                <th>Properties</th>
	                <th>Causer ID</th>
	            </tr>
	        </thead>
	        <tbody>
	        </tbody>
	    </table>
	</div>
	<!-- two table -->
	<h1 class="mt-4">FILTER TABLE WITH BUTTON</h1>
	<div class="mt-4" >
		<table id="example" class="display" style="width:100%">
	        <thead>
	            <tr>
	                <th>Name</th>
	                <th>Position</th>
	                <th>Office</th>
	                <th>Age</th>
	                <th>Start date</th>
	                <th>Salary</th>
	            </tr>
	        </thead>
	        <tbody>
	            <tr>
	                <td>Tiger Nixon</td>
	                <td>System Architect</td>
	                <td>Edinburgh</td>
	                <td>61</td>
	                <td>2011-04-25</td>
	                <td>$320,800</td>
	            </tr>
	            <tr>
	                <td>Garrett Winters</td>
	                <td>Accountant</td>
	                <td>Tokyo</td>
	                <td>63</td>
	                <td>2011-07-25</td>
	                <td>$0</td>
	            </tr>
	            <tr>
	                <td>Ashton Cox</td>
	                <td>Junior Technical Author</td>
	                <td>San Francisco</td>
	                <td>66</td>
	                <td>2009-01-12</td>
	                <td>$86,000</td>
	            </tr>
	            <tr>
	                <td>Cedric Kelly</td>
	                <td>Senior Javascript Developer</td>
	                <td>Edinburgh</td>
	                <td>22</td>
	                <td>2012-03-29</td>
	                <td>$433,060</td>
	            </tr>
	            <tr>
	                <td>Airi Satou</td>
	                <td>Accountant</td>
	                <td>Tokyo</td>
	                <td>33</td>
	                <td>2008-11-28</td>
	                <td>$162,700</td>
	            </tr>
	            <tr>
	                <td>Brielle Williamson</td>
	                <td>Integration Specialist</td>
	                <td>New York</td>
	                <td>61</td>
	                <td>2012-12-02</td>
	                <td>$372,000</td>
	            </tr>
	            <tr>
	                <td>Herrod Chandler</td>
	                <td>Sales Assistant</td>
	                <td>San Francisco</td>
	                <td>59</td>
	                <td>2012-08-06</td>
	                <td>$137,500</td>
	            </tr>
	            <tr>
	                <td>Rhona Davidson</td>
	                <td>Integration Specialist</td>
	                <td>Tokyo</td>
	                <td>55</td>
	                <td>2010-10-14</td>
	                <td>$327,900</td>
	            </tr>
	           
	        </tbody>
	        <tfoot>
	            <tr>
	                <th>Name</th>
	                <th>Position</th>
	                <th>Office</th>
	                <th>Age</th>
	                <th>Start date</th>
	                <th>Salary</th>
	            </tr>
	        </tfoot>
	    </table>
	</div>
</div>
<script>
	$(document).ready(function () {
		var table = $('#myTable').DataTable();
	});

	// ABOVE FIRST

	$(document).ready(function() {
	      var staticData = [
			    { "id": 1, "log_name": "Log 1", "description": "Description 1", "subject_id": 101, "subject_type": "Type A", "eksuin": "Eksuin 1", "causer_type": "Type X", "properties": "Properties 1", "causer_id": 201 },
			    { "id": 2, "log_name": "Log 1", "description": "Description 1", "subject_id": 102, "subject_type": "Type A", "eksuin": "Eksuin 1", "causer_type": "Type X", "properties": "Properties 1", "causer_id": 202 },
			    { "id": 3, "log_name": "Log 1", "description": "Description 1", "subject_id": 103, "subject_type": "Type A", "eksuin": "Eksuin 1", "causer_type": "Type X", "properties": "Properties 1", "causer_id": 203 },
			    { "id": 4, "log_name": "Log 1", "description": "Description 1", "subject_id": 104, "subject_type": "Type A", "eksuin": "Eksuin 1", "causer_type": "Type X", "properties": "Properties 1", "causer_id": 204 },
			    { "id": 5, "log_name": "Log 1", "description": "Description 1", "subject_id": 105, "subject_type": "Type A", "eksuin": "Eksuin 1", "causer_type": "Type X", "properties": "Properties 1", "causer_id": 205 },
			    { "id": 6, "log_name": "Log 1", "description": "Description 1", "subject_id": 106, "subject_type": "Type A", "eksuin": "Eksuin 1", "causer_type": "Type X", "properties": "Properties 1", "causer_id": 206 },
			     { "id": 7, "log_name": "Log 1", "description": "Description 1", "subject_id": 107, "subject_type": "Type A", "eksuin": "Eksuin 1", "causer_type": "Type X", "properties": "Properties 1", "causer_id": 207 },
			    { "id": 8, "log_name": "Log 1", "description": "Description 1", "subject_id": 108, "subject_type": "Type A", "eksuin": "Eksuin 1", "causer_type": "Type X", "properties": "Properties 1", "causer_id": 208 },
			    { "id": 9, "log_name": "Log 1", "description": "Description 1", "subject_id": 109, "subject_type": "Type A", "eksuin": "Eksuin 1", "causer_type": "Type X", "properties": "Properties 1", "causer_id": 209 },
			    { "id": 10, "log_name": "Log 1", "description": "Description 1", "subject_id": 110, "subject_type": "Type A", "eksuin": "Eksuin 1", "causer_type": "Type X", "properties": "Properties 1", "causer_id": 210 },
			    { "id": 11, "log_name": "Log 1", "description": "Description 1", "subject_id": 111, "subject_type": "Type A", "eksuin": "Eksuin 1", "causer_type": "Type X", "properties": "Properties 1", "causer_id": 211 },
			    { "id": 12, "log_name": "Log 1", "description": "Description 1", "subject_id": 112, "subject_type": "Type A", "eksuin": "Eksuin 1", "causer_type": "Type X", "properties": "Properties 1", "causer_id": 212 }
			];

	        var table = $('#auditTrailTable').DataTable({
	        "data": staticData,
	        "columns": [
	            { "data": "id" },
	            { "data": "log_name" },
	            { "data": "description" },
	            { "data": "subject_id" },
	            { "data": "subject_type" },
	            { "data": "eksuin" },
	            { "data": "causer_type" },
	            { "data": "properties" },
	            { "data": "causer_id" }
	        ],
	        "paging": true, 
	        "pageLength": 10,
	        "dom": '<"top"lfB>rt<"row"<"col-md-6"i><"col-md-6 text-end"p>>',
	        "buttons": [
	             'excel', 'pdf',
	            {
	                text: 'Export Logs',
	                extend: 'csvHtml5',
	                className: 'btn btn-secondary ml-4',
	            },
	        ]
	    });

	    $('#exportLogsBtn').on('click', function() {
	        table.button('.buttons-csv').trigger();
	    });
	});

	// two

	$(document).ready(function() {
	    var table = $('#example').DataTable({
	        dom: 'Bfrtip',
	        buttons: [
	            {
	                text: 'Filter Salaries not equal to 0',
	                action: function (e, dt, node, config) {
	                	// alert();
	                    dt.column(5).search('[^$]0', true, false).draw();
	                }
	            }
	        ]
	    });
	});
</script>