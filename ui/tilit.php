<h2>First Page</h2>
<p>
	This is the first page.
</p>
<h3>Choose</h3>
<form id="sourceForm" class="forms">
<label>Language</label><br>
<select name="language" id="language" onchange="showLanguage()">
	<option value="eng">English</option>
	<option value="fin">Finnish</option>
	<option value="swe">Swedish</option>
</select>
<br><br>
<label>Phone</label><br>
<input type="radio" name="phone" value="nokia" onclick="showPhone('Nokia')">Nokia <br>
<input type="radio" name="phone" value="huawei" onclick="showPhone('Huawei')">Huawei <br>
<input type="radio" name="phone" value="samsung" onclick="showPhone('Samsung')">Samsung <br>

</form>

<h3>Selected values</h3>

<form id="targetForm" class="forms">
<label for="selected_language">Language :</label><br>
<input type="text" id="selected_language"><br>
<label for="selected_phone">Phone :</label><br>
<input type="text" id="selected_phone"><br>

</form>