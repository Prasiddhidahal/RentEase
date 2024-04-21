<head>
    <link rel="stylesheet" type="text/css" href="/css/table.css">
    {{-- flashmessage --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  </head>
<x-dashboardsidebar style=" position: fixed;">
    <div style=" padding:10px; overflow: auto;
    flex: 1 1 auto;
    scrollbar-width: none; /* Firefox */
-ms-overflow-style: none; /* Internet Explorer and Edge */">
    <style>
      .container::-webkit-scrollbar {
       display: none;
      }
      </style>
    <header>
        <h1
            class="text-3xl text-laravel text-center font-bold my-6 uppercase"
        >
            Manage Requests
        </h1>
    </header>
<div>
    <div>
    <table style="margin-bottom: 100px">

        <tbody >
            <tr>
                <h2 class="text-2xl text-center font-bold my-6 uppercase">  Sent Request</h2>
              </tr>
            <tr class="table_row">
                <td class='title'>Property Id</td>
                <td class='title'>Property Title</td>
                <td class='title'>Client Id</td>
                <td class='title'>Client Name</td>
                <td class='title'>Client User Name</td>
                <td class='title'>Status</td>
                <td class='title'>Decline</td>
            </tr>
                @if (!$sents->isEmpty())


                {{-- <td>Status</td> --}}
                @unless ($sents->isEmpty())
                @foreach ($sents as $sent)
                {{-- if $sent->Status==0 --}}

                <tr class="table_row">
                    <td class="detail">
                        <a href="/single/{{$sent->id}}" style="color: #2eca6a">
                        {{$sent->property_id}}
                        </a>
                     </td>
                     <td class="detail">
                        <a href="/single/{{$sent->id}}" style="color: #2eca6a">
                            @php
                                $property_detail = App\Models\Property_detail::where('id', $sent->property_id)->first();
                            @endphp
                        {{$property_detail->title}}
                        </a>
                     </td>
                    <td class="detail">
                       {{$sent->owner_id}}
                    </td>
                    <td class="detail">
                        @php
                        $owner_detail = App\Models\User::where('id', $sent->owner_id)->first();
                    @endphp
                        {{$owner_detail->first_name}} {{$owner_detail->middle_name}} {{$owner_detail->last_name}}
                     </td>
                     <td class="detail">
                        {{$owner_detail->user_name}}
                     </td>
                    <td class="detail">
                       @if ($sent->Status==0)
                           Pending
                       @endif
                       @if ($sent->Status==1)
                           Declined
                       @endif
                       @if ($sent->Status==2)
                       Accepted
                   @endif


                    </td>

                    <td class="detail">
                        <form method="POST" action="{{ route('request.destroy', $sent->id) }}">
                            @csrf
                            @method('DELETE')
                            <button class="delete"><i class="fa-solid fa-trash"></i>DELETE</button>
                        </form>

                    </td>
                </tr>

                @endforeach
                @endif

                    @else


                @endunless


            </tr>

        </tbody>
    </table>
</div>
<div>
    <table >

        <tbody>
            <tr>
                <h2 class="text-2xl text-center font-bold my-6 uppercase">  Received Request</h2>
              </tr>
            <tr class="table_row">
                <td class='title'>Property Id</td>
                <td class='title'>Property Title</td>
                <td class='title'>Client Id</td>
                <td class='title'>Client Name</td>
                <td class='title'>Client User Name</td>
                <td class='title'>Status</td>
                <td class='title'>Accept</td>
                <td class='title'>Decline</td>
            </tr>
                @if (!$receiveds->isEmpty())


                {{-- <td>Status</td> --}}
                @unless ($receiveds->isEmpty())
                @foreach ($receiveds as $received)
                @if($received->Status==0)

                @php
                $user = App\Models\User::where('id',$received->client_id)->first();



                @endphp

                <tr class="table_row">
                    <td class="detail">
                        <a href="/single/{{$received->id}}"  style="color: #2eca6a">
                        {{$received->property_id}}
                        </a>
                     </td>
                     <td class="detail">
                        @php

                        $property = App\Models\Property_detail::where('id',$received->property_id)->first();
                        // dd($property)

                        @endphp
                        {{$property->title}}
                    </td>
                    <td class="detail">
                       {{$received->client_id}}
                    </td>


                        <td class="detail">
                        @php
                        $owner_detail = App\Models\User::where('id', $received->owner_id)->first();
                    @endphp
                            {{$owner_detail->first_name}} {{$owner_detail->middle_name}} {{$owner_detail->last_name}}
                        </td>
                        <td class="detail">
                            {{$owner_detail->user_name}}
                         </td>
                        <td class="detail">
                            @if ($received->Status==0)
                                Pending
                            @endif
                            @if ($received->Status==1)
                                Declined
                            @endif
                            @if ($received->Status==2)
                            Accepted
                        @endif


                         </td>
                    <td class="detail">
                        <form method="POST" action="{{ route('request.accept', $received->id) }}">
                            @csrf
                            @method('PUT')
                            <button class="accept"><i class="fa-solid fa-trash"></i>Accept</button>
                        </form>
                    </td>

                    <td class="detail">
                        <form method="POST" action="{{ route('request.decline', $received->id) }}">
                            @csrf
                            @method('PUT')
                            <button class="delete"><i class="bx bx-trash"></i>Decline</button>
                        </form>

                    </td>
                </tr>
                @endif
                @endforeach
                @endif



                @endunless


            </tr>

        </tbody>
    </table>
</div>
</div>
    </div>

</x-dashboardsidebar>
