<?php

class Posts

{
    private $id;
    private $exercise_name;
    private $body_part_id;
    private $image_id;
    private $difficulty_id;
    private $description;

    private function __construct($id, $exercise_name, $body_part_id, $image_id, $difficulty_id, $description)
    {
        $this->id = $id;
        $this->exercise_name = $exercise_name;
        $this->body_part_id = $body_part_id;
        $this->image_id = $image_id;
        $this->difficulty_id = $difficulty_id;
        $this->description = $description;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getExerciseName()
    {
        return $this->exercise_name;
    }

    public function getBodyPartId($body_part_id)
    {
        $this->body_part_id = $body_part_id;
    }

    public function getImageId()
    {
        return $this->image_id;
    }

    public function getDifficultyId()
    {
        return $this->difficulty_id;
    }

    public function getDescription()
    {
        return $this->description;
    }
}