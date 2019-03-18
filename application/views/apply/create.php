<?php echo validation_errors(); ?>

<?php echo form_open('apply/create') ?>


<label for="title">email</label>
<input type="input" name="email" value="<?php echo set_value('email')?>"/><br />
<br><br>
<label for="text">name</label>
<input type="input" name="name" value="<?php echo set_value('name')?>"/><br />
<br><br>
<label for="title">favorite framework</label>
<select name="framework">
	<option value="">choose framework</option>
	<option <?php echo  set_select('framework', 'code igniter'); ?>>code igniter</option>
	<option <?php echo  set_select('framework', 'symphony'); ?>>symphony</option>
	<option <?php echo  set_select('framework', 'jquery'); ?>>jquery</option>
</select>
<br><br>
<input type="submit" name="submit" value="apply job" />


</form>



