@if ($paginator->hasPages())
    <nav class="d-flex justify-content-end align-items-center">
        <span class="me-2">Page |</span>

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        {{-- Current Page: Bold --}}
                        <span class="fw-bold mx-1">{{ $page }}</span>
                    @else
                        {{-- Other Pages: Regular Black Text --}}
                        <a href="{{ $url }}" class="text-dark mx-1" style="text-decoration: none;">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach
    </nav>
@endif
