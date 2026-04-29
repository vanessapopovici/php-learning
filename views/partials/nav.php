<nav class="bg-gray-800/50">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="shrink-0">
                    <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company" class="size-8" />
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="/Practice/proj2/" class="<?= urlIs('/Practice/proj2/') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">Home</a>
                        
                        <a href="/Practice/proj2/about" class="<?= urlIs('/Practice/proj2/about') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">About</a>

                        <a href="/Practice/proj2/notes" class="<?= urlIs('/Practice/proj2/notes') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">Notes</a>
                        
                        <a href="/Practice/proj2/contact" class="<?= urlIs('/Practice/proj2/contact') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">Contact</a>
                    </div>
                </div>
            </div>
            </div>
    </div>
</nav>