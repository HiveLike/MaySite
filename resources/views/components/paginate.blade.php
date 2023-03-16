@if ($paginator->hasPages())
    <div class="catalog_pagination">
        <a href="{{ $paginator->previousPageUrl() }}" class="pagin_left">назад</a>
        <a href="{{ $paginator->nextPageUrl() }}" class="pagin_right">дальше</a>
    </div>
@endif
