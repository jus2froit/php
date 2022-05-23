<?php declare(strict_types = 1);

namespace App\Blog\Traits;

Use App\Blog\Tag;

trait Taggable
{
    private $Tag;

    /**
     * Get the value of Tag
     */ 
    public function getTag(): array
    {
        return $this->Tag;
    }

    /**
     * Set the value of Tag
     *
     * @return  self
     */ 
    public function setTag(array $Tag): self
    {
        $this->Tag = $Tag;

        return $this;
    }

    public function addTag(Tag $tag): self
    {
        if (!in_array($tag, $this->tags)){
            $this->tags[] = $tag;
        }

        return $this;
    }

    public function removeTag(Tag $tag): self
    {
        $index = array_search($tag, $this->tags);

        if ($index !== false){
            array_splice($this->tags, $index, 1);
        }
        
        return $this;
    }
}