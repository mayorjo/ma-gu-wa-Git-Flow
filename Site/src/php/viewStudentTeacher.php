<<<<<<< HEAD
<?php
/**
 * ETML
 * Auteur: Jérôme Wassenberg
 * Date: 21.03.2017
 * Description: Page de visualisation des élèves et des enseignants
 **/

include 'include/head.php';
include 'functions/PDOLink.php';
$PDOLink = new PDOLink();
$query1="SELECT stuName, stuFirstname FROM t_student";
$query2="SELECT * FROM t_former";
$req1 = $PDOLink->executeQuery($query1);
$req2 = $PDOLink->executeQuery($query2);
?>
<link type="text/css" rel="stylesheet" href="../../ressources/css/viewStudentTeacher.css">
<script>
    function viewStudent(){
        location.href = "viewDetails.php";
    }

    function viewTeacher(){
        location.href = "viewDetails.php?id=<?php $query2['...'] ?>";
    }
</script>

<body>

    <section>

        <div id="container">
            <h1>Elèves</h1>

                <?php
                $result1 = $PDOLink->prepareData($req1);
                foreach($result1 as $display)
                {
                    ?>
                        <a href="viewDetails.php">
                            <div id="cour">
                                <div>
                                    <div id="logo">
                                        <img src="../../ressources/images/logo_student.png">
                                    </div>
                                    <div id="name">
                                        <p><?php echo $display['stuFirstname']?></p>
                                        <p><?php echo $display['stuName']?></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php
                }
                ?>

                <h1>Enseignants</h1>

                <?php
                $result2 = $PDOLink->prepareData($req2);
                foreach($result2 as $display)
                {
                    ?>
                        <a href="viewDetails.php">
                            <div id="cour">
                                <div>
                                    <div id="logo">
                                        <img src="../../ressources/images/logo_teacher.png">
                                    </div>
                                    <div id="name">
                                        <p><?php echo $display['forFirstname']?></p>
                                        <p><?php echo $display['forName']?></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php
                }
                ?>
        </div>
    </section>
</body>

<?php
$PDOLink->closeCursor($req1);
$PDOLink->closeCursor($req2);
$PDOLink->destroyObject();
include 'include/footer.php';
=======
<?php
/**
 * ETML
 * Auteur: Jérôme Wassenberg
 * Date: 21.03.2017
 * Description: Page de visualisation des élèves et des enseignants
 **/

include 'include/head.php';
include 'functions/PDOLink.php';
$PDOLink = new PDOLink();
$query1="SELECT stuName, stuFirstname FROM t_student";
$query2="SELECT * FROM t_former";
$req1 = $PDOLink->executeQuery($query1);
$req2 = $PDOLink->executeQuery($query2);
?>
<link type="text/css" rel="stylesheet" href="../../ressources/css/viewStudentTeacher.css">
<script>
    function viewStudent(){
        location.href = "viewDetails.php";
    }

    function viewTeacher(){
        location.href = "viewDetails.php?id=<?php $query2['...'] ?>";
    }
</script>

<body>

    <section>

        <div id="container">
            <h1>Elèves</h1>

                <?php
                $result1 = $PDOLink->prepareData($req1);
                foreach($result1 as $display)
                {
                    ?>
                        <a href="viewDetails.php">
                            <div id="cour">
                                <div>
                                    <div id="logo">
                                        <img src="../../ressources/images/logo_student.png">
                                    </div>
                                    <div id="name">
                                        <p><?php echo $display['stuFirstname']?></p>
                                        <p><?php echo $display['stuName']?></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php
                }
                ?>

                <h1>Enseignants</h1>

                <?php
                $result2 = $PDOLink->prepareData($req2);
                foreach($result2 as $display)
                {
                    ?>
                        <a href="viewDetails.php">
                            <div id="cour">
                                <div>
                                    <div id="logo">
                                        <img src="../../ressources/images/logo_teacher.png">
                                    </div>
                                    <div id="name">
                                        <p><?php echo $display['forFirstname']?></p>
                                        <p><?php echo $display['forName']?></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php
                }
                ?>
        </div>
    </section>
</body>

<?php
$PDOLink->closeCursor($req1);
$PDOLink->closeCursor($req2);
$PDOLink->destroyObject();
include 'include/footer.php';
>>>>>>> PHP-IncriptionProf
?>