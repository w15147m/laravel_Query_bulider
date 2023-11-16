<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        /* ... Your existing styles ... */

        /* Add styles for the <a> tags */
        .custom-table a {
            display: inline-block;
            padding: 10px 16px;
            text-decoration: none;
            border-radius: 5px;
            color: #fff;
        }

        /* Style for "show data" button */
        .custom-table a.show-data {
            background-color: #4CAF50;
        }

        /* Style for "update" button */
        .custom-table a.update {
            background-color: #007bff;
        }

        /* Style for "delete" button */
        .custom-table a.delete {
            background-color: #dc3545;
        }
        .show-dat{
            background-color: #4CAF50;
            display: inline-block;
            padding: 10px 16px;
            text-decoration: none;
            border-radius: 5px;
            color: #fff;
        }

        /* Hover styles for all buttons */
        .custom-table a:hover {
            opacity: 0.8;
        }

        /* Add your CSS styles here */
        .custom-table {
            width: 80%;
            margin: 20px auto; /* Center the table */
            border-collapse: collapse;
        }

        .custom-table th, .custom-table td {
            border: 1px solid #ddd;
            padding: 12px; /* Increased padding for better readability */
            text-align: left;
        }

        .custom-table th {
            background-color: #f2f2f2;
            font-size: 16px; /* Increased font size for th elements */
        }

        .custom-table tr:hover {
            background-color: #f5f5f5;
        }

        /* Add styles for the <a> tags */
        .custom-table a {
            display: inline-block;
            padding: 10px 16px;
            text-decoration: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: #fff;
        }

        .custom-table a:hover {
            background-color: #45a049;
        }
    </style>


    <title>Show users</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>Show data</h1>
         <a href="/adduser" class="show-dat">add_new</a>

                <table class="table table-bordered table-striped custom-table">

                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Email</th>
                        <th>Date</th>
                        <th>View</th>
                        <th>update</th>
                        <th>Delete</th>
                    </tr>
                    @foreach ($key as $id => $users)
                        <tr>
                            <td>{{$users->id}}</td>
                            <td>{{$users->name}}</td>
                            <td>{{$users->aga}}</td>
                            <td>{{$users->email}}</td>
                            <td>{{$users->created_at}}</td>
                            <!-- ... Your existing HTML ... -->
                            <td><a href="{{ route('view.update', $users->id) }}" class="show-data">View</a></td>
                            <td><a href="{{ route('update_page', $users->id) }}" class="update">update</a></td>
                            <td><a href="" class="delete">delete</a></td>
                            <!-- ... Your existing HTML ... -->

                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</body>
</html>
