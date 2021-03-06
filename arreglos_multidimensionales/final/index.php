<?php
$people = array();
$person['name'] = 'Bernardo';
$person['age'] = 35;
$person['married'] = FALSE;
$people[] = $person;
$person['name'] = 'Francisco';
$person['age'] = 29;
$person['married'] = TRUE;
$people[] = $person;

//echo '<pre>';
//var_dump($people);

?><!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Curso PHP Intermedio</title>
    <link href=
    "http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css" rel=
    "stylesheet">
    <link href=
    'http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css'
    rel='stylesheet' type='text/css'>
</head>
<body>
    <div class="row">
        <div class="medium-5 large-3 columns"></div>
    </div>
    <div class="row column">
        <p class="lead">Arreglos multidimensionales</p>
    </div>
    <div class="row small-up-1 medium-up-2 large-up-3">

        <?php foreach($people as $id => $person){ ?>
        <div class="column">
            <div class="callout">
                <p><?php echo $id; ?></p>
                <p><img alt="image of a planet called Pegasi B" src=
                "http://placehold.it/400x370&text=Pegasi%20B"></p>
                <p class="lead"><?php echo $person['name']; ?></p>
                <p class="subheader">¿Casado? <?php echo $person['married'] ? 'Si' : 'No'; ?></p>
            </div>
        </div>
        <?php } ?>

    </div>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js">
    </script> 
    <script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js">
    </script> 
    <script>
      $(document).foundation();
    </script> 
    <script src="https://intercom.zurb.com/scripts/zcom.js" type=
    "text/javascript">
    </script>
</body>
</html>