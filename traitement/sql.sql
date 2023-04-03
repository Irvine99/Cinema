CREATE TABLE movie(
   Id_movie INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
   name_movie VARCHAR(50) ,
   description_movie TEXT,
   date_sortie_movie DATE,
   budget_movie DECIMAL(15,2)  ,
   affiche_movie VARCHAR(255) ,
     
)ENGINE=InnoDB;

CREATE TABLE gallery_movie(
   Id_gallery_movie INT AUTO_INCREMENT,
   name_gallery_movie VARCHAR(255) ,
   PRIMARY KEY(Id_gallery_movie)
);

CREATE TABLE url_movie(
   Id_url_movie INT AUTO_INCREMENT,
   name_url_movie VARCHAR(255) ,
   Id_movie INT NOT NULL,
   PRIMARY KEY(Id_url_movie),
   FOREIGN KEY(Id_movie) REFERENCES movie(Id_movie)
);

CREATE TABLE category(
   Id_category INT AUTO_INCREMENT,
   name_category VARCHAR(255) ,
   PRIMARY KEY(Id_category)
);

CREATE TABLE director(
   Id_director INT AUTO_INCREMENT,
   username_director VARCHAR(255) ,
   name_director VARCHAR(255) ,
   PRIMARY KEY(Id_director)
);

CREATE TABLE actor(
   Id_actor INT AUTO_INCREMENT,
   username_actor VARCHAR(255) ,
   name_actor VARCHAR(255) ,
   PRIMARY KEY(Id_actor)
);

CREATE TABLE producer(
   Id_producer INT AUTO_INCREMENT,
   username_producer VARCHAR(255) ,
   name_producer VARCHAR(255) ,
   PRIMARY KEY(Id_producer)
);

CREATE TABLE actor_avatar(
   Id_actor_avatar INT AUTO_INCREMENT,
   name_actor_avatar VARCHAR(255) ,
   Id_actor INT NOT NULL,
   PRIMARY KEY(Id_actor_avatar),
   FOREIGN KEY(Id_actor) REFERENCES actor(Id_actor)
);

CREATE TABLE role(
   Id_role INT AUTO_INCREMENT,
   name_role VARCHAR(50) ,
   PRIMARY KEY(Id_role)
);

CREATE TABLE users(
   Id_users INT AUTO_INCREMENT,
   username VARCHAR(255) ,
   name VARCHAR(255) ,
   date_create DATE,
   email VARCHAR(255) ,
   password VARCHAR(255) ,
   avatar VARCHAR(255)  NOT NULL,
   Id_role INT NOT NULL,
   PRIMARY KEY(Id_users),
   FOREIGN KEY(Id_role) REFERENCES role(Id_role)
);

CREATE TABLE comments(
   Id_comments INT AUTO_INCREMENT,
   text_comments TEXT,
   date_create_comments DATE,
   Id_users INT NOT NULL,
   PRIMARY KEY(Id_comments),
   FOREIGN KEY(Id_users) REFERENCES users(Id_users)
);

CREATE TABLE exister(
   Id_movie INT,
   Id_category INT,
   PRIMARY KEY(Id_movie, Id_category),
   FOREIGN KEY(Id_movie) REFERENCES movie(Id_movie),
   FOREIGN KEY(Id_category) REFERENCES category(Id_category)
)ENGINE =InnoDB;

CREATE TABLE avoir2(
   Id_movie INT,
   Id_producer INT,
   PRIMARY KEY(Id_movie, Id_producer),
   FOREIGN KEY(Id_movie) REFERENCES movie(Id_movie),
   FOREIGN KEY(Id_producer) REFERENCES producer(Id_producer)
);

CREATE TABLE avoir3(
   Id_movie INT,
   Id_director INT,
   PRIMARY KEY(Id_movie, Id_director),
   FOREIGN KEY(Id_movie) REFERENCES movie(Id_movie),
   FOREIGN KEY(Id_director) REFERENCES director(Id_director)
);

CREATE TABLE avoir4(
   Id_movie INT,
   Id_gallery_movie INT,
   PRIMARY KEY(Id_movie, Id_gallery_movie),
   FOREIGN KEY(Id_movie) REFERENCES movie(Id_movie),
   FOREIGN KEY(Id_gallery_movie) REFERENCES gallery_movie(Id_gallery_movie)
);

CREATE TABLE avoir(
   Id_movie INT,
   Id_actor INT,
   PRIMARY KEY(Id_movie, Id_actor),
   FOREIGN KEY(Id_movie) REFERENCES movie(Id_movie),
   FOREIGN KEY(Id_actor) REFERENCES actor(Id_actor)
);

CREATE TABLE avoir5(
   Id_movie INT,
   Id_comments INT,
   PRIMARY KEY(Id_movie, Id_comments),
   FOREIGN KEY(Id_movie) REFERENCES movie(Id_movie),
   FOREIGN KEY(Id_comments) REFERENCES comments(Id_comments)
);

CREATE TABLE favoris(
   Id_users INT,
   Id_movie INT,
   PRIMARY KEY(Id_users, Id_movie),
   FOREIGN KEY(Id_users) REFERENCES users(Id_users),
   FOREIGN KEY(Id_movie) REFERENCES movie(Id_movie)
);

CREATE TABLE regarder(
   Id_users INT,
   Id_movie INT,
   PRIMARY KEY(Id_users, Id_movie),
   FOREIGN KEY(Id_users) REFERENCES users(Id_users),
   FOREIGN KEY(Id_movie) REFERENCES movie(Id_movie)
);
