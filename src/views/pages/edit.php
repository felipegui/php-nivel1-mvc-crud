<?php $render('header'); ?>

<h2>Edit new user</h2>

<form method="POST" action="<?=$base;?>/user/<?=$user['id'];?>/edit">
    <label>
        Name:<br/>
        <input type="text" name="name" value="<?=$user['name'];?>" />
    </label><br/><br/>

    <label>
        E-mail:<br/>
        <input type="email" name="email" value="<?=$user['email'];?>" />
    </label><br/><br/>

    <input type="submit" value="Salve"/>
</form>

<?php $render('footer'); ?>