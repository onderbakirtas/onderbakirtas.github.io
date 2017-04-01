<?php

if (!defined('FORUM')) exit;
define('FORUM_QJ_LOADED', 1);
$forum_id = isset($forum_id) ? $forum_id : 0;

?><form id="qjump" method="get" accept-charset="utf-8" action="http://localhost/hcforum/viewforum.php">
	<div class="frm-fld frm-select">
		<label for="qjump-select"><span><?php echo $lang_common['Jump to'] ?></span></label><br />
		<span class="frm-input"><select id="qjump-select" name="id">
			<optgroup label="Hazard Course">
				<option value="2"<?php echo ($forum_id == 2) ? ' selected="selected"' : '' ?>>Haberler ve Güncellemeler</option>
				<option value="3"<?php echo ($forum_id == 3) ? ' selected="selected"' : '' ?>>Duyurular</option>
				<option value="5"<?php echo ($forum_id == 5) ? ' selected="selected"' : '' ?>>Öneriler ve Şikayetler</option>
				<option value="4"<?php echo ($forum_id == 4) ? ' selected="selected"' : '' ?>>Genel Sohbet</option>
				<option value="1"<?php echo ($forum_id == 1) ? ' selected="selected"' : '' ?>>Deneme forumu</option>
			</optgroup>
			<optgroup label="Adrenaline Gamer">
				<option value="7"<?php echo ($forum_id == 7) ? ' selected="selected"' : '' ?>>Yönetim &amp; Organizasyon</option>
				<option value="6"<?php echo ($forum_id == 6) ? ' selected="selected"' : '' ?>>Adrenaline Gamer</option>
				<option value="8"<?php echo ($forum_id == 8) ? ' selected="selected"' : '' ?>>Dosyalar ve Rehberler</option>
				<option value="10"<?php echo ($forum_id == 10) ? ' selected="selected"' : '' ?>>Takımlar</option>
				<option value="11"<?php echo ($forum_id == 11) ? ' selected="selected"' : '' ?>>Etkinlikler</option>
			</optgroup>
			<optgroup label="Half-Life, Half-Life 2 ve Modları">
				<option value="12"<?php echo ($forum_id == 12) ? ' selected="selected"' : '' ?>>Half-Life</option>
				<option value="13"<?php echo ($forum_id == 13) ? ' selected="selected"' : '' ?>>Half-Life 2</option>
				<option value="14"<?php echo ($forum_id == 14) ? ' selected="selected"' : '' ?>>Sven Co-op</option>
				<option value="15"<?php echo ($forum_id == 15) ? ' selected="selected"' : '' ?>>Synergy</option>
				<option value="17"<?php echo ($forum_id == 17) ? ' selected="selected"' : '' ?>>Takımlar</option>
				<option value="18"<?php echo ($forum_id == 18) ? ' selected="selected"' : '' ?>>Etkinlikler</option>
			</optgroup>
			<optgroup label="Left 4 Dead">
				<option value="19"<?php echo ($forum_id == 19) ? ' selected="selected"' : '' ?>>Left 4 Dead</option>
				<option value="20"<?php echo ($forum_id == 20) ? ' selected="selected"' : '' ?>>Left 4 Dead 2</option>
				<option value="21"<?php echo ($forum_id == 21) ? ' selected="selected"' : '' ?>>Takımlar</option>
				<option value="22"<?php echo ($forum_id == 22) ? ' selected="selected"' : '' ?>>Etkinlikler</option>
			</optgroup>
			<optgroup label="Team Fortress 2">
				<option value="23"<?php echo ($forum_id == 23) ? ' selected="selected"' : '' ?>>Team Fortress 2</option>
				<option value="24"<?php echo ($forum_id == 24) ? ' selected="selected"' : '' ?>>Takımlar</option>
				<option value="25"<?php echo ($forum_id == 25) ? ' selected="selected"' : '' ?>>Etkinlikler</option>
			</optgroup>
		</select>
		<input type="submit" id="qjump-submit" value="<?php echo $lang_common['Go'] ?>" /></span>
	</div>
</form>
<?php

$forum_javascript_quickjump_code = <<<EOL
(function () {
	var forum_quickjump_url = "http://localhost/hcforum/viewforum.php?id=$1";
	var sef_friendly_url_array = new Array(23);
	sef_friendly_url_array[2] = "haberler-ve-guencellemeler";
	sef_friendly_url_array[3] = "duyurular";
	sef_friendly_url_array[5] = "oeneriler-ve-sikayetler";
	sef_friendly_url_array[4] = "genel-sohbet";
	sef_friendly_url_array[1] = "deneme-forumu";
	sef_friendly_url_array[7] = "yoenetim-organizasyon";
	sef_friendly_url_array[6] = "adrenaline-gamer";
	sef_friendly_url_array[8] = "dosyalar-ve-rehberler";
	sef_friendly_url_array[10] = "takimlar";
	sef_friendly_url_array[11] = "etkinlikler";
	sef_friendly_url_array[12] = "halflife";
	sef_friendly_url_array[13] = "halflife-2";
	sef_friendly_url_array[14] = "sven-coop";
	sef_friendly_url_array[15] = "synergy";
	sef_friendly_url_array[17] = "takimlar";
	sef_friendly_url_array[18] = "etkinlikler";
	sef_friendly_url_array[19] = "left-4-dead";
	sef_friendly_url_array[20] = "left-4-dead-2";
	sef_friendly_url_array[21] = "takimlar";
	sef_friendly_url_array[22] = "etkinlikler";
	sef_friendly_url_array[23] = "team-fortress-2";
	sef_friendly_url_array[24] = "takimlar";
	sef_friendly_url_array[25] = "etkinlikler";

	PUNBB.common.addDOMReadyEvent(function () { PUNBB.common.attachQuickjumpRedirect(forum_quickjump_url, sef_friendly_url_array); });
}());
EOL;

$forum_loader->add_js($forum_javascript_quickjump_code, array('type' => 'inline', 'weight' => 60, 'group' => FORUM_JS_GROUP_SYSTEM));
?>
