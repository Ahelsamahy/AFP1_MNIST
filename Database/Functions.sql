DELIMITER $$
CREATE OR REPLACE PROCEDURE GetRandomImage()
BEGIN
    SELECT mi.id, mi.location from mnist_images mi
    LEFT JOIN submissions s ON mi.id = s.image_id
    GROUP BY mi.id
    ORDER BY COUNT(mi.id), RAND()
    LIMIT 1;
END; $$
DELIMITER ;