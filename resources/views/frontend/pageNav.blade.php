@if($a == 0)

@endif
@if($a == 1)
    <div class="page-navigation">
        <nav aria-label="...">
            {{$news->links()}}
        </nav>
    </div>
@endif

