@forelse ($games as $game)
<article class="record">
                    <figure class="avatar">
                        <img class="mask" src="{{ asset('images') . '/' . $game->image }}" alt="Photo">
                        <img class="border" src="images/shape-border-small.svg" alt="Border">
                    </figure>
                    <aside>
                        <h3>{{ $game->title }}</h3>
                        <h4>{{ $game->category->name }}</h4>
                    </aside>
                    <figure class="actions">
                        <a href='{{ url('games/' . $game->id) }}'>
                            <img src="images/ico-search.svg" alt="Show">
                        </a>
                        <a href='{{ url('games/' . $game->id . '/edit') }}'>
                            <img src="images/ico-edit.svg" alt="Edit">
                        </a>
                        <a href="javascript:;" class="delete" data-title="{{ $game->title }}">
                            <img src="{{ asset('images/ico-delete.svg') }}" alt="Delete">
                        </a>
                        <form action="{{ url('games/' . $game->id) }}" method="POST" style="display: none">
                            @csrf
                            @method('DELETE')
                        </form>
                    </figure>
                </article>
    {{ $game->title }}
@empty
    No found 😒
@endforelse