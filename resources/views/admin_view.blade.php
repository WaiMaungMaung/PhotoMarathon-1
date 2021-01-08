@extends('layouts.admin_layout')
@section('content')
@if(Auth::user()->access !=null)


    
        <div class="row justify-content-center">
            <div class="col-md-10">
                <form action="" >

                    
                    <div class="form-group row">
                        <input type="text" name="q" placeholder="Search...!" class="form-control col-10"/>
                        <input type="submit" class="btn btn-primary col-2" value="Search"/>
                    </div>
                </form>
            </div>
            <div class="col-md-10">
                <table class="table">
                    <thead class="thead-dark">
                        <td scope="col">Name</td>
                        <td scope="col">Email</td>
                        <td scope="col">NRC</td>
                        <td scope="col">Created at</td>
                        <td scope="col">Status</td>
                        <td scope="col">action</td>


                    </thead>
                    @foreach($data as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->nrc}}</td>
                        <td>{{$user->created_at}}</td>
                        {{-- <td><img src="{{url("/payslips/$user->image")}}" alt="img" id="payslip_img"></td> --}}
                        <td>{{$user->status}}</td>
                        <td>
        <a href="{{ route('member.edit', $user->id) }}" class="btn btn-primary" method="get">Detail</a>
                            


                        </td>
                       
                    </tr>
                    @endforeach
                  <p>Total User: {{$data->count()}}</p>  

                </table>
               <div class="d-flex justify-content-center">
                {{ $data->links() }}
            </div>
            
            

        </div>
    
    
    
@stop

@else 
  <script>window.location = "/";</script>
@endif




{{-- @extends('layouts.master')
@section('content')
<table border = "1" class="table table-striped">
<th>
<td>Id</td>
<td> Name</td>
<td>Email</td>
<td>NRC</td>

</th>
@foreach ($users as $user)
<tr>
<td></td>

<td>{{ $user->id }}</td>

<td>{{ $user->name }}</td>
<td>{{ $user->email }}</td>
<td>{{ $user->nrc }}</td>


</tr>
@endforeach
</table>
@stop --}}