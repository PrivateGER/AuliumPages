<html>
    <head>
        <link rel="stylesheet" href="styling.css">
		<title>PrivateGER Landing Page</title>
	<script async defer data-domain="privateger.me" src="https://plausible.privateger.me/js/plausible.js"></script>
        <script src="js/encom-globe-min.js"></script>
        <script src="js/tiles.js"></script>
    </head>
    <body>
        <div class="terminal_box" id="topContainer">
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
                ╭─<span class="blue_text">[</span>~<span class="blue_text">]</span>─<span class="blue_text">[</span>privateger@AuliumMaster<span class="blue_text">]</span>─<span class="blue_text">[</span>0<span class="blue_text">]</span>─<span class="blue_text">[</span>157<span class="blue_text">]</span><br />
                ╰─<span class="blue_text">[</span><span class="green_text">:)</span><span class="blue_text">]</span> % cat contact.txt<br />
                E-Mail: <a href="mailto:privateger@privateger.me">privateger@privateger.me</a><br />
                Discord: PrivateGER#4089<br />
		Element: @privateger:matrix.privateger.me
		Session: 057c1a92335433d92f41f707f82d198a579cff2cd47aa4b79eaa42cab99e7f696b<br />
		Fediverse: <a rel="me" href="https://chaos.social/@privateger">@privateger@plasmatrap.com</a><br />
                ╭─<span class="blue_text">[</span>~<span class="blue_text">]</span>─<span class="blue_text">[</span>privateger@AuliumMaster<span class="blue_text">]</span>─<span class="blue_text">[</span>0<span class="blue_text">]</span>─<span class="blue_text">[</span>157<span class="blue_text">]</span><br />
                ╰─<span class="blue_text">[</span><span class="green_text">:)</span><span class="blue_text">]</span> % cat github.txt<br />
                You can find me on GitHub under the name PrivateGER. <a target="_blank" rel="noopener noreferrer" href="https://github.com/PrivateGER">Click here!</a><br />
                ╭─<span class="blue_text">[</span>~<span class="blue_text">]</span>─<span class="blue_text">[</span>privateger@AuliumMaster<span class="blue_text">]</span>─<span class="blue_text">[</span>0<span class="blue_text">]</span>─<span class="blue_text">[</span>157<span class="blue_text">]</span><br />
                ╰─<span class="blue_text">[</span><span class="green_text">:)</span><span class="blue_text">]</span> % cat support.txt<br />
                If you like my work, you can support me using any of these platforms. I'd greatly appreciate it. :)<br />
                <a href="https://ko-fi.com/privateger" target="_blank">Ko-fi</a><br />
                <a href="https://www.patreon.com/privateger" target="_blank">Patreon</a><br />
                Monero Address: <a href="monero:82XBfH1oJdwU5nU5JsbXbrYZC9JnUMu8Abedz3LwkG67P7D5JE7zHQGZ2kBJdZg6pTFeSbFCAaGyQd2SkBCpmLPDRjFMZo8?tx_description=Donation">82XBfH1oJdwU5nU5JsbXbrYZC9JnUMu8Abedz3LwkG67P7D5JE7zHQGZ2kBJdZg6pTFeSbFCAaGyQd2SkBCpmLPDRjFMZo8</a><br />
                <form action="https://www.coinpayments.net/index.php" method="post">
                <input type="hidden" name="cmd" value="_donate">
                <input type="hidden" name="reset" value="1">
                <input type="hidden" name="merchant" value="b99ee3c07379367258411d2129bd82e5">
                <input type="hidden" name="item_name" value="Donation">
                <input type="hidden" name="currency" value="USD">
                <input type="hidden" name="amountf" value="1.00000000">
                <input type="hidden" name="allow_amount" value="1">
                <input type="hidden" name="want_shipping" value="0">
                <input type="hidden" name="success_url" value="https://pastebin.com/raw/8TtTDLf6">
                <input type="hidden" name="allow_extra" value="1">
                <input type="image" src="https://www.coinpayments.net/images/pub/donate-med.png" alt="Donate with CoinPayments.net">
                </form>

		╭─<span class="blue_text">[</span>~<span class="blue_text">]</span>─<span class="blue_text">[</span>privateger@AuliumMaster<span class="blue_text">]</span>─<span class="blue_text">[</span>0<span class="blue_text">]</span>─<span class="blue_text">[</span>157<span class="blue_text">]</span><br />
                ╰─<span class="blue_text">[</span><span class="green_text">:)</span><span class="blue_text">]</span> % cat pgp.asc<br />
                You can also send me PGP-encrypted messages if you wish.<br />
                PGP fingerprint: 0xCAE625C962F94C67<br />
                Full public key: <a href="pgp.txt" target="_blank">Here</a><br />
            </p>

            <div id="globeContainer"></div>

        </div>
        <script src="js/nice_globe.js"></script>
    </body>
</html>
