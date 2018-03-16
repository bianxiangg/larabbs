<div class="reply-list">
    @foreach($replies as $index => $reply)
        <div class="media" name="reply{{ $reply->id }}" id="{{ $reply->id }}">
            <div class="avatar pull-left">
                <a href="{{ route('users.show', [$reply->user_id]) }}"></a>
                <img src="{{ $reply->user->avatar }}" alt="{{ $reply->user->name }}" style="width:48px;height:48px;" class="media-object img-thumbnail">
            </div>
            <div class="infos">
                <div class="media-heading">
                    <a href="{{ route('users.show', [$reply->user->id]) }}" title="{{$reply->user->name}}">{{ $reply->user->name }}</a>
                    <span> · </span>
                    <span class="meta:compat" title="{{ $reply->created_at }}">{{ $reply->created_at->diffForHumans() }}</span>

                    {{-- 回复删除按钮 --}}
                    <span class="meta pull-right">
                        <a href="" title="删除回复">
                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                        </a>
                    </span>
                </div>
                <div class="reply-content">
                    {!! $reply->content !!}
                </div>
            </div>
        </div>
        <hr>
    @endforeach
</div>