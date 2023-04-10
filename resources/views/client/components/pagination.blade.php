<div style="margin-bottom: 30px">
    @if ($paginator->hasPages())
    <nav>
        <ul>
            <span>
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                <span
                    class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
                    Trước đó</span>
                        @else
                        <button wire:click="previousPage" wire:loading.attr="disabled" rel="prev"
                            class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                            Trước đó</button>
                                @endif
                </span>

                <span>
                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                    <button wire:click="nextPage" wire:loading.attr="disabled" rel="next"
                        class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                        Tiếp theo</button>
                    @else
                    <span
                        class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
                        Tiếp theo</span>
                    @endif
                </span>
        </ul>
    </nav>
    @endif
</div>
