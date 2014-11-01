<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Forms Tests</title>

	<?php include 'css.php'; ?>
</head>

<body>
	<div am-row>
		<div am-col>
			<h1>Forms</h1>
			<h3>Invalid Inputs</h3>
			<form>
				<input type="email" placeholder="Requires an email" required>
			</form>
			<pre><code class="language-markup">
&lt;input type="email" placeholder="Requires an email" required&gt;
			</code></pre>
			<h3>Disabled Inputs</h3>
			<form>
				<input class="input-xlarge" type="text" placeholder="Disabled input here..." value="Foo bar baz" disabled>
			</form>
			<pre><code class="language-markup">
&lt;input class="input-xlarge" type="text" placeholder="Disabled input here..." value="Foo bar baz" disabled&gt;
			</code></pre>
			<h3>Readonly Inputs</h3>
			<form>
				<input type="text" placeholder="Readonly input here..." value="Foo bar baz" readonly>
			</form>
			<pre><code class="language-markup">
&lt;input type="text" placeholder="Readonly input here..." value="Foo bar baz" readonly&gt;
			</code></pre>
			<h3>Customise</h3>
			<input type="text" am-input="bold" placeholder="bold"> <br>
			<input type="text" placeholder="normal"> <br>
			<input type="text" am-input="thin" placeholder="thin"> <br>
			<input type="text" class="my-input" placeholder=".my-input">
			<pre><code class="language-markup">
&lt;input type="text" am-input="bold" placeholder="bold"&gt;
&lt;input type="text" placeholder="normal"&gt;
&lt;input type="text" am-input="thin" placeholder="thin"&gt;

&lt;input type="text" class="my-input"&gt;
			</code><code class="language-scss">
.my-input { padding: 1.6em 2em; }
			</code>
			</pre>
			<h3>Default Form</h3>
			<form>
				<fieldset>
					<input type="text" placeholder="Email">
					<input type="password" placeholder="Password">
					<label>
						<input type="checkbox"> Remember me
					</label>
					<button type="submit" am-button>Sign in</button>
				</fieldset>
			</form>
			<pre><code class="language-markup">
&lt;form&gt;
	&lt;fieldset&gt;
		&lt;input type="text" placeholder="Email"&gt;
		&lt;input type="password" placeholder="Password"&gt;
		&lt;label&gt;&lt;input type="checkbox"&gt; Remember me&lt;/label&gt;
		&lt;button type="submit" am-button&gt;Sign in&lt;/button&gt;
	&lt;/fieldset&gt;
&lt;/form&gt;
			</code></pre>
			<h3>Multi-Column Form with Grids</h3>
			<form am-form="stacked">
				<fieldset>
					<div am-row>
						<div am-col="4">
							<label>First Name</label>
							<input type="text" am-input="fluid">
						</div>
						<div am-col="4">
							<label>Password</label>
							<input type="password" am-input="fluid">
						</div>
						<div am-col="4">
							<label>E-Mail</label>
							<input type="email" required am-input="fluid">
						</div>
						<div am-col="4">
							<label>City</label>
							<input type="text" am-input="fluid">
						</div>
						<div am-col="4">
							<label>State</label>
							<select am-input="fluid">
								<option>AL</option>
								<option>CA</option>
								<option>IL</option>
								<option>MD</option>
								<option>NY</option>
							</select>
						</div>
					</div>
					<div am-row>
						<div am-col="">
							<label class="checkbox">
								<input type="checkbox"> I've read the terms and conditions
							</label>
							<button type="submit" am-button>Submit</button>
							<button type="reset" am-button>Reset</button>
						</div>
					</div>
				</fieldset>
			</form>
			<pre><code class="language-markup">
&lt;form am-form="stacked"&gt;
	&lt;fieldset&gt;
		&lt;div am-row&gt;
			&lt;div am-col="4"&gt;
				&lt;label&gt;First Name&lt;/label&gt;
				&lt;input type="text" am-input="fluid"&gt;
			&lt;/div&gt;
			&lt;div am-col="4"&gt;
				&lt;label&gt;Password&lt;/label&gt;
				&lt;input type="password" am-input="fluid"&gt;
			&lt;/div&gt;
			&lt;div am-col="4"&gt;
				&lt;label&gt;E-Mail&lt;/label&gt;
				&lt;input type="email" required am-input="fluid"&gt;
			&lt;/div&gt;
			&lt;div am-col="4"&gt;
				&lt;label&gt;City&lt;/label&gt;
				&lt;input type="text" am-input="fluid"&gt;
			&lt;/div&gt;
			&lt;div am-col="4"&gt;
				&lt;label&gt;State&lt;/label&gt;
				&lt;select am-input="fluid"&gt;
					&lt;option&gt;AL&lt;/option&gt;
					&lt;option&gt;CA&lt;/option&gt;
					&lt;option&gt;IL&lt;/option&gt;
					&lt;option&gt;MD&lt;/option&gt;
					&lt;option&gt;NY&lt;/option&gt;
				&lt;/select&gt;
			&lt;/div&gt;
		&lt;/div&gt;
		&lt;div am-row&gt;
			&lt;div am-col=""&gt;
				&lt;label class="checkbox"&gt;
					&lt;input type="checkbox"&gt; I've read the terms and conditions
				&lt;/label&gt;
				&lt;button type="submit" am-button&gt;Submit&lt;/button&gt;
				&lt;button type="reset" am-button&gt;Reset&lt;/button&gt;
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/fieldset&gt;
&lt;/form&gt;
			</code></pre>
			<h3>Stacked Form</h3>
			<form am-form="stacked">
				<fieldset>
					<label>First Name</label>
					<input type="text">
					<label>Password</label>
					<input type="password">
					<label>E-Mail</label>
					<input type="email" required>
					<aside am-form-message>This is a required field.</aside>
					<label>City</label>
					<input type="text">
					<aside am-form-message>This is another required field.</aside>
					<label>State</label>
					<select am-form-input-medium>
						<option>AL</option>
						<option>CA</option>
						<option>IL</option>
						<option>MD</option>
						<option>NY</option>
					</select>
					<label am-form-checkbox>
						<input type="checkbox"> I've read the terms and conditions
					</label>
					<button type="submit" am-button=" notice">Submit</button>
					<button type="reset" am-button>Reset</button>
				</fieldset>
			</form>
			<pre><code class="language-markup">
&lt;form am-form="stacked"&gt;
	&lt;fieldset&gt;
		&lt;label&gt;First Name&lt;/label&gt;
		&lt;input type="text"&gt;
		&lt;label&gt;Password&lt;/label&gt;
		&lt;input type="password"&gt;
		&lt;label&gt;E-Mail&lt;/label&gt;
		&lt;input type="email" required&gt;
		&lt;aside am-form-message&gt;This is a required field.&lt;/aside&gt;
		&lt;label&gt;City&lt;/label&gt;
		&lt;input type="text"&gt;
		&lt;aside am-form-message&gt;This is another required field.&lt;/aside&gt;
		&lt;label&gt;State&lt;/label&gt;
		&lt;select am-form-input-medium&gt;
			&lt;option&gt;AL&lt;/option&gt;
			&lt;option&gt;CA&lt;/option&gt;
			&lt;option&gt;IL&lt;/option&gt;
			&lt;option&gt;MD&lt;/option&gt;
			&lt;option&gt;NY&lt;/option&gt;
		&lt;/select&gt;
		&lt;label am-form-checkbox&gt;
			&lt;input type="checkbox"&gt; I've read the terms and conditions
		&lt;/label&gt;
		&lt;button type="submit" am-button=" notice"&gt;Submit&lt;/button&gt;
		&lt;button type="reset" am-button&gt;Reset&lt;/button&gt;
	&lt;/fieldset&gt;
&lt;/form&gt;
			</code></pre>
			<h3>Aligned Form</h3>
			<form am-form="aligned">
				<fieldset>
					<div am-form-aligned-group>
						<label>Username</label>
						<input type="text" placeholder="Username">
						<aside am-form-message>This is a form-message field.</aside>
					</div>
					<div am-form-aligned-group>
						<label>Password</label>
						<input type="password" placeholder="Password">
						<aside am-form-message-inline>This is a form-message-inline field. Deprecated.</aside>
					</div>
					<div am-form-aligned-group>
						<label>Email Address</label>
						<input type="text" placeholder="Email Address">
					</div>
					<div am-form-aligned-group>
						<label>Here's a button</label>
						<input type="button" value="Button" am-button>
					</div>
					<div am-form-aligned-group>
						<label>Supercalifragilistic Label</label>
						<input type="text" placeholder="Enter something here...">
					</div>
					<div am-form-control>
						<label class="checkbox">
							<input type="checkbox"> Remember Me
						</label>
					</div>
					<div am-form-control>
						<button type="submit" am-button>Submit</button>
					</div>
				</fieldset>
			</form>
			<pre><code class="language-markup">
&lt;form am-form="aligned"&gt;
	&lt;fieldset&gt;
		&lt;div am-form-aligned-group&gt;
			&lt;label&gt;Username&lt;/label&gt;
			&lt;input type="text" placeholder="Username"&gt;
			&lt;aside am-form-message&gt;This is a form-message field.&lt;/aside&gt;
		&lt;/div&gt;
		&lt;div am-form-aligned-group&gt;
			&lt;label&gt;Password&lt;/label&gt;
			&lt;input type="password" placeholder="Password"&gt;
			&lt;aside am-form-message-inline&gt;This is a form-message-inline field. Deprecated.&lt;/aside&gt;
		&lt;/div&gt;
		&lt;div am-form-aligned-group&gt;
			&lt;label&gt;Email Address&lt;/label&gt;
			&lt;input type="text" placeholder="Email Address"&gt;
		&lt;/div&gt;
		&lt;div am-form-aligned-group&gt;
			&lt;label&gt;Here's a button&lt;/label&gt;
			&lt;input type="button" value="Button" am-button&gt;
		&lt;/div&gt;
		&lt;div am-form-aligned-group&gt;
			&lt;label&gt;Supercalifragilistic Label&lt;/label&gt;
			&lt;input type="text" placeholder="Enter something here..."&gt;
		&lt;/div&gt;
		&lt;div am-form-control&gt;
			&lt;label class="checkbox"&gt;
				&lt;input type="checkbox"&gt; Remember Me
			&lt;/label&gt;
		&lt;/div&gt;
		&lt;div am-form-control&gt;
			&lt;button type="submit" am-button&gt;Submit&lt;/button&gt;
		&lt;/div&gt;
	&lt;/fieldset&gt;
&lt;/form&gt;
			</code></pre>
			<h3>Grouped form</h3>
			<form am-form="grouped">
		    <fieldset>
	        <input type="text" am-input="1-2" placeholder="Username">
	        <input type="text" am-input="1-2" placeholder="Password">
	        <input type="email" am-input="1-2" placeholder="Email">
		    </fieldset>
		    <fieldset>
	        <input type="text" am-input="1-2" placeholder="Another Group">
	        <input type="text" am-input="1-2" placeholder="More Stuff">
		    </fieldset>
		    <button type="submit" am-button="primary">Sign in</button>
			</form>
			<pre><code class="language-markup">
&lt;form am-form="grouped"&gt;
  &lt;fieldset&gt;
    &lt;input type="text" am-input="1-2" placeholder="Username"&gt;
    &lt;input type="text" am-input="1-2" placeholder="Password"&gt;
    &lt;input type="email" am-input="1-2" placeholder="Email"&gt;
  &lt;/fieldset&gt;
  &lt;fieldset&gt;
    &lt;input type="text" am-input="1-2" placeholder="Another Group"&gt;
    &lt;input type="text" am-input="1-2" placeholder="More Stuff"&gt;
  &lt;/fieldset&gt;
  &lt;button type="submit" am-button="primary"&gt;Sign in&lt;/button&gt;
&lt;/form&gt;
			</code></pre>
			<h3>Input Sizing</h3>
			<form>
				<input am-input="1" type="text" placeholder="am-input='1'"><br/>
				<input am-input="1-2" type="text" placeholder="am-input='1-2'"><br/>
				<input am-input="1-3" type="text" placeholder="am-input='1-3'"><br/>
				<input am-input="2-3" type="text" placeholder="am-input='2-3'"><br/>
				<input am-input="1-4" type="text" placeholder="am-input='1-4'"><br/>
				<input am-input="3-4" type="text" placeholder="am-input='3-4'"><br/>
			</form>
			<pre><code class="language-markup">
&lt;form&gt;
  &lt;input am-input="1" type="text" placeholder="am-input='1'"&gt;&lt;br/&gt;
  &lt;input am-input="1-2" type="text" placeholder="am-input='1-2'"&gt;&lt;br/&gt;
  &lt;input am-input="1-3" type="text" placeholder="am-input='1-3'"&gt;&lt;br/&gt;
  &lt;input am-input="2-3" type="text" placeholder="am-input='2-3'"&gt;&lt;br/&gt;
  &lt;input am-input="1-4" type="text" placeholder="am-input='1-4'"&gt;&lt;br/&gt;
  &lt;input am-input="3-4" type="text" placeholder="am-input='3-4'"&gt;&lt;br/&gt;
&lt;/form&gt;
			</code></pre>
			<p></p>
			<p>Grids</p>
			<form>
				<div am-row>
					<div am-col="3">
						<input am-input="1" type="text" placeholder="3">
					</div>
					<div am-col="9">
						<input am-input="1" type="text" placeholder="9">
					</div>
				</div>
				<div am-row>
					<div am-col="6">
						<input am-input="1" type="text" placeholder="6">
					</div>
					<div am-col="6">
						<input am-input="1" type="text" placeholder="6">
					</div>
				</div>
				<div am-row>
					<div am-col="2">
						<input am-input="1" type="text" placeholder="2">
					</div>
					<div am-col="2">
						<input am-input="1" type="text" placeholder="2">
					</div>
					<div am-col="4">
						<input am-input="1" type="text" placeholder="4">
					</div>
					<div am-col="4">
						<input am-input="1" type="text" placeholder="4">
					</div>
				</div>
				<div am-row>
					<div am-col="2">
						<input am-input="1" type="text" placeholder="2">
					</div>
			
					<div am-col="4">
						<input am-input="1" type="text" placeholder="4">
					</div>
			
					<div am-col="5">
						<input am-input="1" type="text" placeholder="5">
					</div>
			
					<div am-col="1">
						<input am-input="1" type="text" placeholder="1">
					</div>
				</div>
			</form>
			<pre><code class="language-markup">
&lt;form&gt;
  &lt;div am-row&gt;
    &lt;div am-col="3"&gt;
      &lt;input am-input="1" type="text" placeholder="3"&gt;
    &lt;/div&gt;
    &lt;div am-col="9"&gt;
      &lt;input am-input="1" type="text" placeholder="9"&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div am-row&gt;
    &lt;div am-col="6"&gt;
      &lt;input am-input="1" type="text" placeholder="6"&gt;
    &lt;/div&gt;
    &lt;div am-col="6"&gt;
      &lt;input am-input="1" type="text" placeholder="6"&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div am-row&gt;
    &lt;div am-col="2"&gt;
      &lt;input am-input="1" type="text" placeholder="2"&gt;
    &lt;/div&gt;
    &lt;div am-col="2"&gt;
      &lt;input am-input="1" type="text" placeholder="2"&gt;
    &lt;/div&gt;
    &lt;div am-col="4"&gt;
      &lt;input am-input="1" type="text" placeholder="4"&gt;
    &lt;/div&gt;
    &lt;div am-col="4"&gt;
      &lt;input am-input="1" type="text" placeholder="4"&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div am-row&gt;
    &lt;div am-col="2"&gt;
      &lt;input am-input="1" type="text" placeholder="2"&gt;
    &lt;/div&gt;

    &lt;div am-col="4"&gt;
      &lt;input am-input="1" type="text" placeholder="4"&gt;
    &lt;/div&gt;

    &lt;div am-col="5"&gt;
      &lt;input am-input="1" type="text" placeholder="5"&gt;
    &lt;/div&gt;

    &lt;div am-col="1"&gt;
      &lt;input am-input="1" type="text" placeholder="1"&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/form&gt;
			</code></pre>
			<h3>Rounded Form</h3>
			<form am-form="stacked">
				<label>Subject</label>
				<input type="text" am-input="rounded" placeholder="Subject" />
				<label>Message</label>
				<textarea am-input="rounded" rows="5" cols="40" placeholder="Message..."></textarea>
				<button type="submit" am-button="rounded">Search</button>
				<input type="reset" am-button="rounded" value="Reset" />
			</form>
			<pre><code class="language-markup">
&lt;form am-form="stacked"&gt;
	&lt;label&gt;Subject&lt;/label&gt;
	&lt;input type="text" am-input="rounded" placeholder="Subject" /&gt;
	&lt;label&gt;Message&lt;/label&gt;
	&lt;textarea am-input="rounded" rows="5" cols="40" placeholder="Message..."&gt;&lt;/textarea&gt;
	&lt;button type="submit" am-button="rounded"&gt;Search&lt;/button&gt;
	&lt;input type="reset" am-button="rounded" value="Reset" /&gt;
&lt;/form&gt;
			</code></pre>
			<h3>Checkboxes and Radios</h3>
			<form>
				<label class="checkbox">
					<input type="checkbox" value="">
					Here's option one.
				</label>
				<label class="radio">
					<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
					Here's a radio button. You can choose this one...
				</label>
				<label class="radio">
					<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
					...Or this one!
				</label>
			</form>
			<pre><code class="language-markup">
&lt;form&gt;
  &lt;label class="checkbox"&gt;
    &lt;input type="checkbox" value=""&gt;
    Here's option one.
  &lt;/label&gt;
  &lt;label class="radio"&gt;
    &lt;input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked&gt;
    Here's a radio button. You can choose this one...
  &lt;/label&gt;
  &lt;label class="radio"&gt;
    &lt;input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"&gt;
    ...Or this one!
  &lt;/label&gt;
&lt;/form&gt;
			</code></pre>
			<h3>Help text</h3>
			<form>
				<fieldset>
					<label>Last Name</label>
					<input type="text" />
					<aside am-form-message>Block help text</aside>
				</fieldset>
			</form>
			<form>
				<fieldset>
					<label>First Name</label>
					<input type="text" />
					<aside am-form-message-inline>Inline help text</aside>
				</fieldset>
			</form>
			<pre><code class="language-markup">
&lt;form&gt;
	&lt;fieldset&gt;
		&lt;label&gt;Last Name&lt;/label&gt;
		&lt;input type="text" /&gt;
		&lt;aside am-form-message&gt;Block help text&lt;/aside&gt;
	&lt;/fieldset&gt;
&lt;/form&gt;
&lt;form&gt;
	&lt;fieldset&gt;
		&lt;label&gt;First Name&lt;/label&gt;
		&lt;input type="text" /&gt;
		&lt;aside am-form-message-inline&gt;Inline help text&lt;/aside&gt;
	&lt;/fieldset&gt;
&lt;/form&gt;
			</code></pre>
		</div>
	</div>
</body>
</html>