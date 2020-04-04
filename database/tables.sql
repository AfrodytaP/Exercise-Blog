DROP TABLE IF EXISTS posts;
DROP TABLE IF EXISTS bodyPart;
DROP TABLE IF EXISTS difficulty;
DROP TABLE IF EXISTS images;



CREATE TABLE bodyPart
(
    id   tinyint PRIMARY KEY AUTO_INCREMENT,
    part varchar(20) NOT NULL
);

CREATE TABLE difficulty
(
    id    tinyint PRIMARY KEY AUTO_INCREMENT,
    level varchar(12) NOT NULL
);

CREATE TABLE images
(
    id    tinyint PRIMARY KEY AUTO_INCREMENT,
    photo BLOB NOT NULL
);

CREATE TABLE posts
(
    id            int PRIMARY KEY AUTO_INCREMENT,
    exercise_name varchar(225) NOT NULL,
    body_part_id  tinyint      NOT NULL,
    image_id      tinyint      NOT NULL,
    difficulty_id tinyint      NOT NULL,
    description   varchar(225) NOT NULL,
    CONSTRAINT `fk_posts_bodyPart` FOREIGN KEY (body_part_id) REFERENCES bodyPart (id) ON UPDATE CASCADE ON DELETE RESTRICT,
    CONSTRAINT `fk_posts_images` FOREIGN KEY (image_id) REFERENCES images (id) ON UPDATE CASCADE ON DELETE RESTRICT,
    CONSTRAINT `fk_posts_difficulty` FOREIGN KEY (difficulty_id) REFERENCES difficulty (id) ON UPDATE CASCADE ON DELETE RESTRICT
);