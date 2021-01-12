@extends('layouts.admin_layout')
@section('content')

<nav class="navbar navbar-expand-md navbar-light shadow-sm admin-nav" id="bg-nav">

<ul class="navbar-nav mr-auto admin-ul">                                
                           
                            
    <li class="nav-item admin-li">
        <a class="nav-link" id="lin-nav-2"  href="{{ url('/member/pending')}}">{{ __('Registered ') }} </a>
    </li>
    <li class="nav-item admin-li">
        <a class="nav-link" id="lin-nav-2" href="{{ url('/member/approved')}}">{{ __('Approved List ') }} </a>
    </li>
    <li class="nav-item admin-li">
        <a class="nav-link" id="lin-nav-2" href="{{ url('/member/rejected')}}">{{ __('Reject List ') }} </a>
    </li>

</ul>
</nav>
    
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
                    <thead class="thead-light">
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">NRC</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Status</th>
                        <th scope="col">action</th>


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
            

            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <a class="btn btn-secondary" href="{{ route('export') }}">Export All User Data</a>
            </form>
            

        </div>
    
    
    
@stop






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