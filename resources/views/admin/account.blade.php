@extends('admin.index')
@section('title', 'Quản Lý Tài Khoản')
@section('content')
    <a href="{{route('account.create')}}" class="">add account</a>
    
    <span style="color:red;">{{session('message')??''}}</span>

    <span class="" style="color:red;">{{$message??''}}</span>

    <form action="{{ route('account.search') }}" method="POST" style="margin-bottom: 20px;">
        @csrf
        <input type="text" name="search" placeholder="Tìm kiếm tài khoản" value="{{ request('search') }}">
        <button type="submit">Tìm kiếm</button>
    </form>
    
    <table class="class">
        <thead class="">
            <tr class="">
                <td>id</td>
                <td>name</td>
                <td>email</td>
                <td>role</td>
                <td>remember_token</td>
                <td>created_at</td>
                <td>updated_at</td>
                <td>action</td>
            </tr>    
        </thead>
        <tbody class="">
            @foreach($listAccount as $key => $acc)
            <tr class="">
                <td>{{$acc->id}}</td>
                <td>{{$acc->username}}</td>
                <td>{{$acc->email}}</td>
                <td>{{$acc->role}}</td>
                <td>{{$acc->remember_token}}</td>
                <td>{{$acc->created_at}}</td>
                <td>{{$acc->updated_at}}</td>
           
                <td><a href="{{route('account.edit',$acc->id)}}" class="">edit</a></td>
                
                <td>
                    <form action="{{route('account.delete',$acc->id)}}" method="post">
                      
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="" onclick="return confirm('bạn muốn xóa tài khoản {{$acc->username}}?')">delete</button>
                    </form>
                   
                </td>
               
                
            </tr>   
          


            @endforeach
        </tbody>    
         
    </table>    
    

    {{-- {{ $listAccount->links()->bootstrap5() }}  --}}
@endsection
