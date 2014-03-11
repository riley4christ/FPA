<?php 
$pageTitle = "Simple and Easy Meal Counts";
include("inc/header.php"); ?>

		<!-- Checkpoint Page specific content -->
		<div id="content" class="">

			<form id="h1535">
				<div class="header">
					<p id='tda'>Texas Department of Agriculture</p>
					<h1>Daily Meal Count and Attendance Record <br>(Centers)</h1>
					<p id="formStamp">Form H1535 <br>March 2007</p>
				</div>	
				<div class="subheader">
					<div id="nameofCO">
						<label for="nameOfCO">Name of Contracting Organization</label>
						<input name="nameOfCO" type="text" value="FP Assistance" disabled>
					</div>
					<div id="nameOfFacility">
						<label for="nameOfFacility">Name of Facility</label>
						<input name="" type="text">
					</div>
					<div id="ceId">
						<label for="ceId">Program No. (TX no.)</label>
						<input name="ceId" type="text" value="129-0008" disabled>
					</div>
					<div id="h1535Month">
						<label for="h1535Month">Month</label>
						<input name="h1535Month" type="text">
					</div>
					<div id="h1535Year">
						<label for="h1535Year">Year</label>
						<input name="h1535Year" type="text">
					</div>
				</div>
				<div id="mealLimit">
					<p>Centers - You may claim up to two meals and one snack or one meal and two snacks. Emergency Shelters -  You may claim up to three meals or two meals and one snack.</p>
				</div>
				<div class="main">
					<table>
					  <tr>
					    <th colspan="2" rowspan="3" id="participantsName">Participant's Name<br></th>
					    <th rowspan="3" id="age">Age</th>
					    <th colspan="3" class="day">Day</th>
					    <th colspan="5" class="date">Date</th>
					    <th colspan="3" class="day">Day<br></th>
					    <th colspan="5" class="date">Date</th>
					    <th colspan="3" class="day">Day</th>
					    <th colspan="5" class="date">Date</th>
					    <th colspan="3" class="day">Day</th>
					    <th colspan="5" class="date">Date</th>
					    <th colspan="3" class="day">Day</th>
					    <th colspan="5" class="date">Date</th>
					  </tr>
					  <tr>
					    <td colspan="3">Mon</td>
					    <td colspan="5"></td>
					    <td colspan="3">Tue</td>
					    <td colspan="5"></td>
					    <td colspan="3">Wed</td>
					    <td colspan="5"></td>
					    <td colspan="3">Thurs</td>
					    <td colspan="5"></td>
					    <td colspan="3">Fri</td>
					    <td colspan="5"></td>
					  </tr>
					  <tr id="mealInitials">
					    <td>At</td>
					    <td>B</td>
					    <td>A</td>
					    <td>L</td>
					    <td>P</td>
					    <td>S</td>
					    <td>E</td>
					    <td></td>
					    <td>At</td>
					    <td>B</td>
					    <td>A</td>
					    <td>L</td>
					    <td>P</td>
					    <td>S</td>
					    <td>E</td>
					    <td></td>
					    <td>At</td>
					    <td>B</td>
					    <td>A</td>
					    <td>L</td>
					    <td>P</td>
					    <td>S</td>
					    <td>E</td>
					    <td></td>
					    <td>At</td>
					    <td>B</td>
					    <td>A</td>
					    <td>L</td>
					    <td>P</td>
					    <td>S</td>
					    <td>E</td>
					    <td></td>
					    <td>At</td>
					    <td>B</td>
					    <td>A</td>
					    <td>L</td>
					    <td>P</td>
					    <td>S</td>
					    <td>E</td>
					    <td></td>
					  </tr>
					  <tr>
					    <td class="childCount">1<br></td>
					    <td class="childNames">
					    	<select name="enrollmentList">
					    		<?php
					    			$kids = array("Select Child", "Riley Penna", "Carisse Penna", "Leah Penna", "Laura Penna", "Connie Wilson", "Tonya Waters", "Dorothy Vercher");
					    			foreach ($kids as $kid) {
					    				if($kid == "Select Child") {
					    		?>
					    					<option selected="<?php echo $kid; ?>" value="<?php echo $kid; ?>"><?php echo $kid; ?></option>			

					    		<?php
					    				} else
					    		?>
					    			<option value="<?php echo $kid; ?>"><?php echo $kid; ?></option>
					    		<?php	
					    			}
					    		?>


					    	</select>
					    </td>
					    <td class="childAges"></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					  </tr>
					  <tr>
					    <td class="childCount">2</td>
					    <td class="childNames">
					    	<select name="enrollmentList">
					    		<?php
					    			$kids = array("Select Child", "Riley Penna", "Carisse Penna", "Leah Penna", "Laura Penna", "Connie Wilson", "Tonya Waters", "Dorothy Vercher");
					    			foreach ($kids as $kid) {
					    				if($kid == "Select Child") {
					    		?>
					    					<option selected="<?php echo $kid; ?>" value="<?php echo $kid; ?>"><?php echo $kid; ?></option>			

					    		<?php
					    				} else
					    		?>
					    			<option value="<?php echo $kid; ?>"><?php echo $kid; ?></option>
					    		<?php	
					    			}
					    		?>


					    	</select>
					    </td>
					    <td class="childAges"></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					  </tr>
					  <tr>
					    <td class="childCount">3</td>
					    <td class="childNames">
					    	<select name="enrollmentList">
					    		<?php
					    			$kids = array("Select Child", "Riley Penna", "Carisse Penna", "Leah Penna", "Laura Penna", "Connie Wilson", "Tonya Waters", "Dorothy Vercher");
					    			foreach ($kids as $kid) {
					    				if($kid == "Select Child") {
					    		?>
					    					<option selected="<?php echo $kid; ?>" value="<?php echo $kid; ?>"><?php echo $kid; ?></option>			

					    		<?php
					    				} else
					    		?>
					    			<option value="<?php echo $kid; ?>"><?php echo $kid; ?></option>
					    		<?php	
					    			}
					    		?>


					    	</select>
					    </td>
					    <td class="childAges"></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					  </tr>
					  <tr>
					    <td class="childCount">4</td>
					    <td class="childNames">
					    	<select name="enrollmentList">
					    		<?php
					    			$kids = array("Select Child", "Riley Penna", "Carisse Penna", "Leah Penna", "Laura Penna", "Connie Wilson", "Tonya Waters", "Dorothy Vercher");
					    			foreach ($kids as $kid) {
					    				if($kid == "Select Child") {
					    		?>
					    					<option selected="<?php echo $kid; ?>" value="<?php echo $kid; ?>"><?php echo $kid; ?></option>			

					    		<?php
					    				} else
					    		?>
					    			<option value="<?php echo $kid; ?>"><?php echo $kid; ?></option>
					    		<?php	
					    			}
					    		?>


					    	</select>
					    </td>
					    <td class="childAges"></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					  </tr>
					  <tr>
					    <td class="childCount">5</td>
					    <td class="childNames">
					    	<select name="enrollmentList">
					    		<?php
					    			$kids = array("Select Child", "Riley Penna", "Carisse Penna", "Leah Penna", "Laura Penna", "Connie Wilson", "Tonya Waters", "Dorothy Vercher");
					    			foreach ($kids as $kid) {
					    				if($kid == "Select Child") {
					    		?>
					    					<option selected="<?php echo $kid; ?>" value="<?php echo $kid; ?>"><?php echo $kid; ?></option>			

					    		<?php
					    				} else
					    		?>
					    			<option value="<?php echo $kid; ?>"><?php echo $kid; ?></option>
					    		<?php	
					    			}
					    		?>


					    	</select>
					    </td>
					    <td class="childAges"></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					  </tr>
					  <tr>
					    <td class="childCount">6</td>
					    <td class="childNames">
					    	<select name="enrollmentList">
					    		<?php
					    			$kids = array("Select Child", "Riley Penna", "Carisse Penna", "Leah Penna", "Laura Penna", "Connie Wilson", "Tonya Waters", "Dorothy Vercher");
					    			foreach ($kids as $kid) {
					    				if($kid == "Select Child") {
					    		?>
					    					<option selected="<?php echo $kid; ?>" value="<?php echo $kid; ?>"><?php echo $kid; ?></option>			

					    		<?php
					    				} else
					    		?>
					    			<option value="<?php echo $kid; ?>"><?php echo $kid; ?></option>
					    		<?php	
					    			}
					    		?>


					    	</select>
					    </td>
					    <td class="childAges"></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					  </tr>
					  <tr>
					    <td class="childCount">7</td>
					    <td class="childNames">
					    	<select name="enrollmentList">
					    		<?php
					    			$kids = array("Select Child", "Riley Penna", "Carisse Penna", "Leah Penna", "Laura Penna", "Connie Wilson", "Tonya Waters", "Dorothy Vercher");
					    			foreach ($kids as $kid) {
					    				if($kid == "Select Child") {
					    		?>
					    					<option selected="<?php echo $kid; ?>" value="<?php echo $kid; ?>"><?php echo $kid; ?></option>			

					    		<?php
					    				} else
					    		?>
					    			<option value="<?php echo $kid; ?>"><?php echo $kid; ?></option>
					    		<?php	
					    			}
					    		?>


					    	</select>
					    </td>
					    <td class="childAges"></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					  </tr>
					  <tr>
					    <td class="childCount">8</td>
					    <td class="childNames">
					    	<select name="enrollmentList">
					    		<?php
					    			$kids = array("Select Child", "Riley Penna", "Carisse Penna", "Leah Penna", "Laura Penna", "Connie Wilson", "Tonya Waters", "Dorothy Vercher");
					    			foreach ($kids as $kid) {
					    				if($kid == "Select Child") {
					    		?>
					    					<option selected="<?php echo $kid; ?>" value="<?php echo $kid; ?>"><?php echo $kid; ?></option>			

					    		<?php
					    				} else
					    		?>
					    			<option value="<?php echo $kid; ?>"><?php echo $kid; ?></option>
					    		<?php	
					    			}
					    		?>


					    	</select>
					    </td>
					    <td class="childAges"></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					  </tr>
					  <tr>
					    <td class="childCount">9</td>
					    <td class="childNames">
					    	<select name="enrollmentList">
					    		<?php
					    			$kids = array("Select Child", "Riley Penna", "Carisse Penna", "Leah Penna", "Laura Penna", "Connie Wilson", "Tonya Waters", "Dorothy Vercher");
					    			foreach ($kids as $kid) {
					    				if($kid == "Select Child") {
					    		?>
					    					<option selected="<?php echo $kid; ?>" value="<?php echo $kid; ?>"><?php echo $kid; ?></option>			

					    		<?php
					    				} else
					    		?>
					    			<option value="<?php echo $kid; ?>"><?php echo $kid; ?></option>
					    		<?php	
					    			}
					    		?>


					    	</select>
					    </td>
					    <td class="childAges"></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					  </tr>
					  <tr>
					    <td class="childCount">10</td>
					    <td class="childNames">
					    	<select name="enrollmentList">
					    		<?php
					    			$kids = array("Select Child", "Riley Penna", "Carisse Penna", "Leah Penna", "Laura Penna", "Connie Wilson", "Tonya Waters", "Dorothy Vercher");
					    			foreach ($kids as $kid) {
					    				if($kid == "Select Child") {
					    		?>
					    					<option selected="<?php echo $kid; ?>" value="<?php echo $kid; ?>"><?php echo $kid; ?></option>			

					    		<?php
					    				} else
					    		?>
					    			<option value="<?php echo $kid; ?>"><?php echo $kid; ?></option>
					    		<?php	
					    			}
					    		?>


					    	</select>
					    </td>
					    <td class="childAges"></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					  </tr>
					  <tr>
					    <td class="childCount">11</td>
					    <td class="childNames">
					    	<select name="enrollmentList">
					    		<?php
					    			$kids = array("Select Child", "Riley Penna", "Carisse Penna", "Leah Penna", "Laura Penna", "Connie Wilson", "Tonya Waters", "Dorothy Vercher");
					    			foreach ($kids as $kid) {
					    				if($kid == "Select Child") {
					    		?>
					    					<option selected="<?php echo $kid; ?>" value="<?php echo $kid; ?>"><?php echo $kid; ?></option>			

					    		<?php
					    				} else
					    		?>
					    			<option value="<?php echo $kid; ?>"><?php echo $kid; ?></option>
					    		<?php	
					    			}
					    		?>


					    	</select>
					    </td>
					    <td class="childAges"></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					  </tr>
					  <tr>
					    <td class="childCount">12</td>
					    <td class="childNames">
					    	<select name="enrollmentList">
					    		<?php
					    			$kids = array("Select Child", "Riley Penna", "Carisse Penna", "Leah Penna", "Laura Penna", "Connie Wilson", "Tonya Waters", "Dorothy Vercher");
					    			foreach ($kids as $kid) {
					    				if($kid == "Select Child") {
					    		?>
					    					<option selected="<?php echo $kid; ?>" value="<?php echo $kid; ?>"><?php echo $kid; ?></option>			

					    		<?php
					    				} else
					    		?>
					    			<option value="<?php echo $kid; ?>"><?php echo $kid; ?></option>
					    		<?php	
					    			}
					    		?>


					    	</select>
					    </td>
					    <td class="childAges"></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					  </tr>
					  <tr>
					    <td class="childCount">13</td>
					    <td class="childNames">
					    	<select name="enrollmentList">
					    		<?php
					    			$kids = array("Select Child", "Riley Penna", "Carisse Penna", "Leah Penna", "Laura Penna", "Connie Wilson", "Tonya Waters", "Dorothy Vercher");
					    			foreach ($kids as $kid) {
					    				if($kid == "Select Child") {
					    		?>
					    					<option selected="<?php echo $kid; ?>" value="<?php echo $kid; ?>"><?php echo $kid; ?></option>			

					    		<?php
					    				} else
					    		?>
					    			<option value="<?php echo $kid; ?>"><?php echo $kid; ?></option>
					    		<?php	
					    			}
					    		?>


					    	</select>
					    </td>
					    <td class="childAges"></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					  </tr>
					  <tr>
					    <td class="childCount">14</td>
					    <td class="childNames">
					    	<select name="enrollmentList">
					    		<?php
					    			$kids = array("Select Child", "Riley Penna", "Carisse Penna", "Leah Penna", "Laura Penna", "Connie Wilson", "Tonya Waters", "Dorothy Vercher");
					    			foreach ($kids as $kid) {
					    				if($kid == "Select Child") {
					    		?>
					    					<option selected="<?php echo $kid; ?>" value="<?php echo $kid; ?>"><?php echo $kid; ?></option>			

					    		<?php
					    				} else
					    		?>
					    			<option value="<?php echo $kid; ?>"><?php echo $kid; ?></option>
					    		<?php	
					    			}
					    		?>


					    	</select>
					    </td>
					    <td class="childAges"></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					  </tr>
					  <tr>
					    <td class="childCount">15</td>
					    <td class="childNames">
					    	<select name="enrollmentList">
					    		<?php
					    			$kids = array("Select Child", "Riley Penna", "Carisse Penna", "Leah Penna", "Laura Penna", "Connie Wilson", "Tonya Waters", "Dorothy Vercher");
					    			foreach ($kids as $kid) {
					    				if($kid == "Select Child") {
					    		?>
					    					<option selected="<?php echo $kid; ?>" value="<?php echo $kid; ?>"><?php echo $kid; ?></option>			

					    		<?php
					    				} else
					    		?>
					    			<option value="<?php echo $kid; ?>"><?php echo $kid; ?></option>
					    		<?php	
					    			}
					    		?>


					    	</select>
					    </td>
					    <td class="childAges"></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					  </tr>
					  <tr>
					    <td class="childCount">16</td>
					    <td class="childNames">
					    	<select name="enrollmentList">
					    		<?php
					    			$kids = array("Select Child", "Riley Penna", "Carisse Penna", "Leah Penna", "Laura Penna", "Connie Wilson", "Tonya Waters", "Dorothy Vercher");
					    			foreach ($kids as $kid) {
					    				if($kid == "Select Child") {
					    		?>
					    					<option selected="<?php echo $kid; ?>" value="<?php echo $kid; ?>"><?php echo $kid; ?></option>			

					    		<?php
					    				} else
					    		?>
					    			<option value="<?php echo $kid; ?>"><?php echo $kid; ?></option>
					    		<?php	
					    			}
					    		?>


					    	</select>
					    </td>
					    <td class="childAges"></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					  </tr>
					  <tr>
					    <td class="childCount">17</td>
					    <td class="childNames">
					    	<select name="enrollmentList">
					    		<?php
					    			$kids = array("Select Child", "Riley Penna", "Carisse Penna", "Leah Penna", "Laura Penna", "Connie Wilson", "Tonya Waters", "Dorothy Vercher");
					    			foreach ($kids as $kid) {
					    				if($kid == "Select Child") {
					    		?>
					    					<option selected="<?php echo $kid; ?>" value="<?php echo $kid; ?>"><?php echo $kid; ?></option>			

					    		<?php
					    				} else
					    		?>
					    			<option value="<?php echo $kid; ?>"><?php echo $kid; ?></option>
					    		<?php	
					    			}
					    		?>


					    	</select>
					    </td>
					    <td class="childAges"></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					  </tr>
					  <tr>
					    <td class="childCount">18</td>
					    <td class="childNames">
					    	<select name="enrollmentList">
					    		<?php
					    			$kids = array("Select Child", "Riley Penna", "Carisse Penna", "Leah Penna", "Laura Penna", "Connie Wilson", "Tonya Waters", "Dorothy Vercher");
					    			foreach ($kids as $kid) {
					    				if($kid == "Select Child") {
					    		?>
					    					<option selected="<?php echo $kid; ?>" value="<?php echo $kid; ?>"><?php echo $kid; ?></option>			

					    		<?php
					    				} else
					    		?>
					    			<option value="<?php echo $kid; ?>"><?php echo $kid; ?></option>
					    		<?php	
					    			}
					    		?>


					    	</select>
					    </td>
					    <td class="childAges"></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					  </tr>
					  <tr>
					    <td class="childCount">19</td>
					    <td class="childNames">
					    	<select name="enrollmentList">
					    		<?php
					    			$kids = array("Select Child", "Riley Penna", "Carisse Penna", "Leah Penna", "Laura Penna", "Connie Wilson", "Tonya Waters", "Dorothy Vercher");
					    			foreach ($kids as $kid) {
					    				if($kid == "Select Child") {
					    		?>
					    					<option selected="<?php echo $kid; ?>" value="<?php echo $kid; ?>"><?php echo $kid; ?></option>			

					    		<?php
					    				} else
					    		?>
					    			<option value="<?php echo $kid; ?>"><?php echo $kid; ?></option>
					    		<?php	
					    			}
					    		?>


					    	</select>
					    </td>
					    <td class="childAges"></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					  </tr>
					  <tr>
					    <td class="childCount">20</td>
					    <td class="childNames">
					    	<select name="enrollmentList">
					    		<?php
					    			$kids = array("Select Child", "Riley Penna", "Carisse Penna", "Leah Penna", "Laura Penna", "Connie Wilson", "Tonya Waters", "Dorothy Vercher");
					    			foreach ($kids as $kid) {
					    				if($kid == "Select Child") {
					    		?>
					    					<option selected="<?php echo $kid; ?>" value="<?php echo $kid; ?>"><?php echo $kid; ?></option>			

					    		<?php
					    				} else
					    		?>
					    			<option value="<?php echo $kid; ?>"><?php echo $kid; ?></option>
					    		<?php	
					    			}
					    		?>


					    	</select>
					    </td>
					    <td class="childAges"></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					  </tr>
					  <tr>
					    <td class="childCount">21</td>
					    <td class="childNames">
					    	<select name="enrollmentList">
					    		<?php
					    			$kids = array("Select Child", "Riley Penna", "Carisse Penna", "Leah Penna", "Laura Penna", "Connie Wilson", "Tonya Waters", "Dorothy Vercher");
					    			foreach ($kids as $kid) {
					    				if($kid == "Select Child") {
					    		?>
					    					<option selected="<?php echo $kid; ?>" value="<?php echo $kid; ?>"><?php echo $kid; ?></option>			

					    		<?php
					    				} else
					    		?>
					    			<option value="<?php echo $kid; ?>"><?php echo $kid; ?></option>
					    		<?php	
					    			}
					    		?>


					    	</select>
					    </td>
					    <td class="childAges"></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					  </tr>
					  <tr>
					    <td class="childCount">22</td>
					    <td class="childNames">
					    	<select name="enrollmentList">
					    		<?php
					    			$kids = array("Select Child", "Riley Penna", "Carisse Penna", "Leah Penna", "Laura Penna", "Connie Wilson", "Tonya Waters", "Dorothy Vercher");
					    			foreach ($kids as $kid) {
					    				if($kid == "Select Child") {
					    		?>
					    					<option selected="<?php echo $kid; ?>" value="<?php echo $kid; ?>"><?php echo $kid; ?></option>			

					    		<?php
					    				} else
					    		?>
					    			<option value="<?php echo $kid; ?>"><?php echo $kid; ?></option>
					    		<?php	
					    			}
					    		?>


					    	</select>
					    </td>
					    <td class="childAges"></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					  </tr>
					  <tr>
					    <td class="childCount">23</td>
					    <td class="childNames">
					    	<select name="enrollmentList">
					    		<?php
					    			$kids = array("Select Child", "Riley Penna", "Carisse Penna", "Leah Penna", "Laura Penna", "Connie Wilson", "Tonya Waters", "Dorothy Vercher");
					    			foreach ($kids as $kid) {
					    				if($kid == "Select Child") {
					    		?>
					    					<option selected="<?php echo $kid; ?>" value="<?php echo $kid; ?>"><?php echo $kid; ?></option>			

					    		<?php
					    				} else
					    		?>
					    			<option value="<?php echo $kid; ?>"><?php echo $kid; ?></option>
					    		<?php	
					    			}
					    		?>


					    	</select>
					    </td>
					    <td class="childAges"></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					  </tr>
					  <tr>
					    <td class="childCount">24</td>
					    <td class="childNames">
					    	<select name="enrollmentList">
					    		<?php
					    			$kids = array("Select Child", "Riley Penna", "Carisse Penna", "Leah Penna", "Laura Penna", "Connie Wilson", "Tonya Waters", "Dorothy Vercher");
					    			foreach ($kids as $kid) {
					    				if($kid == "Select Child") {
					    		?>
					    					<option selected="<?php echo $kid; ?>" value="<?php echo $kid; ?>"><?php echo $kid; ?></option>			

					    		<?php
					    				} else
					    		?>
					    			<option value="<?php echo $kid; ?>"><?php echo $kid; ?></option>
					    		<?php	
					    			}
					    		?>


					    	</select>
					    </td>
					    <td class="childAges"></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					  </tr>
					  <tr>
					    <td class="childCount">25</td>
					    <td class="childNames">
					    	<select name="enrollmentList">
					    		<?php
					    			$kids = array("Select Child", "Riley Penna", "Carisse Penna", "Leah Penna", "Laura Penna", "Connie Wilson", "Tonya Waters", "Dorothy Vercher");
					    			foreach ($kids as $kid) {
					    				if($kid == "Select Child") {
					    		?>
					    					<option selected="<?php echo $kid; ?>" value="<?php echo $kid; ?>"><?php echo $kid; ?></option>			

					    		<?php
					    				} else
					    		?>
					    			<option value="<?php echo $kid; ?>"><?php echo $kid; ?></option>
					    		<?php	
					    			}
					    		?>


					    	</select>
					    </td>
					    <td class="childAges"></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					    <td><input type="checkbox" name="attendance"></td>
					    <td><input type="checkbox" name="breakfast"></td>
					    <td><input type="checkbox" name="amSnack"></td>
					    <td><input type="checkbox" name="lunch"></td>
					    <td><input type="checkbox" name="pmSnack"></td>
					    <td><input type="checkbox" name="supper"></td>
					    <td><input type="checkbox" name="eveningSnack"></td>
					    <td></td>
					  </tr>
					</table>
					<div class="footer">
						<div id="disclaimer"><p>I certify that the information on this form is true and correct to the best of my knowledge and that I will claim reimbursement only for eligible meals served to eligible participants. I understand that misrepresentation may result in prosecution under applicable state or federal statutes.</p></div>
						<div id="signature">Signature--Center/Emergency Shelter Representative</div>
						<div id="signatureDate">Date</div>
						<div class="pages">Page</div>
						<div class="pages line"></div>
						<div class="pages">of</div>
						<div class="pages line"></div>
					</div>

				</div>
			


			</form>







		</div>


<?php include("inc/footer.php"); ?>