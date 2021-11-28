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

DELIMITER $$
CREATE OR REPLACE PROCEDURE EstimateValue(IN p_image_id int)
BEGIN
	DECLARE v_estimated_value int;
    SELECT `value` FROM `submissions`
	WHERE `image_id` = p_image_id
	GROUP BY `value`
	ORDER BY count(`value`) DESC
	LIMIT 1
	INTO v_estimated_value;

	UPDATE `mnist_images` 
	SET `estimated_value` = v_estimated_value 
	WHERE `id` = p_image_id;
END; $$
DELIMITER ;
	
DELIMITER $$
CREATE OR REPLACE PROCEDURE Submit(IN p_image_id int, IN p_value int)
BEGIN
    INSERT INTO `submissions`(`image_id`, `value`) VALUES (p_image_id, p_value);
	CALL EstimateValue(p_image_id);
END; $$
DELIMITER ;