<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

        <div>

            <?php require('./css.php'); ?>                         
        
            <div class="screen">      
                <div class="screen-header">
                    <div class="screen-header-left">
                        <img src="https://via.placeholder.com/200x40" alt="" >
                        <?php require('./header-menu-primary.php'); ?>                         
                    </div>
                    <div class="screen-header-right">
                        <?php require('./header-menu-secondary.php'); ?>                         
                        <?php require('./header-menu-tertiary.php'); ?>                         
                    </div>
                </div>
        
                <div class="screen-body">
                    <div class="side-panel">
                        <?php require('./main-menu.php'); ?>                         
                        <?php require('./bottom-menu.php'); ?>                         
                    </div>

                    <?php require('./main-panels.php'); ?>                         
                </div>        
            </div>
                
            <?php require('./js.php'); ?>                         
                            
        </div>        

    </body>
</html>