<div>
    <header class="mb-6">
        <div>
            <flux:heading size="xl">Page SEO Management</flux:heading>
            <flux:subheading>Edit SEO data for existing website pages</flux:subheading>
        </div>
    </header>

    @if (session()->has('message'))
        <flux:callout variant="success" icon="check-circle" heading="{{ session('message') }}" class="mb-6" />
    @endif

    <div class="mb-6">
        <flux:input wire:model.live.debounce.300ms="search" placeholder="Search pages..." icon="magnifying-glass" />
    </div>

    <div class="border border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900 rounded-lg overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-zinc-200 dark:divide-zinc-700">
                <thead class="bg-zinc-50 dark:bg-zinc-800">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-zinc-500 dark:text-zinc-400 uppercase tracking-wider">Page Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-zinc-500 dark:text-zinc-400 uppercase tracking-wider">Title</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-zinc-500 dark:text-zinc-400 uppercase tracking-wider">Meta Description</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-zinc-500 dark:text-zinc-400 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-zinc-500 dark:text-zinc-400 uppercase tracking-wider">Actions</th>
                </tr>
                </thead>
                <tbody class="bg-white dark:bg-zinc-900 divide-y divide-zinc-200 dark:divide-zinc-700">
                @forelse ($this->pages as $page)
                    <tr class="hover:bg-zinc-50 dark:hover:bg-zinc-800">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-zinc-500 dark:text-zinc-400">
                            @php
                                $pageNames = [
                                    'homepage' => 'Homepage',
                                    'about' => 'About Us',
                                    'services' => 'Services',
                                    'fleet' => 'Fleet',
                                    'charter' => 'Charter',
                                    'quote' => 'Get Quote'
                                ];
                                $pageName = $pageNames[$page->slug] ?? ucfirst($page->slug);
                            @endphp
                            <flux:badge color="blue" size="sm">{{ $pageName }}</flux:badge>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-zinc-900 dark:text-zinc-100">{{ $page->title }}</td>
                        <td class="px-6 py-4 text-sm text-zinc-500 dark:text-zinc-400 max-w-xs">
                            {{ Str::limit($page->meta_description, 50) ?? 'No description' }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-zinc-500 dark:text-zinc-400">
                            @if($page->is_active)
                                <flux:badge color="green" size="sm">
                                    Active
                                </flux:badge>
                            @else
                                <flux:badge color="red" size="sm">
                                    Inactive
                                </flux:badge>
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <flux:button wire:click="edit({{ $page->id }})" size="sm" variant="primary" color="blue" icon="pencil" />
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-4 text-center text-zinc-500 dark:text-zinc-400">
                            No pages found.
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-6">
        {{ $this->pages->links() }}
    </div>

    <!-- Modal Form -->
    <flux:modal wire:model.self="showModal" name="page-seo-form" class="min-w-2xl max-w-3xl" wire:close="resetForm">
        <form wire:submit.prevent="save">
            <div class="space-y-6">
                <div>
                    <flux:heading size="lg">
                        Edit Page SEO
                    </flux:heading>
                    <flux:text class="mt-2">
                        Modify SEO information for this page.
                    </flux:text>
                </div>

                <flux:field>
                    <flux:label>Title</flux:label>
                    <flux:input wire:model="title" placeholder="Enter page title..." />
                    <flux:error name="title" />
                </flux:field>

                <flux:field>
                    <flux:label>Content</flux:label>
                    <flux:textarea wire:model="content" placeholder="Enter page content/description..." rows="3" />
                    <flux:error name="content" />
                </flux:field>

                <flux:field>
                    <flux:label>Meta Description</flux:label>
                    <flux:textarea wire:model="meta_description" placeholder="Enter meta description for SEO..." rows="3" />
                    <flux:error name="meta_description" />
                    <flux:description>
                        Brief description shown in search results (max 500 characters)
                    </flux:description>
                </flux:field>

                <flux:field>
                    <flux:label>Meta Keywords</flux:label>
                    <flux:input wire:model="meta_keywords" placeholder="Enter keywords separated by commas..." />
                    <flux:error name="meta_keywords" />
                </flux:field>

                <flux:field>
                    <flux:label>OG Image</flux:label>
                    <flux:input wire:model="og_image_file" type="file" accept="image/*" />
                    <flux:error name="og_image_file" />
                    <flux:description>
                        Image shown when page is shared on social media (max 2MB)
                    </flux:description>

                    <!-- Current Image Preview -->
                    @if($current_og_image)
                        <div class="mt-4">
                            <flux:label>Current Image:</flux:label>
                            <div class="mt-2">
                                <img src="{{ Storage::url($current_og_image) }}" alt="Current OG Image" class="h-32 w-auto object-cover rounded-lg border">
                            </div>
                        </div>
                    @endif

                    <!-- New Image Preview -->
                    @if($og_image_file)
                        <div class="mt-4">
                            <flux:label>New Image Preview:</flux:label>
                            <div class="mt-2">
                                <img src="{{ $og_image_file->temporaryUrl() }}" alt="New OG Image" class="h-32 w-auto object-cover rounded-lg border">
                            </div>
                        </div>
                    @endif
                </flux:field>

                <flux:field>
                    <flux:checkbox wire:model="is_active">Active</flux:checkbox>
                    <flux:error name="is_active" />
                </flux:field>

                <div class="flex justify-end space-x-2">
                    <flux:button variant="ghost" wire:click="cancel">Cancel</flux:button>
                    <flux:button type="submit" variant="primary">
                        Update
                    </flux:button>
                </div>
            </div>
        </form>
    </flux:modal>
</div>
