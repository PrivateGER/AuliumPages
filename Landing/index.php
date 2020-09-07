<html>
    <head>
        <link rel="stylesheet" href="styling.css">
		<title>PrivateGER Landing Page</title>
    </head>
    <body>
        <div class="terminal_box">

            <p>
				Connection established from <?= $_SERVER["REMOTE_ADDR"] === "::1" ? "127.0.0.1" : $_SERVER["REMOTE_ADDR"] ?> over <?= isset($_SERVER["HTTPS"]) ? "secure" : "unencrypted" ?> channel.<br />
                ╭─<span class="blue_text">[</span>~<span class="blue_text">]</span>─<span class="blue_text">[</span>privateger@AuliumMaster<span class="blue_text">]</span>─<span class="blue_text">[</span>0<span class="blue_text">]</span>─<span class="blue_text">[</span>157<span class="blue_text">]</span><br />
                ╰─<span class="blue_text">[</span><span class="green_text">:)</span><span class="blue_text">]</span> % pwd<br />
                /home/privateger
                <br />
                ╭─<span class="blue_text">[</span>~<span class="blue_text">]</span>─<span class="blue_text">[</span>privateger@AuliumMaster<span class="blue_text">]</span>─<span class="blue_text">[</span>0<span class="blue_text">]</span>─<span class="blue_text">[</span>157<span class="blue_text">]</span><br />
                ╰─<span class="blue_text">[</span><span class="green_text">:)</span><span class="blue_text">]</span> % ls<br />
                total 5<br />
                -rw-rw-r-- 1 privateger privateger    0 Sep  6 21:39 information.txt<br />
                -rw-rw-r-- 1 privateger privateger    0 Sep  6 21:40 job.txt<br />
                -rw-rw-r-- 1 privateger privateger    0 Sep  6 21:40 contact.txt<br />
                -rw-rw-r-- 1 privateger privateger    0 Sep  6 21:40 github.txt<br />
                -rw-rw-r-- 1 privateger privateger    0 Sep  6 21:40 pgp.asc<br />
                ╭─<span class="blue_text">[</span>~<span class="blue_text">]</span>─<span class="blue_text">[</span>privateger@AuliumMaster<span class="blue_text">]</span>─<span class="blue_text">[</span>0<span class="blue_text">]</span>─<span class="blue_text">[</span>157<span class="blue_text">]</span><br />
                ╰─<span class="blue_text">[</span><span class="green_text">:)</span><span class="blue_text">]</span> % cat information.txt<br />
                Name: Marc<br />
                Born: 02/06/2003<br />
                ╭─<span class="blue_text">[</span>~<span class="blue_text">]</span>─<span class="blue_text">[</span>privateger@AuliumMaster<span class="blue_text">]</span>─<span class="blue_text">[</span>0<span class="blue_text">]</span>─<span class="blue_text">[</span>157<span class="blue_text">]</span><br />
                ╰─<span class="blue_text">[</span><span class="green_text">:)</span><span class="blue_text">]</span> % cat job.txt<br />
                Still just in highschool. Let's see what the future holds!<br />
                ╭─<span class="blue_text">[</span>~<span class="blue_text">]</span>─<span class="blue_text">[</span>privateger@AuliumMaster<span class="blue_text">]</span>─<span class="blue_text">[</span>0<span class="blue_text">]</span>─<span class="blue_text">[</span>157<span class="blue_text">]</span><br />
                ╰─<span class="blue_text">[</span><span class="green_text">:)</span><span class="blue_text">]</span> % cat contact.txt<br />
                E-Mail: privateger@tutanota.com<br />
                Discord: PrivateGER#4089<br />
                Jabber/XMPP: privateger@jabber.calyxinstitute.org<br />
                ╭─<span class="blue_text">[</span>~<span class="blue_text">]</span>─<span class="blue_text">[</span>privateger@AuliumMaster<span class="blue_text">]</span>─<span class="blue_text">[</span>0<span class="blue_text">]</span>─<span class="blue_text">[</span>157<span class="blue_text">]</span><br />
                ╰─<span class="blue_text">[</span><span class="green_text">:)</span><span class="blue_text">]</span> % cat github.txt<br />
                You can find me on GitHub under the name PerhapsSomeone. <a target="_blank" rel="noopener noreferrer" href="https://github.com/PerhapsSomeone">Click here!</a><br />
                ╭─<span class="blue_text">[</span>~<span class="blue_text">]</span>─<span class="blue_text">[</span>privateger@AuliumMaster<span class="blue_text">]</span>─<span class="blue_text">[</span>0<span class="blue_text">]</span>─<span class="blue_text">[</span>157<span class="blue_text">]</span><br />
                ╰─<span class="blue_text">[</span><span class="green_text">:)</span><span class="blue_text">]</span> % cat pgp.asc<br />
                You can also send me PGP-encrypted messages if you wish.<br />
                PGP fingerprint: 0xCAE625C962F94C67<br />
                Full public key: <a href="pgp.txt" target="_blank">Here</a><br />
            </p>

        </div>
    </body>
</html>
