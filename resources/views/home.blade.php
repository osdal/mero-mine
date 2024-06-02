<div class="">
    <x-layout-public>
        <x-banner-top />
        <x-Menu-top />
        <div class="container mx-auto flex flex-col">
            <div class="flex">
                <div class="categories p-3 pl-0 gap-3 w-1/6">
                    <x-Categories />
                </div>
                <div class="content p-3 flex flex-col gap-4 w-full">
                    <x-Slider />
                    <div class="flex max-w-full gap-4">
                        <x-Top-block-banners />
                    </div>
                </div>
                <x-Pop-categories />
            </div>
                <x-Front-page-goods />
                <x-Actions-goods />
        </div>
</div>
</x-layout-public>
</div>