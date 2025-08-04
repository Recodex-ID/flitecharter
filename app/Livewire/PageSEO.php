<?php

namespace App\Livewire;

use App\Models\Page;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;

class PageSEO extends Component
{
    use WithPagination, WithFileUploads;

    public $title = '';
    public $slug = '';
    public $content = '';
    public $meta_description = '';
    public $meta_keywords = '';
    public $og_image = '';
    public $og_image_file = null;
    public $current_og_image = '';
    public $is_active = true;
    public $editingPageId = null;
    public $showModal = false;
    public $search = '';

    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'meta_description' => 'nullable|string|max:500',
            'meta_keywords' => 'nullable|string',
            'og_image_file' => 'nullable|image|max:2048',
            'is_active' => 'boolean',
        ];
    }

    public function edit($pageId)
    {
        $page = Page::find($pageId);
        $this->editingPageId = $pageId;
        $this->title = $page->title;
        $this->slug = $page->slug;
        $this->content = $page->content;
        $this->meta_description = $page->meta_description ?? '';
        $this->meta_keywords = $page->meta_keywords ?? '';
        $this->og_image = $page->og_image ?? '';
        $this->current_og_image = $page->og_image ?? '';
        $this->og_image_file = null;
        $this->is_active = $page->is_active;
        $this->showModal = true;
    }

    public function save()
    {
        $this->validate();

        $page = Page::find($this->editingPageId);
        
        // Handle image upload
        $ogImagePath = $this->og_image; // Keep current image if no new upload
        
        if ($this->og_image_file) {
            // Delete old image if exists
            if ($this->current_og_image && Storage::disk('public')->exists($this->current_og_image)) {
                Storage::disk('public')->delete($this->current_og_image);
            }
            
            // Store new image
            $ogImagePath = $this->og_image_file->store('seo-images', 'public');
        }

        $page->update([
            'title' => $this->title,
            'content' => $this->content,
            'meta_description' => $this->meta_description,
            'meta_keywords' => $this->meta_keywords,
            'og_image' => $ogImagePath,
            'is_active' => $this->is_active,
        ]);

        session()->flash('message', 'Page SEO berhasil diperbarui!');
        $this->resetForm();
        $this->showModal = false;
    }

    public function resetForm()
    {
        $this->editingPageId = null;
        $this->title = '';
        $this->slug = '';
        $this->content = '';
        $this->meta_description = '';
        $this->meta_keywords = '';
        $this->og_image = '';
        $this->og_image_file = null;
        $this->current_og_image = '';
        $this->is_active = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
        $this->resetForm();
    }

    public function cancel()
    {
        $this->showModal = false;
        $this->resetForm();
    }

    #[Computed]
    public function pages()
    {
        return Page::query()
            ->when($this->search, function ($query) {
                $query->where('title', 'like', '%' . $this->search . '%')
                      ->orWhere('slug', 'like', '%' . $this->search . '%');
            })
            ->orderBy('created_at', 'desc')
            ->paginate(10);
    }

    public function render()
    {
        return view('livewire.page-s-e-o')->layout('components.layouts.app', [
            'title' => 'Manage Page SEO'
        ]);
    }
}
