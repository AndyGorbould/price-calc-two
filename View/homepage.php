<?php require 'includes/header.php'?>
<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->
<section>
    <h4>Hello <?php echo $customer->getFirstName()?> <?php echo $customer->getLastName()?>, ID#: <?php echo $customer->getID()?></h4>
    <h5><?php echo $customer->getVariableDiscount()?></h5>



    <p><a href="index.php?page=info">To info page</a></p>

    <p>Put your content here.</p>
</section>
<?php require 'includes/footer.php'?>