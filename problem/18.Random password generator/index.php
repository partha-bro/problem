<?php
	$title = "Random Password Generator";
	$question = "<pre>
Topic:  Make a program for create a 
        Random Password with choosen length
        And copy that password for system.</pre>";

    require_once("../../theme.html");
    
    # Code Here
?>

<form action="<?= $_SERVER['PHP_SELF'] ?>" method='post'>
    <select name='length'>
        <option value="0">Select your length</option>
        <option value="2">2</option>
        <option value="5">5</option>
        <option value="10">10</option>
    </select>
    <input type="submit" name="generate" value="Generate">
</form>

<?php 
    
    if (isset($_POST['generate'])) {
        # code...
        $length = $_POST['length'];

        if ($length == '0') {
            # code...
            echo "<strong style='color:red'> Please select your password length.</strong>";
        }else{
            // a string which we can create password
            $alphabet = 'abcdefghijklmnopqrstuvwxyz!@#$%^&*()_+?>;<:"ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
            $pass = ''; //for password remember

            for ($i=0; $i < $length; $i++) { 
                # code...
                $n = rand(0,strlen($alphabet)-1);   // retrive random number to select char
                $pass .= $alphabet[$n];             // find that number of index to collect char
            }
            echo "<strong> Your password is ".$pass."</strong>";
        }
        
    }