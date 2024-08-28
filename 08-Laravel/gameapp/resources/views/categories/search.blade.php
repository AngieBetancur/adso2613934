@forelse ($categories as $category)
<article class="record">
                    <figure class="avatar">
                        <img class="mask" src="{{ asset('images') . '/' . $category->image }}" alt="Photo">
                        <img class="border" src="images/shape-border-small.svg" alt="Border">
                    </figure>
                    <aside>
                        <h3>{{ $category->name }}</h3>
                    </aside>
                    <figure class="actions">
                        <a href='{{ url('categories/' . $category->id) }}'>
                            <img src="images/ico-search.svg" alt="Show">
                        </a>
                        <a href='{{ url('categories/' . $category->id . '/edit') }}'>
                            <img src="images/ico-edit.svg" alt="Edit">
                        </a>
                        <a href="javascript:;" class="delete" data-name="{{ $category->name }}">
                            <img src="{{ asset('images/ico-delete.svg') }}" alt="Delete">
                        </a>
                        <form action="{{ url('categories/' . $category->id) }}" method="POST" style="display: none">
                            @csrf
                            @method('DELETE')
                        </form>
                    </figure>
                </article>
    {{ $category->name }}
@empty                                                                                                                                                            
    No found 😒
@endforelse