
@if ($paginator->hasPages())
<ul class="pagination modal-4">
        
            <li><a href="{{ $paginator->previousPageUrl() }}" class="prev">
    <i class="fa fa-chevron-left"></i>
      Previous
    </a>
  </li>
    </a>
      

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item disabled"><span class="page-link">{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                         <li> <a class="active">{{ $page }}</a></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
           <li><a href="{{ $paginator->nextPageUrl() }}" class="next"> Next 
    <i class="fa fa-chevron-right"></i>
  </a></li>
        @else
           <li><a href="{{ $paginator->nextPageUrl() }}" class="next"> Next 
    <i class="fa fa-chevron-right"></i>
  </a></li>
        @endif
    </ul>
@endif
