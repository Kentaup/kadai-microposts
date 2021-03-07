@if (Auth::user()->is_favorite($micropost->id))
    {{-- フォボ解除ボタンのフォーム --}}
    {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete']) !!}
        {!! Form::submit('お気に入り解除', ['class' => "btn btn-light btn-sm"]) !!}
    {!! Form::close() !!}
@else
    {{-- ファボボタンのフォーム --}}
    {!! Form::open(['route' => ['favorites.favorite', $micropost->id]]) !!}
        {!! Form::submit('お気に入り登録', ['class' => "btn btn-success btn-sm"]) !!}
    {!! Form::close() !!}
@endif
