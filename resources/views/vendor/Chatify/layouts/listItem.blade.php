{{-- -------------------- Saved Messages -------------------- --}}
@if($get == 'saved')
    <table class="messenger-list-item" data-contact="{{ Auth::user()->id }}">
        <tr data-action="0">
            {{-- Avatar side --}}
            <td>
            <div class="saved-messages avatar av-m">
                <span class="far fa-bookmark"></span>
            </div>
            </td>
            {{-- center side --}}
            <td>
                <p data-id="{{ Auth::user()->id }}" data-type="user">Saved Messages <span>You</span></p>
                <span>Save messages secretly</span>
            </td>
        </tr>
    </table>
@endif

{{-- -------------------- Contact list -------------------- --}}
@if($get == 'users' && !!$lastMessage)
<?php
$lastMessageBody = mb_convert_encoding($lastMessage->body, 'UTF-8', 'UTF-8');
$lastMessageBody = strlen($lastMessageBody) > 30 ? mb_substr($lastMessageBody, 0, 30, 'UTF-8').'..' : $lastMessageBody;
?>
<table class="messenger-list-item" data-contact="{{ $user->id }}">
    <tr data-action="0">
        {{-- Avatar side --}}
        <td style="position: relative">
            @if($user->active_status)
                <span class="activeStatus"></span>
            @endif
        <div class="avatar av-m"
        style="background-image: url('{{ asset(str_replace('storage/', '', $user->avatar)) }}');">
        </div>
        </td>
        {{-- center side --}}
        <td>
        <p data-id="{{ $user->id }}" data-type="user">
            {{ strlen($user->user_name) > 12 ? trim(substr($user->user_name,0,12)).'..' : $user->user_name }}
            <span class="contact-item-time" data-time="{{$lastMessage->created_at}}">{{ $lastMessage->timeAgo }}</span></p>
        <span>
            {{-- Last Message user indicator --}}
            {!!
                $lastMessage->from_id == Auth::user()->id
                ? '<span class="lastMessageIndicator">You :</span>'
                : ''
            !!}
            {{-- Last message body --}}
            @if($lastMessage->attachment == null)
            {!!
                $lastMessageBody
            !!}
            @else
            <span class="fas fa-file"></span> Attachment
            @endif
        </span>
        {{-- New messages counter --}}
            {!! $unseenCounter > 0 ? "<b>".$unseenCounter."</b>" : '' !!}
        </td>
    </tr>
</table>
@endif

{{-- -------------------- Search Item -------------------- --}}
@if($get == 'search_item')
@if (auth()->user()->id!=$user->id)
    @php
        $user_id=$user->id;
    @endphp
    @if (App\Models\ChatRequest::where(function($query) use ( $user_id) {
        $query->where('client_id', auth()->user()->id)
              ->where('owner_id', $user_id);
    })
    ->orWhere(function($query) use ($user_id) {
        $query->where('client_id', $user_id)
              ->where('owner_id', auth()->user()->id);
    })->where('Status', '2')->exists())
    <table class="messenger-list-item" data-contact="{{ $user->id }}">
        <tr data-action="0">
            {{-- Avatar side --}}
            <td>
            <div class="avatar av-m"
            style="background-image: url('{{ asset(str_replace('storage/', '', $user->avatar)) }}');">
            </div>
            </td>
            {{-- center side --}}
            <td>
                <p data-id="{{ $user->id }}" data-type="user">
                {{ strlen($user->user_name) > 12 ? trim(substr($user->user_name,0,12)).'..' : $user->user_name }}
            </td>
    
        </tr>
    </table>  
    @endif
@endif

@endif

{{-- -------------------- Shared photos Item -------------------- --}}
@if($get == 'sharedPhoto')
<div class="shared-photo chat-image" style="background-image: url('{{ $image }}')"></div>
@endif


