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
			<h3>Default Form</h3>
			<form>
				<fieldset>
					<input type="text" am-input="bold" placeholder="bold">
					<input type="text" placeholder="normal">
					<input type="text" am-input="thin" placeholder="thin">
					<input type="text" placeholder="Email">
					<input type="password" placeholder="Password">
					<label>
						<input type="checkbox"> Remember me
					</label>
					<button type="submit" am-button>Sign in</button>
				</fieldset>
			</form>
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
			<h3>Input Sizing</h3>
			<form>
				<input am-input="1" type="text" placeholder="am-input='1'"><br/>
				<input am-input="1-2" type="text" placeholder="am-input='1-2'"><br/>
				<input am-input="1-3" type="text" placeholder="am-input='1-3'"><br/>
				<input am-input="2-3" type="text" placeholder="am-input='2-3'"><br/>
				<input am-input="1-4" type="text" placeholder="am-input='1-4'"><br/>
				<input am-input="3-4" type="text" placeholder="am-input='3-4'"><br/>
			</form>
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
			<h3>Invalid Inputs</h3>
			<form>
				<input type="email" placeholder="Requires an email" required>
			</form>
			<h3>Disabled Inputs</h3>
			<form>
				<input class="input-xlarge" type="text" placeholder="Disabled input here..." value="Foo bar baz" disabled>
			</form>
			<h3>Readonly Inputs</h3>
			<form>
				<input type="text" placeholder="Readonly input here..." value="Foo bar baz" readonly>
			</form>
			<h3>Rounded Form</h3>
			<form am-form="stacked">
				<label>Subject</label>
				<input type="text" am-input="rounded" placeholder="Subject" />
				<label>Message</label>
				<textarea am-input="rounded" rows="5" cols="40" placeholder="Message..."></textarea>
				<button type="submit" am-button="rounded">Search</button>
				<input type="reset" am-button="rounded" value="Reset" />
			</form>
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
		</div>
	</div>
</body>
</html>