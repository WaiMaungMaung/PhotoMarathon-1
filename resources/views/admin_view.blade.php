@extends('layouts.admin_layout')
@section('content')
@if(Auth::user()->access !=null)
<div class="">
    <div class="row justify-content-center">
        <div class="col-2" id="admin_row">

            <a class="nav-link text-white admin-li" style="text-align: center;" href="{{ url('/member/pending')}}">{{ __('Registered ') }} </a>
        </div>
        <div class="col-2"  id="admin_row">

            <a class="nav-link text-white admin-li" style="text-align: center;" href="{{ url('/member/approved')}}">{{ __('Approved List') }} </a>
        </div>
        <div class="col-2"  id="admin_row">

            <a class="nav-link text-white admin-li" style="text-align: center;" href="{{ url('/member/approved')}}">{{ __('Reject List') }}</a>
        </div>
        <div class="col-2"></div>
        <div class="col-2">

            <form action="" >
    
                        
                <div class="form-inline row">
                    <input type="text" name="q" placeholder="Search...!" class="form-control"/>
                    <input type="submit" class="btn btn-danger" value="Search"/>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>
        <div class="row justify-content-center">
           
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