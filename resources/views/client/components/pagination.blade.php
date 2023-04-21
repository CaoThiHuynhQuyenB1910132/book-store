<div style="margin-bottom: 30px">
    @if ($paginator->hasPages())
    <nav>
        <ul class="pagination pagination-style-2">

            <span>
                @if ($paginator->onFirstPage())
                <span style="cursor: pointer" class="prev page-numbers">
                    <i class="fa fa-long-arrow-left"></i>
                </span>
                @else
                <a style="cursor: pointer" class="prev page-numbers" wire:click="previousPage" wire:loading.attr="disabled" rel="prev">
                    <i class="fa fa-long-arrow-left"></i>
                </a>
                @endif
            </span>

            <span>
                @if ($paginator->hasMorePages())
                <a style="cursor: pointer" class="next page-numbers " wire:click="nextPage" wire:loading.attr="disabled" rel="next">
                    <i class="fa fa-long-arrow-right"></i>
                </a>

                @else
                <span style="cursor: pointer" class="next page-numbers">
                    <i class="fa fa-long-arrow-right"></i>
                </span>
                @endif
            </span>
        </ul>
    </nav>
    @endif
</div>
