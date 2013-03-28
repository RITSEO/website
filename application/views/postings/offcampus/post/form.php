<h1>Off-Campus Job Posting Form</h1>
<p>Before submitting, please ensure that all required fields have been filled.</p>

<p>
	Once the form is submitted, the job posting will be viewable online within 24 hours. All off-campus
	job postings will be removed from the SEO website 30 days after being posted. If the position is filled
	before 30 days, please <a href="?/home/contact/">contact the SEO</a> so that the job posting can
	be removed.
</p>

<div class="alert alert-info">
	<h2>Notice to ALL Off-Campus Employers</h2>
	<p>
		This form is only to be used to post <b>part-time and summer employment opportunities</b> for RIT
		students. For information on how to list full-time career or co-op job opportunities, please contact
		the <a href="http://www.rit.edu/~964www/">Co-op and Career Services Office</a>.
	</p>
</div>

<?php
	if( $browser_error != "" ) {
?>
<div class="alert alert-danger">
	<h2>WARNING!</h2>
	<p><?php echo $browser_error; ?></p>
</div>
<?php
	}
?>

<?php
	echo validation_errors();

	echo form_open('', 'class="form-horizontal"');
	echo form_fieldset( 'Company Information' );
?>
	<div class="control-group">
		<label class="control-label" for="company_name">Company Name *</label>
		<div class="controls">
			<input required type="text" id="company_name" name="company_name" class="input-block-level" value="<?php echo set_value( 'company_name' ); ?>" />
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="address">Address / Location *</label>
		<div class="controls">
			<input required type="text" id="address" name="address" class="input-block-level" value="<?php echo set_value( 'address' ); ?>" />
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="city">City</label>
		<div class="controls">
			<input type="text" id="city" name="city" class="input-block-level" value="<?php echo set_value( 'city' ); ?>" />
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="state">State</label>
		<div class="controls">
			<input type="text" id="state" name="state" class="input-block-level" value="<?php echo set_value( 'state' ); ?>" />
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="zip">Zip</label>
		<div class="controls">
			<input type="text" id="zip" name="zip" class="input-block-level" value="<?php echo set_value( 'zip' ); ?>" />
		</div>
	</div>
<?php
	echo form_fieldset_close();
	echo form_fieldset( 'Contact Information' );
?>
	<div class="control-group">
		<label class="control-label" for="contact_name">Name *</label>
		<div class="controls">
			<input required type="text" id="contact_name" name="contact_name" class="input-block-level" value="<?php echo set_value( 'contact_name' ); ?>" />
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="email">Email *</label>
		<div class="controls">
			<input required type="text" id="email" name="email" class="input-block-level" value="<?php echo set_value( 'email' ); ?>" />
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="phone">Phone</label>
		<div class="controls">
			<input type="text" id="phone" name="phone" class="input-block-level" value="<?php echo set_value( 'phone' ); ?>" />
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="fax">Fax</label>
		<div class="controls">
			<input type="text" id="fax" name="fax" class="input-block-level" value="<?php echo set_value( 'fax' ); ?>" />
		</div>
	</div>
<?php
	echo form_fieldset_close();
	echo form_fieldset( 'Job Information' );
?>
	<div class="control-group">
		<label class="control-label" for="title">Job Title *</label>
		<div class="controls">
			<input required type="text" id="title" name="title" class="input-block-level" value="<?php echo set_value( 'title' ); ?>" />
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="start_date">Start Date *</label>
		<div class="controls">
			<input required type="text" id="start_date" name="start_date" class="input-block-level" value="<?php echo set_value( 'start_date' ); ?>" />
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="shift_hours">Hours per Week *</label>
		<div class="controls">
			<input required type="text" id="shift_hours" name="shift_hours" class="input-block-level" value="<?php echo set_value( 'shift_hours' ); ?>" />
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="work_hours">Work Hours</label>
		<div class="controls">
			<input type="text" id="work_hours" name="work_hours" class="input-block-level" value="<?php echo set_value( 'work_hours' ); ?>" />
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="wage">Wage *</label>
		<div class="controls">
			<input required type="text" id="wage" name="wage" class="input-block-level" value="<?php echo set_value( 'wage' ); ?>" />
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="shift_days[]">Shift Days</label>
		<div class="controls">
			<div class="row-fluid">
				<div class="span6">
					<label class="inline checkbox">
						<input type="checkbox" name="shift_days[]" value="Mon" />Monday
					</label><br>
					<label class="inline checkbox">
						<input type="checkbox" name="shift_days[]" value="Tue" />Tuesday
					</label><br>
					<label class="inline checkbox">
						<input type="checkbox" name="shift_days[]" value="Wed" />Wednesday
					</label><br>
					<label class="inline checkbox">
						<input type="checkbox" name="shift_days[]" value="Thu" />Thursday
					</label><br>
				</div>
				<div class="span6">
					<label class="inline checkbox">
						<input type="checkbox" name="shift_days[]" value="Fri" />Friday
					</label><br>
					<label class="inline checkbox">
						<input type="checkbox" name="shift_days[]" value="Sat" />Saturday
					</label><br>
					<label class="inline checkbox">
						<input type="checkbox" name="shift_days[]" value="Sun" />Sunday
					</label><br>
				</div>
			</div>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="category">Job Category *</label>
		<div class="controls">
			<select required name="category" id="category" class="input-block-level" >
				<option value="Academic">Academic</option>
				<option value="Clerical">Clerical</option>
				<option value="Computer / Technical">Computer / Technical</option>
				<option value="Community Service">Community Service</option>
				<option value="Food Service">Food Service</option>
				<option value="Holiday">Holiday</option>
				<option value="Miscellaneous">Miscellaneous</option>
				<option value="Maintenance">Maintenance</option>
				<option value="Personal Services">Personal Services</option>
				<option value="Sales">Sales</option>
				<option value="Summer">Summer</option>
				<option value="Telemarketing">Telemarketing</option>
			</select>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="summary">Position Summary *</label>
		<div class="controls">
			<textarea required id="summary" name="summary" class="input-block-level" rows="7"><?php echo set_value( 'summary' ); ?></textarea>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="requirements">Position Requirements *</label>
		<div class="controls">
			<textarea required id="requirements" name="requirements" class="input-block-level" rows="7"><?php echo set_value( 'requirements' ); ?></textarea>
		</div>
	</div>
<?php
	echo form_fieldset_close();
?>
	<div class="form-actions">
		<button class="btn btn-primary">Submit</button>
	</div>
</form>