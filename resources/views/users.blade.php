<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
        h1{
            color: red;
            text-align: center;
        }
        
        table, th, td {
          border: 1px solid black;
        }
        </style>
</head>


<body style="background-color:powderblue;">
    

<h1 color="red">User Data</h1>
<p style="background-color:tomato;">This is exxel</p>
<table >
    <thead>

    <tr>
        <th>Name</th>
        <th>CPM-ID</th>
        <th>Email</th>
        <th>NRC</th>
        <th>Contact No</th>
        <th>Status</th>

    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{$user->cmp}}</td>
            <td>{{ $user->email }}</td>
            <td>{{$user->nrc}}</td>
            <td>{{$user->ph_no}}</td>

            <td>{{$user->status}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>