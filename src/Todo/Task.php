<?php declare(strict_types = 1);

namespace App\Todo;
use DateTime;

class Task
{
    private $id;
    private $title;
    private $createDate;
    private $limitDate;
    private $done;
    private $tags;
    private $category;

    public function __construct(int $id, string $title, DateTime $createDate, DateTime $limitDate, bool $done, array $tags = [], int $category)
    {
        $this->id = $id;
        $this->title = $title;
        $this->createDate = $createDate;
        $this->limitDate = $limitDate;
        $this->done = $done;
        $this->tags = $tags;
    }

    /**
     * Get the value of id
     */ 
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of createDate
     */ 
    public function getCreateDate(): DateTime
    {
        return $this->createDate;
    }

    /**
     * Set the value of createDate
     *
     * @return  self
     */ 
    public function setCreateDate(DateTime $createDate): self
    {
        $this->createDate = $createDate;

        return $this;
    }

    /**
     * Get the value of limitDate
     */ 
    public function getLimitDate(): DateTime
    {
        return $this->limitDate;
    }

    /**
     * Set the value of limitDate
     *
     * @return  self
     */ 
    public function setLimitDate(DateTime $limitDate): self
    {
        $this->limitDate = $limitDate;

        return $this;
    }

    /**
     * Get the value of done
     */ 
    public function getDone(): bool
    {
        return $this->done;
    }

    /**
     * Set the value of done
     *
     * @return  self
     */ 
    public function setDone(bool $done): self
    {
        $this->done = $done;

        return $this;
    }

    /**
     * Get the value of tags
     */ 
    public function getTags(): array
    {
        return $this->tags;
    }

    /**
     * Set the value of tags
     *
     * @return  self
     */ 
    public function setTags(array $tags): self
    {
        $this->tags = $tags;

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

    /**
     * Get the value of category
     */ 
    public function getCategory(): string
    {
        return $this->category;
    }

    /**
     * Set the value of category
     *
     * @return  self
     */ 
    public function setCategory(Category $category): self
    {
        $this->category = $category;

        return $this;
    }
}