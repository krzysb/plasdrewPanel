<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="comunicat-box">
            <?php 
            $action;
            if (isset ($_GET["action"])){
                $action=$_GET["action"];
            }else{
                $action="form";  
            }
            switch ($action)
            {
                case "readyProject":
                include("admin/changeProjectStatus.php");
                break;
                case "p-changeProjetStatus":
                    include("messages/p-changeProjektStatus.php");
                break;
                case "n-changeProjetStatus":
                    include("messages/n-changeProjektStatus.php");
                break;
            }
                
            
            
            ?>
        </div>
        <div class="row row-color mt-3">
            <div class="box box--full">
                <h2>Lista projektów</h2>
                <?php include("projectsSzef.php");?>
            </div>
        </div>
    </div>
</section>