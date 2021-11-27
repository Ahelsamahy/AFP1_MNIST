DELIMITER $$
CREATE OR REPLACE PROCEDURE AddTraining()
BEGIN
	DECLARE x int;
	DECLARE l VARCHAR(255);
	SET x = 0;
	add_training:  LOOP
		IF  x >= 60000 THEN 
			LEAVE  add_training;
		END  IF;
		SET l = CONCAT('./Mnist_Images/Training/', x, '.png');
		INSERT INTO `mnist_images` (`location`) VALUES(l);
		SET x = x + 1;
	END LOOP;
END$$
DELIMITER ;

CALL AddTraining();
DROP PROCEDURE AddTraining;

DELIMITER $$
CREATE OR REPLACE PROCEDURE AddTesting()
BEGIN
	DECLARE x int;
	DECLARE l VARCHAR(255);
	SET x = 0;
	add_testing:  LOOP
		IF  x >= 10000 THEN 
			LEAVE  add_testing;
		END  IF;
		SET l = CONCAT('./Mnist_Images/Testing/', x, '.png');
		INSERT INTO `mnist_images` (`location`) VALUES(l);
		SET x = x + 1;
	END LOOP;
END$$
DELIMITER ;

CALL AddTesting();
DROP PROCEDURE AddTesting;