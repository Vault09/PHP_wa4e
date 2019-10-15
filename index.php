<!DOCTYPE html>
<head><title>Abhishek Mundada MD5 Cracker</title></head>
<body>
<h1>MD5 cracker</h1>
<p>
This application takes an MD5 hash of a four digit pin and check all 10,000 possible four digit PINs to determine the PIN.
</p>
<pre>
Debug Output:
<?php
$total_checks = 0;
$goodpin = "Not found";
if ( isset($_GET['md5']) ) {
    $time_pre = microtime(true);
    $md5 = $_GET['md5'];

    $txt = "0123456789";
    $show = 20;

    for($i=0; $i<strlen($txt); $i++ ) {
        $ch1 = $txt[$i];

        for($j=0; $j<strlen($txt); $j++ ) {
            $ch2 = $txt[$j];
            
            for($k=0; $k<strlen($txt); $k++ ) {
                $ch3 = $txt[$k];

                for($l=0; $l<strlen($txt); $l++ ) {
                    $ch4 = $txt[$l];
            $try = $ch1.$ch2.$ch3.$ch4;

            $check = hash('md5', $try);
            if ( $check == $md5 ) {
                $goodpin = $try;
                $total_checks = $total_checks + 1;
                break;   
            }

            if ( $show > 0 ) {
                print "$check $try\n";
                $show = $show - 1;
            }
        }
    }
}
}
    $time_post = microtime(true);
    print "Elapsed time: ";
    print $time_post-$time_pre;
    print "\n";
}
?>
</pre>
<p>PIN: <?= htmlentities($goodpin); ?></p>
<form>
<input type="text" name="md5" size="60" />
<input type="submit" value="Crack MD5"/>
</form>
<ul>
<li><a href="index.php">Reset</a></li>
<li><a href="makepin.php">Make an MD5 PIN</a></li>
<li><a href="md5.php">MD5 Encoder</a></li>
<li><a href="https://www.wa4e.com/assn/crack/" target="_blank">Specification for this assignment</a></li>
<li><a href="https://github.com/Vault09/PHP_wa4e/tree/Hashing" target="_blank">Source code similar to this application</a></li>
</ul>
</body>
</html>
