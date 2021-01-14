

<h1 color="red">Enrolled {{$category}} Users Data</h1>
<p style="background-color:tomato;">This is exxel</p>
<table >
    <thead>

    <tr>
        <th>CPM_ID</th>
        <th>Name</th>
        <th>Camera Brand</th>
        <th>Enroll At</th>
        <th>Contact No</th>
        <th>Status</th>

    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->cpm }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->camera_brand }}</td>
            <td>{{$user->enroll_at}}</td>
            <td>{{$user->ph_no}}</td>
            <td>{{$user->status}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
