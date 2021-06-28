<!DOCTYPE html>
<html>
<head>
    <title>Reports</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
</head>
<body>
    
<div class="container mt-5">
    <h2 class="mb-4">Reports</h2>
    <table class="table table-bordered yajra-datatable">
        <thead>
            <tr>
                <th>No</th>
                <th>profile id</th>
                <th>record type</th>
                <th>report_date</th>
                <th>keyword Id</th>
                <th>campaign Id</th>
                <th>adGroup Id</th>
                <th>asin</th>
                <th>sku</th>
                <th>query</th>
                <th>placement</th>
                <th>impressions</th>
                <th>averageImpressionPosition</th>
                <th>clicks</th>
                <th>cost</th>
                <th>bidPlus</th>
                <th>currency</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
</body>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
  $(function () {
    
    var table = $('.yajra-datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('reportlist') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'profile_id', name: 'profile Id'},
            {data: 'record type', name: 'record type'},
            {data: 'report_date', name: 'report_date'},
            {data: 'keywordId', name: 'keyword Id'},
            {data: 'adGroupId', name: 'adGroup Id'},
            {data: 'asin', name: 'asin'},
            {data: 'sku', name: 'sku'},
            {data: 'query', name: 'query'},
            {data: 'placement', name: 'placement'},
            {data: 'impressions', name: 'impressions'},
            {data: 'averageImpressionPosition', name: 'average Impression Position'},
            {data: 'clicks', name: 'clicks'},
            {data: 'cost', name: 'cost'},
            {data: 'bidPlus', name: 'bidPlus'},
            {data: 'currency', name: 'currency'},

            {
                data: 'action', 
                name: 'action', 
                orderable: true, 
                searchable: true
            },
        ]
    });
    
  });
</script>
</html>