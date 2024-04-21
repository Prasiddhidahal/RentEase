<head>
    <link rel="stylesheet" type="text/css" href="/css/table.css">
        {{-- flashmessage --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  </head>


<x-adminDashboard>
  {{-- <x-navbar> --}}
        <header>
            <h1
                class="text-3xl text-laravel text-center font-bold my-6 uppercase"
            >
                Verify Users
            </h1>
            
        </header>
        <h3 class="total_count">Total Users:  &nbsp;{{$total_users}}</h3>
        @if ($users->hasPages())
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        @if ($users->onFirstPage())
        <li class="page-item disabled">
            <a class="page-link" href="#" 
               tabindex="-1">Previous</a>
        </li>
        @else
        <li class="page-item"><a class="page-link" 
            href="{{ $users->previousPageUrl() }}">
                  Previous</a>
          </li>
        @endif
  
        @foreach ($users as $user)
        @if (is_string($user))
        <li class="page-item disabled">{{ $user }}</li>
        @endif
  
        @if (is_array($user))
        @foreach ($user as $page => $url)
        @if ($page == $users->currentPage())
        <li class="page-item active">
            <a class="page-link">{{ $page }}</a>
        </li>
        @else
        <li class="page-item">
            <a class="page-link" 
               href="{{ $url }}">{{ $page }}</a>
        </li>
        @endif
        @endforeach
        @endif
        @endforeach
  
        @if ($users->hasMorePages())
        <li class="page-item">
            <a class="page-link" 
               href="{{ $users->nextPageUrl() }}" 
               rel="next">Next</a>
        </li>
        @else
        <li class="page-item disabled">
            <a class="page-link" href="#">Next</a>
        </li>
        @endif
    </ul>
  </nav>
    @endif
        <table >
           
            <tbody>
                <tr class="table_row">
                    <td class='title'>Id</td>
                    {{-- <td class='title'>Photo</td> --}}
                    {{-- <td class='title'>UserName</td> --}}
                    <td class='title'>User Name</td>
                    <td class='title'>Email</td>
                    <td class='title'>Phone Number</td>
                    <td class='title'>Gender</td>
                    <td class='title'>Joined On</td>
                    <td class='title'>Updated At</td>
                    <td class='title'>Action</td>
                    {{-- <td>Status</td> --}}


                </tr>
                @unless ($users->isEmpty())
                @foreach ($users as $user)
                
                <tr class="table_row">
                    <td>
                        {{-- <a class="detail" href="/property/show/{{$property->id}}"> --}}
                            {{$user->id}}
                        {{-- </a> --}}
                    </td>
                        {{-- @php
                        $counter=0;
                        $image = explode('|',$property->property_photo);
                        foreach ($image as $item) {
                           $counter+=1; 
                        }
                       @endphp
                        @if ($counter==1)
                        <td >
                            <a class="detail" href="/property/show/{{$property->id}}">
                                <img class="hidden w-48 mr-6 md:block" src="{{ asset($property->property_photo)}}" alt=""/>
                            </a>
                        </td>
                       
                           
                        @endif
                        @if ($counter!=1)
                        <td >
                            <a class="detail" href="/property/show/{{$property->id}}">
                                <img class="hidden w-48 mr-6 md:block" src="{{URL::to($image[0])}}" alt=""/>
                            </a>
                        </td>
                           
                       @endif --}}
                    
                    <td>
                        {{-- <a class="detail" href="/property/show/{{$property->id}}"> --}}
                            <a href="/admin/profile/{{$user->id}}" style="color:black">{{$user->user_name}}<a>
                        {{-- </a> --}}
                    </td>
                    <td>
                        {{-- <a class="detail" href="/property/show/{{$property->id}}"> --}}
                            {{$user->email}}
                        {{-- </a> --}}
                    </td>
                    <td >
                        {{-- <a class="detail" href="/property/show/{{$property->id}}"> --}}
                            {{$user->phone_number}}
                        {{-- </a> --}}
                    </td>
                   
                    <td >
                        {{-- <a class="detail" href="/property/show/{{$property->id}}"> --}}
                            {{$user->gender}}
                        {{-- </a> --}}
                    </td>
                    <td >
                        {{-- <a class="detail" href="/property/show/{{$property->id}}"> --}}
                            {{$user->created_at->format('d F , Y')}}
                        {{-- </a> --}}
                    </td>
                    <td >
                        {{-- <a class="detail" href="/property/show/{{$property->id}}"> --}}
                            {{$user->updated_at->format('d F , Y')}}
                        {{-- </a> --}}
                    </td>
                    <td  >
                        
                        
                            
                        <a  class="detail" href="/admin/verify/{{$user->id}}/{{1}}" ><button class="unblock"><i class='bx bx-check'></i>Verify</button></a> 
                        <a  class="detail" href="/admin/verify/{{$user->id}}/{{2}}" ><button class="block"><i class='bx bx-block'></i>Not Verify</button></a> 
                       
                        
                     
                        
                           
                       
                            
                       
                       
                    </td>
                </tr>

                @endforeach
                
                        
                    @else
                       <tr class="table_row">
                    <td colspan="9" style="text-align: center">
                        <p class="text-center">No User found</p>
                    </td>
                    </tr> 
                   
                @endunless
            </tbody>
        </table>
  {{-- </x-navbar> --}}
</x-adminDashboard>
