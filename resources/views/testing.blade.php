<form>
	<label for="password">Password</label>
	<input type="password" id="password" class="password" name="password"/>
	<input type="checkbox" class="js-toggle-pass" id="toggle-pass" /><label for="toggle-pass">Show Password</label>

	<ul class="helper-text">
		<li class="length">Must be at least 8 characters long.</li>
		<li class="lowercase">Must contain a lowercase letter.</li>
		<li class="uppercase">Must contain an uppercase letter.</li>
		<li class="special">Must contain a number or special character.</li>
	</ul>
</form>

<script src="{{ asset('js/master/jquery-3.4.1.js') }}"></script>
