@if ($paginator->hasPages())

            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
            <a class="btn-prev" href="javascript:;" style="opacity: 0.4; cursor: default">
                <img src="{{asset('images/btn-back.png')}}" alt="prev">
            </a>
            @else
                <a class="btn-prev" href="{{ $paginator->previousPageUrl()}}">
                    <img src="{{asset('images/btn-prev.png')}}" alt="prev">
                </a>
            @endif
            <span>{{ $paginator->currentPage() .'/'. $paginator->lastPage()}}</span>
            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a></li>
            @else
                <li class="disabled" aria-disabled="true"><span>@lang('pagination.next')</span></li>
            @endif

@endif
