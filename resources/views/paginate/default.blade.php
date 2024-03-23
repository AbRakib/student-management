@if ($paginator->lastPage() > 1)
<nav aria-label="Page navigation example">
    <ul class="pagination">
        <li class="page-item">
            <a class="page-link @if($paginator->currentPage() <= 1) disabled @endif" href="{{ $paginator->url(1) }}">Previous</a>
        </li>
        @for ($i = 1; $i <= $paginator->lastPage(); $i++)
        <li class="page-item">
            <a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a>
        </li>
        @endfor
        <li class="page-item">
            <a class="page-link @if($paginator->count() < 10) disabled @endif" href="{{ $paginator->url($paginator->currentPage()+1) }}">Next</a>
        </li>
    </ul>
</nav>
@endif