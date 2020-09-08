<?php $render('header'); ?>

<h2>Add new user</h2>

<form method="POST" action="<?=$base;?>/new">
    <label>
        Name:<br/>
        <input type="text" name="name"/>
    </label><br/><br/>

    <label>
        E-mail:<br/>
        <input type="email" name="email"/>
    </label><br/><br/>

    <input type="submit" value="Add"/>
</form>

<?php $render('footer'); ?>