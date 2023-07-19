		function submitLeave() {
			const from = new Date(document.getElementById("from").value);
			const to = new Date(document.getElementById("to").value);
			let difference = to.getTime() - from.getTime();
			let duration = Math.ceil(difference / (1000 * 3600 * 24)); 
			document.getElementById("duration").value = duration;
	   
			//let normal = hrrate * hrsworked * days;
			//document.getElementById("normal").value = normal.toFixed(2);

			let remainingLeaveDays = 30;
	
				  //let duration = parseInt(document.getElementById("duration").value);
	  
				  if (duration > remainingLeaveDays) {
					alert("Not enough leave days")
					//window.alert(document.getElementById("result").textContent = "Not enough leave days");
					//window.location.href="leave.php";
				} else {
					 remainingLeaveDays -= duration;
					  document.getElementById("result").value= remainingLeaveDays;
			
					  //document.getElementById("result").innerHTML = " Remaining Annual leave days:"+ remainingLeaveDays;
			window.alert( document.getElementById("result").value = "Leave application received. Remaining leave days: " + remainingLeaveDays);
		
					   }
			  }