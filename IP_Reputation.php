<?php // Simple PHP script to lookup for blacklisted IP against multiple DNSBLs at once. ?>



<form action="ind.php?page=ip_reputation" method="post">
<div class="row">
		<div class="col-md-7">
			<div class="card card-outline card-info">
				<div class="card-header">
					<div class="card-tools">
						<small class="text-muted">
						</small>
					</div>
				</div>
				<div class="card-body">
<label >IP Reputation Search</label>
    <input type="text" placeholder="Enter Domain/IP Address" value="" name="ip"/>
    <button type="submit" name= "submit" class="btn btn-primary">Lookup</button>
</form>
<span class="colortext">
               
                     <dd></dd>
						</dl>
					</div>
					
				</div>
			</div>

?>
<div class="col-md-7">
			<div class="card card-outline card-info">
				<div class="card-header">
					<div class="card-tools">
						<small class="text-muted">
						</small>
					</div>
				</div>
				<div class="card-body">
                    
<body>

<?php

/**
 * The IP-address to be looked up.
 * @param string $ip
 */
function dnsbllookup($ip)
{
    // Add your preferred list of DNSBL's
    $dnsbl_lookup = [
        "dnsbl-1.uceprotect.net",
        "dnsbl-2.uceprotect.net",
        "dnsbl-3.uceprotect.net",
        "dnsbl.dronebl.org",
        "dnsbl.sorbs.net",
        "zen.spamhaus.org",
        "bl.spamcop.net",
        "list.dsbl.org"
    ];

    $listed = "";

    if ($ip) {
        $reverse_ip = implode(".", array_reverse(explode(".", $ip)));
        foreach ($dnsbl_lookup as $host) {
            if (checkdnsrr($reverse_ip . "." . $host . ".", "A")) {
                $listed .= $reverse_ip . '.' . $host . ' <font color="red">MALICIOUS</font><br />';
            }
        }
    }

    if (empty($listed)) {
        echo '"A" record was not found';
    } else {
        echo $listed;
    }
}

if (isset($_POST['ip']) && $_POST['ip'] != null) {
    $ip = $_POST['ip'];
    if (filter_var($ip, FILTER_VALIDATE_IP)) {
        echo dnsbllookup($ip);
    } else {
        echo "Please enter a valid IP";
    }
}

?>
</body>
</html>
						<small class="text-muted">
						</small>
					</div>
				</div>
				<div class="card-body">
                <dd></dd>
						</dl>
					</div>
					
				</div>
			</div>
		</div>
		