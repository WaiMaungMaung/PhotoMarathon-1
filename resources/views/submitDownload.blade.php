

<h1 color="red">Submission {{$category}} Users Data</h1>
<p style="background-color:tomato;">This is exxel</p>
<table >
    <thead>

    <tr>
        <th>CPM_ID</th>
        <th>Name</th>
        <th>Camera Brand</th>
        <th>Submit At</th>
        <th>Photo Name</th>
        <th>Status</th>

    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->cpm }}</td>
            <td>{{ $user->name }}</td>

            <td>{{ $user->camera_brand }}</td>
            <td>{{$user->submitTime}}</td>
            <td>{{$user->fileName}}</td>
            
            <td>{{$user->status}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
