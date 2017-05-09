Montre le formers
SELECT `forName`, `forFirstname`, `forJob`, `forEmail` FROM `t_former`


Montre les students
SELECT `stuName`, `stuFirstname`, `stuEmail` FROM `t_student` 


Montre les cours
SELECT `traWording`, `traDuration`, `traStartDate` FROM `t_training`


Inscription � un cours
INSERT INTO `t_participate`(`idTraining`, `idStudent`) VALUES ($valueTraining, $valueIdStudent)


Faire une remarque 
INSERT INTO `t_comment`(`comComment`, `idStudent`, `idTraining`) VALUES ($comment, $idStudent, $idTraining)


Cr�er un student
INSERT INTO `t_student`(`stuName`, `stuFirstname`, `stuAddress`, `stuEmail`, `stuPhoneNumber`, `stuAVSNumber`) VALUES ($name,$firstName,$address,$email,$phoneNumber,$avsNumber)


Cr�er un former
INSERT INTO `t_former`(`forName`, `forFirstname`, `forAddress`, `forEmail`, `forPhoneNumber`, `forJob`, `forAVSNumber`) VALUES ($name,$firstName,$address,$email,$phoneNumber,$job,$avsNumber)