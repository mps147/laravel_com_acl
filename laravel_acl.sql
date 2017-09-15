CREATE DATABASE laravel_acl DEFAULT CHAR SET utf8 DEFAULT COLLATE utf8_unicode_ci;
USE laravel_acl;

INSERT INTO notices (id, user_id, title, description, created_at, updated_at) 
VALUES (
	1, 
	1, 
    "post 2", 
	"Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI",
	"2017-09-04",
    "2017-09-04"
);

SELECT * FROM laravel_acl.users;

SELECT * FROM laravel_acl.posts;