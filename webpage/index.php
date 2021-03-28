<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Validating Forms</title>
		<link href="style.css" type="text/css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	</head>
	
	<body>
		<h1>Registration Form</h1>

		<p>
			This form validates user input and then displays "Thank You" page.
		</p>
		
		<hr />
		<?php
        $name='';
        $email='';
        $password='';
        $username='';
        $repassword='';
        $birthday='';
        $gender='';
        $marital='';
        $address='';
        $city='';
        $postCode='';
        $homePhone='';
        $creditCard='';
        $creditCardExp='';
        $salary='';
        $website='';
        $gpa='';
        ?>
		<h2>Please, fill below fields correctly</h2>
        <form action="index.php" method="post">
		<dl>
			<dt>Name</dt>
			<dd>
                <input type="text" class="form-control <?= preg_match('/[A-Za-z]{2,}/',$name) ? '' : 'is-invalid' ?>" id="name"
                       name="name" value="<?= $name ?>" placeholder="Enter name">
                <div class="invalid-feedback">
                    Please, enter name
                </div>
			</dd>
            <dt>Email</dt>
            <dd>
                <input type="text" class="form-control <?= preg_match('/([\w-\.]+)@((?:[\w]+\.)+)([a-zA-Z](2,4))/',$email) ? '' : 'is-invalid' ?>" id="email"
                       name="email" value="<?= $email ?>" placeholder="Enter email">
                <div class="invalid-feedback">
                    Please, enter email
                </div>
            </dd>
            <dt>Username</dt>
            <dd>
                <input type="text" class="form-control <?= preg_match('/\w{5,}/',$username) ? '' : 'is-invalid' ?>" id="username"
                       name="username" value="<?= $username ?>" placeholder="Enter username">
                <div class="invalid-feedback">
                    Please, enter username
                </div>
            </dd>
            <dt>Password</dt>
            <dd>
                <input type="text" class="form-control <?= preg_match('/\w{8,}/',$password) ? '' : 'is-invalid' ?>" id="password"
                       name="password" value="<?= $password ?>" placeholder="Enter password">
                <div class="invalid-feedback">
                    Please, enter password
                </div>
            </dd>
            <dt>Confirm password</dt>
            <dd>
                <input type="text" class="form-control <?= ($password==$repassword) ? '' : 'is-invalid' ?>" id="password"
                       name="password" value="<?= $repassword ?>" placeholder="Enter password">
                <div class="invalid-feedback">
                    Please, enter password
                </div>
            </dd>
            <dt>Date of birth (dd.mm.yyyy)</dt>
            <dd>
                <input type="text" class="form-control <?= preg_match('/[0-9]{2}\.[0-9]{2}\.[0-9]{4}/',$birthday) ? '' : 'is-invalid' ?>" id="birthday"
                       name="birthday" value="<?= $birthday ?>" placeholder="Enter birthday">
                <div class="invalid-feedback">
                    Please, enter birthday
                </div>
            </dd>
            <dt>Gender (Male/Female)</dt>
            <dd>
                <input type="text" class="form-control <?= preg_match('/(Male)|(Female)/',$gender) ? '' : 'is-invalid' ?>" id="gender"
                       name="gender" value="<?= $gender ?>" placeholder="Enter gender">
                <div class="invalid-feedback">
                    Please, enter gender
                </div>
            </dd>
            <dt>Marital Status (Single, Married, Divorced, Widowed)         </dt>
            <dd>
                <input type="text" class="form-control <?= preg_match('/(Single)|(Married)|(Divorced)|(Widowed)/',$marital) ? '' : 'is-invalid' ?>" id="marital"
                       name="marital" value="<?= $marital ?>" placeholder="Enter marital">
                <div class="invalid-feedback">
                    Please, enter marital status
                </div>
            </dd>
            <dt>Address</dt>
            <dd>
                <input type="text" class="form-control <?= preg_match('/\w{2,100}/',$address) ? '' : 'is-invalid' ?>" id="address"
                       name="address" value="<?= $address ?>" placeholder="Enter address">
                <div class="invalid-feedback">
                    Please, enter address
                </div>
            </dd>
            <dt>City</dt>
            <dd>
                <input type="text" class="form-control <?= preg_match('/\w{2,100}/',$city) ? '' : 'is-invalid' ?>" id="city"
                       name="city" value="<?= $city ?>" placeholder="Enter city">
                <div class="invalid-feedback">
                    Please, enter city
                </div>
            </dd>
            <dt>Post code</dt>
            <dd>
                <input type="text" class="form-control <?= preg_match('/[0-9]{6}/',$postCode) ? '' : 'is-invalid' ?>" id="postCode"
                       name="postCode" value="<?= $postCode ?>" placeholder="Enter post code">
                <div class="invalid-feedback">
                    Please, enter post code
                </div>
            </dd>
            <dt>Home phone</dt>
            <dd>
                <input type="text" class="form-control <?= preg_match('/[0-9]{9}/',$homePhone) ? '' : 'is-invalid' ?>" id="homePhone"
                       name="homePhone" value="<?= $homePhone ?>" placeholder="Enter home phone">
                <div class="invalid-feedback">
                    Please, enter home phone
                </div>
            </dd>
            <dt>Credit card number</dt>
            <dd>
                <input type="text" class="form-control <?= preg_match('/[0-9]{16}/',$creditCard) ? '' : 'is-invalid' ?>" id="creditCard"
                       name="creditCard" value="<?= $creditCard ?>" placeholder="Enter credit card number">
                <div class="invalid-feedback">
                    Please, enter credit card number
                </div>
            </dd>
            <dt>Credit card expire date</dt>
            <dd>
                <div class="invalid-feedback">
                    <input type="text" class="form-control <?= preg_match('/[0-9]{2}\.[0-9]{2}\.[0-9]{4}/',$creditCardExp) ? '' : 'is-invalid' ?>" id="creditCardExp"
                           name="creditCardExp" value="<?= $creditCardExp ?>" placeholder="Enter credit card expire date">
                    Please, enter credit card expire date
                </div>
            </dd>
            <dt>Salary (UZS _______.__)</dt>
            <dd>
                <div class="invalid-feedback">
                    <input type="text" class="form-control <?= preg_match('/(UZS )[0-9]{1,15}\.[0-9]{1,2}/',$salary) ? '' : 'is-invalid' ?>" id="salary"
                           name="salary" value="<?= $salary ?>" placeholder="Enter salary">
                    Please, enter salary
                </div>
            </dd>
            <dt>Website</dt>
            <dd>
                <div class="invalid-feedback">
                    <input type="text" class="form-control <?= preg_match('/(http://)[a-zA-Z]{1,15}\.[a-z]{1,3}/',$website) ? '' : 'is-invalid' ?>" id="website"
                           name="website" value="<?= $website ?>" placeholder="Enter website">
                    Please, enter website
                </div>
            </dd>
            <dt>GPA</dt>
            <dd>
                <div class="invalid-feedback">
                    <input type="text" class="form-control <?= preg_match('/[0-9]{1}\.[0-9]{1}/',$gpa) ? '' : 'is-invalid' ?>" id="gpa"
                           name="gpa" value="<?= $gpa ?>" placeholder="Enter gpa">
                    Please, enter gpa
                </div>
            </dd>
		</dl>
		
		<div>
			<input type="submit" value="Register">
        </div>
        </form>
	</body>
</html>