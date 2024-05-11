<div class="container">
    <x-layout-public>
        <x-banner-top />
        <x-Menu-top />
        <div class="container mx-auto flex">
            <div class="p-3 pl-0 gap-3 w-1/6">
                <x-Categories />
            </div>
            <div class="p-3 flex flex-col gap-4 w-full">
                <x-Slider />
                <div class="flex max-w-full gap-4"> 
                    <x-Top-block-banners />
                </div>
            </div>
        </div>
    </x-layout-public>
</div>