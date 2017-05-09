Montre le formers
SELECT `forName`, `forFirstname`, `forJob`, `forEmail` FROM `t_former`


Montre les students
SELECT `stuName`, `stuFirstname`, `stuEmail` FROM `t_student` 


Montre les cours
SELECT `traWording`, `traDuration`, `traStartDate` FROM `t_training`


Inscription à un cours
INSERT INTO `t_participate`(`idTraining`, `idStudent`) VALUES ($valueTraining, $valueIdStudent)


Faire une remarque 
INSERT INTO `t_comment`(`comComment`, `idStudent`, `idTraining`) VALUES ($comment, $idStudent, $idTraining)


Créer un student
INSERT INTO `t_student`(`stuName`, `stuFirstname`, `stuAddress`, `stuEmail`, `stuPhoneNumber`, `stuAVSNumber`) VALUES ($name,$firstName,$address,$email,$phoneNumber,$avsNumber)


Créer un former
INSERT INTO `t_former`(`forName`, `forFirstname`, `forAddress`, `forEmail`, `forPhoneNumber`, `forJob`, `forAVSNumber`) VALUES ($name,$firstName,$address,$email,$phoneNumber,$job,$avsNumber)