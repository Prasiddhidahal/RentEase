<head>
    <link rel="stylesheet" type="text/css" href="/css/table.css">
    <link href="images/logo.png" rel="icon">
      {{-- flashmessage --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  </head>


  <x-adminDashboard style=" position: fixed;">
    <div style=" padding:10px; overflow: auto;
    flex: 1 1 auto;
    scrollbar-width: none; /* Firefox */
-ms-overflow-style: none; /* Internet Explorer and Edge */">
    <style>
      .container::-webkit-scrollbar {
       display: none;
      }
      </style>
  {{-- <x-navbar> --}}
        <header>
            <h1
                class="text-3xl text-laravel text-center font-bold my-6 uppercase"
            >
                Manage Property
            </h1>
        </header>
        @if ($properties->hasPages())
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        @if ($properties->onFirstPage())
        <li class="page-item disabled">
            <a class="page-link" href="#" 
               tabindex="-1">Previous</a>
        </li>
        @else
        <li class="page-item"><a class="page-link" 
            href="{{ $properties->previousPageUrl() }}">
                  Previous</a>
          </li>
        @endif
  
        @foreach ($properties as $user)
        @if (is_string($user))
        <li class="page-item disabled">{{ $user }}</li>
        @endif
  
        @if (is_array($user))
        @foreach ($user as $page => $url)
        @if ($page == $properties->currentPage())
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
  
        @if ($properties->hasMorePages())
        <li class="page-item">
            <a class="page-link" 
               href="{{ $properties->nextPageUrl() }}" 
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
                    <td class='title'>Photo</td>
                    <td class='title'>Title</td>
                    <td class='title'>Price</td>
                    <td class='title'>Catogory</td>
                    <td class='title'>Views</td>
                    <td class='title'>Posted On</td>
                    <td class='title'>Updated At</td>
                    <td class='title'>Action</td>
                    {{-- <td>Status</td> --}}


                </tr>
                @unless ($properties->isEmpty())
                @foreach ($properties as $property)
                
                <tr class="table_row">
                    <td>
                        <a class="detail" href="/admin/property/show/{{$property->id}}">
                            {{$property->id}}
                        </a>
                    </td>
                        @php
                        $counter=0;
                        $image = explode('|',$property->property_photo);
                        foreach ($image as $item) {
                           $counter+=1; 
                        }
                       @endphp
                        @if ($counter==1)
                        <td >
                            <a class="detail" href="/admin/property/show/{{$property->id}}">
                                <img class="hidden w-48 mr-6 md:block" src="{{ asset($property->property_photo)}}" alt=""/>
                            </a>
                        </td>
                       
                           
                        @endif
                        @if ($counter!=1)
                        <td >
                            <a class="detail" href="/admin/property/show/{{$property->id}}">
                                <img class="hidden w-48 mr-6 md:block" src="{{URL::to($image[0])}}" alt=""/>
                            </a>
                        </td>
                           
                       @endif
                    
                    <td>
                        <a class="detail" href="/admin/property/show/{{$property->id}}">
                            {{$property->title}}
                        </a>
                    </td>
                    <td>
                        <a class="detail" href="/admin/property/show/{{$property->id}}">
                            {{$property->price}}
                        </a>
                    </td>
                    <td >
                        <a class="detail" href="/admin/property/show/{{$property->id}}">
                            {{$property->type_of_property}}
                        </a>
                    </td>
                    <td>
                        <a class="detail" href="/admin/property/show/{{$property->id}}">
                            @if (!empty($property->count))
                            {{ $property->count }}
                            @else
                            0
                        @endif
                        </a>
                    </td>
                    <td >
                        <a class="detail" href="/admin/property/show/{{$property->id}}">
                            {{$property->created_at->format('d F , Y')}}
                        </a>
                    </td>
                    <td >
                        <a class="detail" href="/admin/property/show/{{$property->id}}">
                            {{$property->updated_at->format('d F , Y')}}
                        </a>
                    </td>
                    <td  >
                        <a  class="detail" href="/admin/property/{{$property->id}}/edit" ><button class="edit"><i class='bx bx-edit'></i>Edit</button></a>       
                        <form method="POST" action="/admin/property/{{$property->id}}">
                            @csrf
                            @method('DELETE')
                            <button class="delete"><i class='bx bx-trash'></i>DELETE</button>
                        </form>
                    </td>
                </tr>

                @endforeach
                
                        
                    @else
                       <tr class="table_row">
                    <td colspan="9" style="text-align: center">
                        <p class="text-center">No property found</p>
                    </td>
                    </tr> 
                   
                @endunless
            </tbody>
        </table>
    </div>
  <script>
    document.addEventListener("DOMContentLoaded", function(event) { 
        var scrollpos = localStorage.getItem('scrollpos');
        if (scrollpos) window.scrollTo(0, scrollpos);
    });

    window.onbeforeunload = function(e) {
        localStorage.setItem('scrollpos', window.scrollY);
    };
</script>
    </x-adminDashboard>
