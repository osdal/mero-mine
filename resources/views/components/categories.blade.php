<div>
    @foreach($categories as $category)
        <a href="#" class="flex items-center text-primary-500 text-sm">
            <svg class="size-5 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.153 15 19 8l-4.847-7H1l4.848 7L1 15h13.153Z"/>
            </svg>

            {{ $category->name }}
        </a>
    @endforeach
    Все категории +
</div>
