<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row row--relative">
            <div class="box user-add">
                <?php 
                $action;
                if (isset ($_GET["action"])){
                    $action=$_GET["action"];
                }else{
                    $action="form";  
                }
                switch ($action)
                {
                    case "add-user":
                        include("addUser-method.php");
                        break;
                    default:
                        include("../addUser.php"); 
                        break;
                }
                ?>
            </div>
            <div class="box project-add"> <a href="#"><i class="fa fa-plus fa-5x" aria-hidden="true"></i></a> <a href=""><i class="fa fa-minus fa-5x" aria-hidden="true"></i></a>
                <div class="project-add__title">Dodaj nowy projekt</div>
            </div>
            <div class="box project-add-form" id="project-add-form" draggable="true">
                <?php 
                $action1;
                if (isset ($_GET["action"])){
                    $action1=$_GET["action"];
                }else{
                    $action1="form";  
                }
                switch ($action1)
                {
                    case "add-project":
                        include("addProject-method.php");
                        break;
                    case "editRowProject":
                        include("../editProject.php");
                        break;
                    case "update-project":
                        include("updateProject-method.php");
                        break;
                    default:
                        include("../addProject.php");
                        break;
                }
                ?>
            </div>
        </div>
        <div class="row mt-3">
            <div class="box box--full">
                <?php include("../projects.php");?>
            </div>
        </div>
    </div>
</section>