CREATE TABLE movies(
    rank int NOT NULL PRIMARY KEY, 
    titre varchar(255), 
    réalisateur varchar(255), 
    acteurs varchar(255), 
    année int);
INSERT INTO movies (rank, titre, réalisateur, acteurs, année) VALUES ('','Sin City','Frank Miller & Robert Rodriguez', 'Mickey Rourke, Clive Owen, Bruce Willis, Jessica Alba, Rosario Dawson','2005')