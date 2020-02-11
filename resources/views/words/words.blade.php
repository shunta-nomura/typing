<ul class="list-unstyled">
    @foreach ($words as $word)
        <li class="media mb-3">
            <div class="media-body">
                <div>
                    <p class="mb-0">{!! nl2br(e($word->id)) !!}</p>
                    <p class="mb-0">{!! nl2br(e($word->content)) !!}</p>
                    <p class="mb-0">{!! nl2br(e($word->meaning)) !!}</p>
                </div>
            </div>
        </li>
    @endforeach
</ul>
{{ $words->links('pagination::bootstrap-4') }}