<div>
    <a href="{{ route('dimephar') }}" class="flex items-center relative mr-4 mt-4">
        <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l1.68 9.39a2 2 0 001.993 1.61h7.453a2 2 0 001.992-1.61L19 7H6"></path>
        </svg>
        @if ($count > 0)
            <span class="absolute top-0 right-0 transform translate-x-1/2 -translate-y-1/2 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 bg-red-600 rounded-full">{{ $count }}</span>
        @endif
    </a>
</div>
