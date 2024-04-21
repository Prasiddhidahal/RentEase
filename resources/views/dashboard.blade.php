
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   @foreach (auth()->user()->notifications as $notification)

                   
                  {{-- {{ $notification->type}} --}}
                  
                    @if ($notification->type == 'App\Notifications\LikeNotification')
                        <div class="bg-blue-300">
                            {{$notification->data['user_name']}} liked your property {{$notification->data['property_name']}}
                        </div>
                    @endif
                    @if ($notification->type == 'App\Notifications\ChatRequestNotification')
                        <div class="bg-blue-300">
                            {{$notification->data['user_name']}} sent you chat request for {{$notification->data['property_name']}}
                        </div>
                    @endif
                    @if ($notification->type == 'App\Notifications\CommentNotification')
                        <div class="bg-blue-300">
                            {{$notification->data['user_name']}} commented on your property {{$notification->data['property_name']}}
                        </div>
                    @endif
                        
                    
                    
                   
                       
                   @endforeach
                </div>
                {{auth()->user()->user_name}} Logged in user name
            </div>
        </div>
    </div>

