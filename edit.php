<h1>THIS IS EDIT PAGE</h1>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
</head>
<body>
    <h1>Edit Employee Data</h1>
    <a href="<?php echo base_url('employee'); ?>">Back</a><br>

    <form action="<?php echo base_url('employee/update'); ?>" method="post">
        <input type="hidden" name="id" value="<?php echo $employee->id; ?>">
        Username: <input type="text" name="username" value="<?php echo $employee->username; ?>"><br />
        <small><?php echo form_error('username'); ?></small>
        Password: <input type="password" name="password" value="<?php echo $employee->password; ?>"><br />
        <small><?php echo form_error('password'); ?></small>
        Email:    <input type="email" name="email" value="<?php echo $employee->email; ?>"><br />
        <small><?php echo form_error('email'); ?></small>
        Mobile:   <input type="text" name="mobile" value="<?php echo $employee->mobile; ?>"><br />
        <small><?php echo form_error('mobile'); ?></small>
        <input type="submit" value="Update" name="submit">
    </form>
</body>
</html>
