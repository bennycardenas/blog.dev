<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dice Roll</title>
</head>
<body>
    <h1>Your roll is <?php $roll = rand(1,6); echo $roll; ?></h1>
    <?php var_dump($roll); ?>

        <?php if($guess == $roll){echo 'correct';} else {echo 'Your guess is wrong';} ?>

</body>
</html>