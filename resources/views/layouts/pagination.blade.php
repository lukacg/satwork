<?php
/**
 * Zurb Foundation Laravel Pagination
 * Author: Julian Camilleri
 * Date: 7th January 2018
 */
// Initialization of all options
$linksBefore = !isset($linksBefore) || !is_integer($linksBefore) ? 3 : $linksBefore;
$linksAfter = !isset($linksAfter) || !is_integer($linksAfter) ? 5 : $linksAfter;
$linksAfterEllipsis = !isset($linksAfterEllipsis) || !is_integer($linksAfterEllipsis) ? 2 : $linksAfterEllipsis;
$ellipsisLeeway = !isset($ellipsisLeeway) || !is_integer($ellipsisLeeway) ? 1 : $ellipsisLeeway;
?>

<ul class="pagination" role="navigation" aria-label="Pagination">
    @if ($paginator->currentPage() == 1)
        <li class="pagination-previous disabled">PREV</li>
        <li class="current">1</li>
    @else
        <li class="pagination-previous">
            <a href="{{ $paginator->previousPageUrl() }}" aria-label="Previous page">PREV</a>
        </li>

        {{-- Loading the links before the current page --}}
        @for ($i = $paginator->currentPage()-$linksBefore; $i < $paginator->currentPage(); $i++)
            @if ($i > 0)
                <li><a href="{{ $paginator->url($i) }}" aria-label="Page {{ $i }}">{{ $i }}</a></li>
            @endif
        @endfor

        {{-- Loading the current page --}}
        <li class="current">{{ $paginator->currentPage() }}</li>
    @endif

    {{-- Print the links after the current page (according to the linksAfter variable) --}}
    @for ($i = $paginator->currentPage()+1; $i <= $paginator->currentPage()+$linksAfter && $i <= $paginator->lastPage(); $i++)
        <li><a href="{{ $paginator->url($i) }}" aria-label="Page {{ $i }}">{{ $i }}</a></li>
    @endfor

    @if (($paginator->currentPage() + $linksAfter + $linksAfterEllipsis + $ellipsisLeeway) <= $paginator->lastPage())
        <li class="ellipsis" aria-hidden="true"></li>

        @for ($i = $paginator->lastPage()-$linksAfterEllipsis+1; $i <= $paginator->lastPage(); $i++)
            <li><a href="{{ $paginator->url($i) }}" aria-label="Page {{ $i }}">{{ $i }}</a></li>
        @endfor
    @endif

    @if ($paginator->currentPage() == $paginator->lastPage())
        <li class="pagination-next disabled">NEXT</li>
    @else
        <li class="pagination-next">
            <a href="{{ $paginator->nextPageUrl() }}" aria-label="Next page">NEXT</a>
        </li>
    @endif
</ul>