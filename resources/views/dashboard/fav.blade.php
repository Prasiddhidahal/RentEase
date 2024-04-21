<head>
    <link rel="stylesheet" type="text/css" href="/css/table.css">
    {{-- flashmessage --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  </head>

<x-dashboardsidebar  style=" position: fixed;">
    <div class="container" style="width:100%; padding:10px; overflow: auto;
    flex: 1 1 auto;
    scrollbar-width: none; /* Firefox */
-ms-overflow-style: none; /* Internet Explorer and Edge */">
    <style>
      .container::-webkit-scrollbar {
       display: none;
      }
      </style>
        <header>
            <h1 class="heading"
                
            >
                Favourite Property
            </h1>
        </header>
        <h3 class="total_count">Total Favourites:  &nbsp;{{$fav_count}}</h3>

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
                    <td class='title'>Liked At</td>
                    <td class='title'>Action</td>
                    {{-- <td>Status</td> --}}


                </tr>
                @unless ($favs->isEmpty())
                @foreach ($favs as $fav)
                
                <tr class="table_row">
                    @php
                        $property = App\Models\Property_detail::where('id',$fav->property_detail_id)->first();
                    @endphp
                    <td>
                        <a class="detail" href="/single/{{$fav->property_detail_id}}">
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
                            <a class="detail" href="/single/{{$property->id}}">
                                <img class="hidden w-48 mr-6 md:block" src="{{ asset($property->property_photo)}}" alt=""/>
                            </a>
                        </td>
                       
                           
                        @endif
                        @if ($counter!=1)
                        <td >
                            <a class="detail" href="/single/{{$property->id}}">
                                <img class="hidden w-48 mr-6 md:block" src="{{URL::to($image[0])}}" alt=""/>
                            </a>
                        </td>
                           
                       @endif
                    
                    <td >
                        <a class="detail" href="/single/{{$property->id}}">
                            {{$property->title}}
                        </a>
                    </td>
                    <td >
                        <a class="detail" href="/single/{{$property->id}}">
                            {{$property->price}}
                        </a>
                    </td>
                    <td >
                        <a class="detail" href="/single/{{$property->id}}">
                            {{$property->type_of_property}}
                        </a>
                    </td>
                    <td >
                        <a class="detail" href="/single/{{$property->id}}">
                            @if (!empty($property->count))
                            {{ $property->count }}
                            @else
                            0
                        @endif
                        </a>
                    </td>
                    <td >
                        <a class="detail" href="/single/{{$property->id}}">
                            {{$property->created_at->format('d F , Y')}}
                        </a>
                    </td>
                    <td >
                        <a class="detail" href="/single/{{$property->id}}">
                            {{$fav->created_at->format('d F , Y')}}
                        </a>
                    </td>
                    <td >
                        <a href="/fav/{{$property->id}}">
                            
                            <button class="delete"><i class="fa-solid fa-trash"></i>Remove</button>
                        </a>    
                       
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

</x-dashboardsidebar>