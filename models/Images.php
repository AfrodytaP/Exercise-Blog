<?php


class Images
{
    private $id;
    private $photo;

    private function __construct($id, $photo)
    {
        $this->id = $id;
        $this->photo = $photo;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getPhoto()
    {
        return $this->photo;
    }
}
