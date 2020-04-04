DELETE FROM posts;
DELETE FROM bodyPart;
DELETE FROM difficulty;
DELETE FROM images;




INSERT INTO bodyPart(id, part) VALUES ('1','arms');
INSERT INTO bodyPart(id, part) VALUES ('2','chest');
INSERT INTO bodyPart(id, part) VALUES ('3','abs');
INSERT INTO bodyPart(id, part) VALUES ('4','legs');



INSERT INTO difficulty VALUES ('1','beginner');
INSERT INTO difficulty VALUES ('2','intermediate');
INSERT INTO difficulty VALUES ('3','advanced');

INSERT INTO images VAlUES ('1', 'PHOTO');

INSERT INTO posts VALUES ('1','running','4', '1', '2','Run around the block 3 times');